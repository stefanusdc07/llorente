<div>
    <div class="container">
        <div class=" flex justify-center align-center ">
            <div class="py-20 lg:py-24">
                @foreach ($category as $dataCategory)
                    <h1 wire:key="{{ $dataCategory->id }}"
                        class="text-center text-white font-butler text-2xl text-secondary sm:text-3xl md:text-4.5xl lg:text-5xl">
                        {{ $dataCategory->name }}</h1>
                    <livewire:section-product :$dataCategory :key="$dataCategory->id" />
                @endforeach
            </div>
        </div>
    </div>
</div>
