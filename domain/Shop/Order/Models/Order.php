<?php

declare(strict_types=1);

namespace Domain\Shop\Order\Models;

use App\Casts\MoneyCast;
use App\Helpers;
use Carbon\Carbon;
use Domain\Access\Admin\Models\Admin;
use Domain\Shop\Branch\Models\Branch;
use Domain\Shop\Customer\Models\Customer;
use Domain\Shop\Order\Enums\PaymentMethod;
use Domain\Shop\Order\Enums\PaymentStatus;
use Domain\Shop\Order\Enums\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Domain\Shop\Order\Models\Order
 *
 * @property int $id
 * @property int $branch_id
 * @property int $customer_id
 * @property int|null $admin_id
 * @property string $receipt_number
 * @property float $total_price for money
 * @property string|null $notes
 * @property \Domain\Shop\Order\Enums\PaymentMethod|null $payment_method PHP backed enum
 * @property \Domain\Shop\Order\Enums\PaymentStatus $payment_status PHP backed enum
 * @property \Domain\Shop\Order\Enums\Status $status PHP backed enum
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Domain\Access\Admin\Models\Admin|null $admin
 * @property-read \Domain\Shop\Branch\Models\Branch $branch
 * @property-read \Domain\Shop\Customer\Models\Customer $customer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Domain\Shop\Order\Models\OrderItem> $orderItems
 * @property-read int|null $order_items_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereReceiptNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\Domain\Shop\Order\Models\Order withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Order extends Model
{
    use LogsActivity;
    use SoftDeletes;

    /** @var array<int, non-empty-string> */
    protected $fillable = [
        'branch_id',
        'customer_id',
        'admin_id',
        'receipt_number',
        'notes',
        'total_price',
        'payment_method',
        'payment_status',
        'status',
    ];

    protected $casts = [
        'payment_method' => PaymentMethod::class,
        'payment_status' => PaymentStatus::class,
        'status' => Status::class,
        'total_price' => MoneyCast::class,
    ];

    public function getRouteKeyName(): string
    {
        return 'receipt_number';
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName(Helpers::getCurrentAuthDriver())
            ->logFillable()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    /** @return \Illuminate\Database\Eloquent\Relations\HasMany<\Domain\Shop\Order\Models\OrderItem> */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Domain\Access\Admin\Models\Admin, \Domain\Shop\Order\Models\Order> */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    /** @return \Illuminatme\Database\Eloquent\Relations\BelongsTo<\Domain\Shop\Customer\Models\Customer, \Domain\Shop\Order\Models\Order> */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Domain\Shop\Branch\Models\Branch, \Domain\Shop\Order\Models\Order> */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public static function orderIn4Week()
    {
        $order = Order::select('created_at')->first();
        $week  = Carbon::parse($order->created_at ?? now())->addWeeks(4);
        return Order::whereDate('created_at', [$order, $week]);
    }

    public static function orderIn6Week()
    {
        $order = Order::select('created_at')->first();
        $week  = Carbon::parse($order->created_at ?? now())->addWeeks(6);
        return Order::whereDate('created_at', [$order, $week]);
    }

    protected static function SalesMonth($month)
    {
        $order = Order::whereMonth('created_at', $month);

        return $order;
    }

    public static function countSalesMonth($month = null)
    {
        $month = $month ?? now()->month();
        return Order::SalesMonth($month)->count();
    }

    public static function sumPriceSalesMonth($month = null)
    {
        $month = $month ?? now()->month();
        $sum = 0;
        $orders = Order::SalesMonth($month)->get();
        foreach ($orders as $key => $order) {
            $sum += $order->orderItems->sum('price');
        }

        return $sum;
    }

    public static function countProductWithStatus($status = null, $month = null, $year = null)
    {
        $month = $month ?? now()->month();
        return Order::where('status', $status)->whereMonth('created_at', $month)->count();
    }

    public static function sumProductWithStatus($status = null, $month = null)
    {
        $month = $month ?? now()->month();
        $Orders = Order::where('status', $status)->whereMonth('created_at', $month)->get();
        $data = 0;
        foreach ($Orders as $key => $order) {
            $data += $order->orderItems->sum('price');
        }

        return $data;
    }

    protected static function SalesYear($year)
    {
        $order = Order::whereYear('created_at', $year);

        return $order;
    }

    public static function countSalesYear($year = null)
    {
        $year = $year ?? now()->year();
        return Order::SalesYear($year)->count();
    }

    public static function sumPriceSalesYear($year = null)
    {
        $year = $year ?? now()->year();
        $sum = 0;
        $orders = Order::SalesMonth($year)->get();
        foreach ($orders as $key => $order) {
            $sum += $order->orderItems->sum('price');
        }

        return $sum;
    }

    public static function countProductWithStatusYear($status = null, $year = null)
    {
        $year = $year ?? now()->year();
        return Order::where('status', $status)->whereYear('created_at', $year)->count();
    }

    public static function sumProductWithStatusYear($status = null, $year = null)
    {
        $year = $year ?? now()->year();
        $Orders = Order::where('status', $status)->whereYear('created_at', $year)->get();
        $data = 0;
        foreach ($Orders as $key => $order) {
            $data += $order->orderItems->sum('price');
        }

        return $data;
    }

    public static function countOrderQ1()
    {
        $now = now();
        $start = $now->month(1)->startOfMonth();
        $end = $now->month(3)->endOfMonth();
        $order = Order::whereBetween('created_at', [$start->toDateString(), $end->toDateString()])->count();

        return $order;
    }

    public static function sumOrderQ1()
    {
        $now = now();
        $start = $now->month(1)->startOfMonth();
        $end = $now->month(3)->endOfMonth();
        $orders = Order::whereBetween('created_at', [$start->toDateString(), $end->toDateString()])->get();
        $sum = 0;
        foreach ($orders as $key => $order) {
            $sum += $order->orderItems->sum('price');
        }

        return $sum;
    }

    public static function countOrderQ2()
    {
        $now = now();
        $start = $now->month(3)->startOfMonth();
        $end = $now->month(6)->endOfMonth();
        $order = Order::whereBetween('created_at', [$start->toDateString(), $end->toDateString()])->count();

        return $order;
    }

    public static function sumOrderQ2()
    {
        $now = now();
        $start = $now->month(3)->startOfMonth();
        $end = $now->month(6)->endOfMonth();
        $orders = Order::whereBetween('created_at', [$start->toDateString(), $end->toDateString()])->get();
        $sum = 0;
        foreach ($orders as $key => $order) {
            $sum += $order->orderItems->sum('price');
        }

        return $sum;
    }
}