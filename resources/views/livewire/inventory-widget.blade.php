<x-filament-widgets::widget>
    <x-filament::section class="">
        <x-slot name="heading">
            {{trans('INVENTORY')}}
        </x-slot>
        <table class="fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5 ">
            <thead class="bg-gray-50 dark:bg-white/5">
                <tr>
                    <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 text-left">Inventory</th>
                    <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 text-left">Qty</th>
                    <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 text-left">Value</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
                @foreach(\Domain\Shop\Product\Enums\Status::cases() as $status)
                <tr>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">{{$status->getLabel()}}</td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">{{\Domain\Shop\Product\Models\Product::countProductWithStatus($status)}}</td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">{{\Domain\Shop\Product\Models\Product::sumProductWithStatus($status)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-filament::section>
</x-filament-widgets::widget>
