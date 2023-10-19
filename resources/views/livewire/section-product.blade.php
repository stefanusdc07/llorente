<div>
    @foreach ($product as $dataProduct)
        <section class="mb-10 mt-10" wire:key="{{ $dataProduct->id }}">
            <div class="border border-white p-4 rounded-lg">
                <img src="{{ $dataProduct->getFirstMediaUrl() }}"
                    class="mb-6 w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />
                <div class="text-center text-white">
                    <h1 class="mb-6 text-3xl font-bold text-white">
                        {{ $dataProduct->name }}
                    </h1>
                </div>
            </div>
        </section>
    @endforeach
</div>
