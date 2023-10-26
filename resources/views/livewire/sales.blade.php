<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            {{ trans('Sales (Including freight and discounts)') }}
        </x-slot>
        <table class="fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5 ">
            <thead class="bg-gray-50 dark:bg-white/5">
                <tr>
                    <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 text-left">
                        SALES</th>
                    <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 text-left">Qty
                    </th>
                    <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 text-left">Value
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
                <tr>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold text-left">
                        Sales This Month</td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::countSalesMonth() }}
                    </td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::sumPriceSalesMonth() }}
                    </td>
                </tr>
                @foreach (\Domain\Shop\Order\Enums\Status::cases() as $status)
                    <tr>
                        <td
                            class="text-right fi-ta-cell pl-2.5 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 ">
                            <span class="pr-5"> {{ $status->getLabel() }}</span>
                        </td>
                        <td
                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                            {{ \Domain\Shop\Order\Models\Order::countProductWithStatus($status) }}</td>
                        <td
                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                            {{ \Domain\Shop\Order\Models\Order::sumProductWithStatus($status) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold text-left">
                        Sales Last Month</td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::countSalesMonth() }}
                    </td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::sumPriceSalesMonth() }}
                    </td>
                </tr>
                @foreach (\Domain\Shop\Order\Enums\Status::cases() as $status)
                    <tr>
                        <td
                            class="text-right fi-ta-cell pl-2.5 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 ">
                            <span class="pr-5"> {{ $status->getLabel() }}</span>
                        </td>
                        <td
                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                            {{ \Domain\Shop\Order\Models\Order::countProductWithStatus($status,now()->subMonth()->month()) }}
                        </td>
                        <td
                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                            {{ \Domain\Shop\Order\Models\Order::sumProductWithStatus($status,now()->subMonth()->month()) }}
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold text-left">
                        Sales Year To Date</td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::countSalesYear() }}
                    </td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::sumPriceSalesYear() }}
                    </td>
                </tr>
                @foreach (\Domain\Shop\Order\Enums\Status::cases() as $status)
                    <tr>
                        <td
                            class="text-right fi-ta-cell pl-2.5 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 ">
                            <span class="pr-5"> {{ $status->getLabel() }}</span>
                        </td>
                        <td
                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                            {{ \Domain\Shop\Order\Models\Order::countProductWithStatusYear($status) }}
                        </td>
                        <td
                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                            {{ \Domain\Shop\Order\Models\Order::sumProductWithStatusYear($status) }}
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold text-left">
                        Sales Q1</td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::countOrderQ1() }}
                    </td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::sumOrderQ1() }}
                    </td>
                </tr>
                <tr>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold text-left">
                        Sales Q2</td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::countOrderQ2() }}
                    </td>
                    <td
                        class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">
                        {{ \Domain\Shop\Order\Models\Order::sumOrderQ2() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </x-filament::section>
</x-filament-widgets::widget>
