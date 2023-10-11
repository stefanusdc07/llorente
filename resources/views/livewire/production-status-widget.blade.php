<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            {{trans('PRODUCTION STATUS')}}
        </x-slot>
        <table class="fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5 ">
            <thead class="bg-gray-50 dark:bg-white/5">
                <tr>
                    <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 text-left">Production Status</th>
                    <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 text-left">Qty</th>
                    <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 text-left">Value</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
                @foreach(\Domain\Shop\Stock\Enums\StockType::cases() as $type)
                <tr>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">{{$type->getLabel()}}</td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">{{\Domain\Shop\Stock\Models\SkuStock::countStockWithType($type)}}</td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">{{\Domain\Shop\Stock\Models\SkuStock::sumStockWithType($type)}}</td>
                </tr>
                @endforeach
                <tr class="bg-gray-800">
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold text-green-500">Total</td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold"></td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 font-bold">{{\Domain\Shop\Stock\Models\SkuStock::summariesStock()}}</td>
                </tr>
            </tbody>
        </table>
    </x-filament::section>
</x-filament-widgets::widget>
