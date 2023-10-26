<div>
    <div class="flex flex-row">
        @foreach ($product as $dataProduct)
            <a href="{{ route('produk-detail', $dataProduct->id) }}" class="cursor-pointer">
                <section class="basis-1/4 ml-2 mr-2 mb-10 mt-10" wire:key="{{ $dataProduct->id }}">
                    <div class="border border-white p-4 rounded-lg">
                        <img src="{{ $dataProduct->getFirstMediaUrl('image') }}"
                            class="mb-6 rounded-lg shadow-lg dark:shadow-black/20" alt="image" />
                        <div class="text-center text-white">
                            <h1 class="mb-6 text-3xl font-bold text-white">
                                {{ $dataProduct->name }}
                            </h1>
                        </div>
                    </div>
                </section>
            </a>
        @endforeach
    </div>
</div>