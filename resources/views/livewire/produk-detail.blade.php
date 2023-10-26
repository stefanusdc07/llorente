<div>
    <div class="container">
        <div class="-mx-5 flex flex-col justify-between pt-16 pb-24 lg:flex-row">
            <div class="flex flex-col-reverse justify-between px-5 sm:flex-row-reverse lg:w-1/2 lg:flex-row"
                x-data="{ selectedImage: '{{ $produk->getFirstMediaUrl('image') }}' }">
                <div class="flex flex-row sm:flex-col sm:pl-5 md:pl-4 lg:pl-0 lg:pr-2 xl:pr-3">
                    @foreach ($produk->getMedia('*') as $media)
                        <div class="relative mr-3 w-28 pb-5 sm:w-32 sm:pr-0 lg:w-24 xl:w-28">
                            <div
                                class="relative flex w-full items-center justify-center rounded dark:border-white border-black border">
                                <img class="cursor-pointer object-cover" @click="selectedImage = $event.target.src"
                                    alt="product image" src="{{ $media->getFullUrl() }}" />
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="relative w-full pb-5 sm:pb-0">
                    <div
                        class="aspect-w-1 aspect-h-1 relative flex items-center justify-center rounded dark:border-white border-black border">
                        <img class="object-cover" alt="product image" :src="selectedImage" />
                    </div>
                </div>
            </div>

            <div class="px-5 pt-8 lg:w-1/2 lg:pt-0">
                <div class="mb-8 dark:border-b border-grey-dark border-black">
                    <div class="flex items-center">
                        <h2 class="font-butler text-3xl md:text-4xl lg:text-4.5xl dark:text-white text-black">
                            {{ ucwords($produk->name) }}
                        </h2>
                    </div>
                    <div class="flex items-center pt-3">
                        <span
                            class="font-hk text-2xl text-white text-secondary">${{ number_format($sku->price, 1, ',', '.') }}</span>
                    </div>
                    <div class="flex items-center pt-3 pb-8">
                        <div class="flex items-center">
                            <i class="bx bxs-star text-primary"></i>
                            <i class="bx bxs-star text-primary"></i>
                            <i class="bx bxs-star text-primary"></i>
                            <i class="bx bxs-star text-primary"></i>
                            <i class="bx bxs-star text-primary"></i>
                        </div>
                        <span class="ml-2 font-hk text-sm text-secondary">(45)</span>
                    </div>
                </div>
                <table class="dark:bg-custom-color text-white p-4 rounded-lg">
                    <tbody>
                        <tr class="dark:bg-custom-color">
                            <td>Product reference</td>
                            <td>:</td>
                            <td>{{ $sku->code }}</td>
                        </tr>
                        @foreach ($sku->attributeOptions as $options)
                            <tr class="dark:bg-custom-color odd">
                                <td>{{ $options->attribute->name }}</td>
                                <td>:</td>
                                <td>{{ $options->value }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p class="pb-5 font-hk text-secondary dark:text-white text-black">{!! $produk->description !!}</p>
                <div class="flex justify-between pb-4">
                    <div class="w-1/3 sm:w-1/5">
                        <p class="font-hk text-secondary dark:text-white text-black">Color</p>
                    </div>
                    <div class="flex w-2/3 items-center sm:w-5/6">
                        <div
                            class="mr-2 cursor-pointer rounded-full dark:border-2 border-2 border-transparent bg-primary px-2 py-2 transition-colors hover:border-black">
                        </div>
                        <div
                            class="mr-2 cursor-pointer rounded-full dark:border-2 border-2 border-transparent bg-secondary-light px-2 py-2 transition-colors hover:border-black">
                        </div>
                        <div
                            class="mr-2 cursor-pointer rounded-full dark:border-2 border-2 border-transparent bg-v-green px-2 py-2 transition-colors hover:border-black">
                        </div>
                        <div
                            class="cursor-pointer rounded-full dark:border-2 border-2 border-transparent bg-v-blue px-2 py-2 transition-colors hover:border-black">
                        </div>
                    </div>
                </div>
                <div class="group flex pb-8">
                    <a href="/order-form"
                        class="btn btn-outline mr-4 md:mr-6 bg-black text-white dark:border-white border-white">Make
                        Enquiry</a>
                    <a href="/"
                        class="btn btn-outline mr-4 md:mr-6 bg-black text-white dark:border-white border-white">Back</a>
                </div>
            </div>

        </div>
        <div class="pb-20 md:pb-32">
            <div class="mb-12 text-center">
                <h2 class="font-butler text-3xl text-secondary md:text-4xl lg:text-4.5xl dark:text-white text-black">
                    Related Products
                </h2>
                <p class="pt-2 pb-6 font-hk text-lg text-secondary-lighter sm:pb-8 md:text-xl lg:pb-0 dark:text-white text-black">
                    Get the latest news & updates from Llorente
                </p>
            </div>
            <div class="product-slider relative" x-data x-init="new Splide($el, {
                    type: 'loop',
                    start: 1,
                    perPage: 4,
                    gap: 0,
                    perMove: 1,
                    rewind: true,
                    pagination: false,
                    padding: {
                        left: 50,
                        right: 50,
                    },
                    breakpoints: {
                        1024: {
                            perPage: 3,
                            padding: {
                                left: 20,
                                right: 20,
                            },
                        },
                        768: {
                            perPage: 2,
                            padding: {
                                left: 10,
                                right: 10,
                            },
                        },
                        600: {
                            perPage: 1,
                            padding: {
                                left: 0,
                                right: 0,
                            },
                        },
                    },
                })
                .mount();">

                <!--Splide Arrows-->
                <div class="splide__arrows">
                    <div
                        class="splide__arrow--prev group absolute left-25 top-50 z-30 -translate-y-1/2 transform cursor-pointer rounded-full dark:border border-2 border-grey-dark bg-grey shadow-md transition-all hover:bg-primary sm:left-35 md:left-0">
                        <div class="flex h-12 w-12 items-center justify-center">
                            <i
                                class="bx bx-chevron-left text-3xl leading-none text-primary transition-colors group-hover:text-white"></i>
                        </div>
                    </div>
                    <div
                        class="splide__arrow--next group absolute right-25 top-50 z-30 -translate-y-1/2 transform cursor-pointer rounded-full dark:border border-2 border-grey-dark bg-grey shadow-md transition-all hover:bg-primary sm:right-35 md:right-0">
                        <div class="flex h-12 w-12 items-center justify-center">
                            <i
                                class="bx bx-chevron-right text-3xl leading-none text-primary transition-colors group-hover:text-white"></i>
                        </div>
                    </div>
                </div>
                <!--Splide JS-->
                <div class="splide__track">
                    <div class="splide__list relative pt-12">
                        @foreach ($allProduk as $related)
                            <div class="splide__slide group relative pt-16 md:pt-0">
                                <div class="sm:px-5 lg:px-4">
                                    <div class="relative flex items-center justify-center rounded">
                                        <div class="aspect-w-1 aspect-h-1 w-full">
                                            <img src="{{ $related->getFirstMediaUrl('image') }}" alt="product image"
                                                class="object-cover" />
                                        </div>
                                        <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                                            <p class="text-v-green font-hk font-bold text-sm uppercase tracking-wide">
                                                New
                                            </p>
                                        </div>
                                        <div
                                            class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                                            <a href="/cart"
                                                class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover-bg-primary-light">
                                                <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6"
                                                    alt="icon cart" />
                                            </a>
                                            <a href="{{ route('produk-detail', $related->id) }}"
                                                class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover-bg-primary-light">
                                                <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                                    alt="icon search" />
                                            </a>
                                            <a href="/account/wishlist/"
                                                class="flex items-center rounded-full bg-white p-3 transition-all hover-bg-primary-light">
                                                <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6"
                                                    alt="icon heart" />
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{ route('produk-detail', $related->id) }}"
                                        class="flex items-center justify-between pt-6">
                                        <div>
                                            <h3 class="font-hk text-base text-secondary dark:text-white text-black">
                                                {{ $related->name }}
                                            </h3>
                                            <div class="flex items-center">
                                                <div class="flex items-center">
                                                    <i class="bx bxs-star text-primary"></i>
                                                    <i class="bx bxs-star text-primary"></i>
                                                    <i class="bx bxs-star text-primary"></i>
                                                    <i class "bx bxs-star text-primary"></i>
                                                    <i class="bx bxs-star text-primary"></i>
                                                </div>
                                                <span class="ml-2 font-hk text-sm text-secondary dark:text-white text-black">45</span>
                                            </div>
                                        </div>
                                        <span
                                            class="font-hkbold text-xl text-primary">${{ number_format($related->getPrice(), 1, ',', '.') }}</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
