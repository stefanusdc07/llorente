<div class="container" x-data x-init="collectionSliders">
    <div class="hero-slider relative" x-data x-init="new Splide('.hero-slider', { type: 'loop', arrows: false, pagination: true, autoplay: true, interval: 3000, perMove: 1 }).mount()">

        <div class="splide__track">
            <ul class="splide__list">

                <li class="splide__slide">
                    <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                        style="background-image:url(/assets/img/image_1.jpg)">
                        <div
                            class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                            <h3 class="font-butler text-3xl font-medium text-white sm:text-4xl md:text-5xl lg:text-6xl">
                                Architectural Leather Sofas
                                <!-- </h3>
              <a
                href="/collection-grid"
                class="btn btn-primary btn-lg mt-8"
                >Know more</a
              > -->
                        </div>
                    </div>
                </li>

                <li class="splide__slide">
                    <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                        style="background-image:url(/assets/img/image_2.jpg)">
                        <div
                            class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                            <h3
                                class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                                Luxury Design Black <br /> & White Desk
                            </h3>
                            <!-- <a
                href="/collection-grid"
                class="btn btn-primary btn-lg mt-8"
                >Know more</a
              > -->
                        </div>
                    </div>
                </li>

                <li class="splide__slide">
                    <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                        style="background-image:url(/assets/img/contemporary-murano-glass-chandelier.jpg)">
                        <div
                            class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                            <h3 class="font-butler text-3xl font-medium text-white sm:text-4xl md:text-5xl lg:text-6xl">
                                Contemporary Artisan Murano <br /> glass Chandelier
                            </h3>
                            <!-- <a
                href="/collection-grid"
                class="btn btn-primary btn-lg mt-8"
                >Know more</a
              > -->
                        </div>
                    </div>
                </li>

                <li class="splide__slide">
                    <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                        style="background-image:url(/assets/img/marble-bronze-artisan-table.jpg)">
                        <div
                            class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                            <h3
                                class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                                Bronze and Marble Sculptural Tables
                            </h3>
                            <!-- <a
                href="/collection-grid"
                class="btn btn-primary btn-lg mt-8"
                >Know more</a
              > -->
                        </div>
                    </div>
                </li>



            </ul>
        </div>
    </div>

    <!-- <div class="flex flex-col py-20 md:flex-row md:py-24"> -->
    <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6 mt-8 mb-4">
        <!-- Section: Design Block -->
        <section class="mb-32">
            <div class="border border-white p-4 rounded-lg">
                <img src="/assets/img/luxury-furniture.jpg"
                    class="mb-6 w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />


                <div class="mb-6 flex items-center">
                    <img src="#" class="mr-2 h-8 rounded-full" alt="avatar" loading="lazy" />
                </div>

                <div class="text-center text-white">
                    <h1 class="mb-6 text-3xl font-bold text-white">
                        Luxury Furniture Collections
                    </h1>

                    <p>
                        Welcome to our exclusive high end luxury furniture and lighting collections of high profile
                        design merit. All of oour furniture can be customize in materials
                        and finish to create your perfect vision for your interior project. We can assist you to explore
                        our extensive range of luxurious finishes and materias.
                    </p>
        </section>

    </div>


    <!----Two Columnt Section-->
    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
            <div style="border: 1px solid white; border-radius: 0.5rem;" class="p-6">

                <h2 class="mb-16 text-center text-2xl font-bold"></h2>

                <div class="mb-16 flex flex-wrap">
                    <!-- First Column (Left Column) -->
                    <div class="w-full md:w-1/2 mb-8 md:pl-6">
                        <div class="text-center">
                            <h3 class="mb-4 text-2xl font-bold text-white">Design Furniture Collection</h3>
                            <div
                                class="mb-4 flex items-center text-sm font-medium text-danger dark:text-danger-500 text-white">
                            </div>
                            <p class="mb-6 text-neutral-500 dark:text-neutral-300 text-white">
                                Taylor Llorente presents its outstaanding range of high end designer furniture and
                                lighting.
                                Our Collections are draw together using the highest level designer and craftsmend with
                                outstanding skillful
                            </p>
                            <p class="text-neutral-500 dark:text-neutral-300 text-white">
                                CLICK TO VIEW DESIGNER FURNITURE & LIGHTING
                            </p>
                        </div>
                    </div>

                    <!-- Second Column (Right Column) -->
                    <div class="w-full md:w-1/2 mb-6 md:pr-6 ">
                        <div class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
                            data-te-ripple-init data-te-ripple-color="light">
                            <img src="/assets/img/design-taylor-llorente.jpg" class="w-full" alt="Louvre" />
                            <a href="#!">
                                <div
                                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>
                    </div>
        </section>
    </div>





    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
            <div style="border: 1px solid white; border-radius: 0.5rem;" class="p-6">

                <h2 class="mb-16 text-center text-2xl font-bold"></h2>

                <div class="mb-16 flex flex-wrap">
                    <!-- First Column (Left Column) -->
                    <div class="w-full md:w-1/2 mb-6 md:pr-6 ">
                        <div class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
                            data-te-ripple-init data-te-ripple-color="light">
                            <img src="assets\img\luxury-murano-glass-furniture.jpg" class="w-full" alt="Louvre" />
                            <a href="#!">
                                <div
                                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Second Column (Right Column) -->
                    <div class="w-full md:w-1/2 mb-8 md:pl-6">
                        <div class="text-center">
                            <h3 class="mb-4 text-2xl font-bold text-white">Murano Glass & Lighting</h3>
                            <div
                                class="mb-4 flex items-center text-sm font-medium text-danger dark:text-danger-500 text-white">
                            </div>
                            <p class="mb-6 text-neutral-500 dark:text-neutral-300 text-white">
                                Taylor Llorente presents its outstanding range of high end designer furniture and
                                lighting.
                                Our Collections are draw together using the highest level designer and craftsmend with
                                outstanding skillful
                            </p>
                            <p class="text-neutral-500 dark:text-neutral-300 text-white">
                                CLICK TO VIEW DESIGNER FURNITURE & LIGHTING
                            </p>
                        </div>
                    </div>
        </section>
    </div>



    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
            <div style="border: 1px solid white; border-radius: 0.5rem;" class="p-6">

                <h2 class="mb-16 text-center text-2xl font-bold"></h2>

                <div class="mb-16 flex flex-wrap">
                    <!-- First Column (Left Column) -->
                    <div class="w-full md:w-1/2 mb-6 md:pr-6 ">
                        <div class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
                            data-te-ripple-init data-te-ripple-color="light">
                            <img src="assets\img\the-company.jpg" class="w-full" alt="Louvre" />
                            <a href="#!">
                                <div
                                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Second Column (Right Column) -->
                    <div class="w-full md:w-1/2 mb-8 md:pl-6">
                        <div class="text-center">
                            <h3 class="mb-4 text-2xl font-bold text-white">Taylor Llorente Company Profile
                            </h3>
                            <div
                                class="mb-4 flex items-center text-sm font-medium text-danger dark:text-danger-500 text-white">
                            </div>
                            <p class="mb-6 text-neutral-500 dark:text-neutral-300 text-white">
                                Taylor Llorente presents its outstanding range of high end designer furniture and
                                lighting.
                                Our Collections are draw together using the highest level designer and craftsmend with
                                outstanding skillful
                            </p>
                            <p class="text-neutral-500 dark:text-neutral-300 text-white">
                                CLICK TO VIEW DESIGNER FURNITURE & LIGHTING
                            </p>
                        </div>
                    </div>
        </section>
    </div>

    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
            <div style="border: 1px solid white; border-radius: 0.5rem;" class="p-6">

                <h2 class="mb-16 text-center text-2xl font-bold"></h2>

                <div class="mb-16 flex flex-wrap">
                    <!-- First Column (Left Column) -->
                    <div class="w-full md:w-1/2 mb-8 md:pl-6">
                        <div class="text-center">
                            <h3 class="mb-4 text-2xl font-bold text-white">Macassar Ebony Furniture Collection</h3>
                            <div
                                class="mb-4 flex items-center text-sm font-medium text-danger dark:text-danger-500 text-white">
                            </div>
                            <p class="mb-6 text-neutral-500 dark:text-neutral-300 text-white">
                                All our macassar ebony is characterised by clean, pure and sharp lines and silhouettes,
                                architectural or sculptural furniture profiles, emphasised by the use of carefully
                                researched and selected variations of macassar ebony wood species, thoughtfully selected
                                for their exuberant figuration, variation in tones and hues within the wood grain and
                                overall stylisation and or aesthetic merits, enhancing and emphasising the silhouette of
                                these unique furniture pieces. These highly figured macassar ebony furniture pieces are
                                then worked and finished by hand by traditional and most skilful cabinet makers and
                                artisans, whose aim is to 'bring to life' the wonderfully extravagant flame and or
                                figuration of this wood specie, macassar ebony, adorning or dressing, if you like, the
                                actual furniture piece. Macassar ebony is a much sought after and highly valuable wood
                                for fine cabinet making work.
                            </p>
                            <p class="text-neutral-500 dark:text-neutral-300 text-white">
                                CLICK TO VIEW DESIGNER FURNITURE & LIGHTING
                            </p>
                        </div>
                    </div>

                    <!-- Second Column (Right Column) -->
                    <div class="w-full md:w-1/2 mb-6 md:pr-6 ">
                        <div class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
                            data-te-ripple-init data-te-ripple-color="light">
                            <img src="assets\img\macassar-ebony-furniture.jpg" class="w-full" alt="Louvre" />
                            <a href="#!">
                                <div
                                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>
                    </div>
        </section>
    </div>



    <div class="container my-24 mx-auto md:px-6 mt-8 mb-4">
        <!-- Section: Design Block -->
        <section class="mb-32">
            <div class="border border-white p-4 rounded-lg">
                <img src="assets\img\luxury-office-furniture.jpg"
                    class="mb-6 w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />


                <div class="mb-6 flex items-center">
                    <img src="#" class="mr-2 h-8 rounded-full" alt="avatar" loading="lazy" />
                </div>

                <div class="text-center text-white">
                    <h1 class="mb-6 text-3xl font-bold text-white">
                        Office Furniture & Interiors
                    </h1>

                    <p>
                        Welcome to our most exclusive international collections of handmade specialist high end office
                        furniture and lighting, executive and boardroom furniture and interiors.
                    </p>
                    <br>
                    <p>
                        Within our specialist collections we endeavour to provide our clients with rare and unique
                        options and selections for their exclusive and differentiated office space.
                    </p>
                    <br>
                    <p>
                        Our office collection focuses on the ever and most important furniture piece, this being the
                        desk, and the selection of the finest materials and other complimentary pieces. From this we can
                        provide a range of complimentary furniture and lighting pieces. Our range of high profile and
                        highly stylised designer executive desks can be coordinated with other furniture requirements
                        such as office filing drawer solutions, cupboards and or storage furniture pieces, office
                        display and shelving units, as well as wood panelling options as part of the ‘same designer’
                        collection, to name a few.
                    </p>
                    <br>
                    <p>
                        In addition to our office interiors we have a small select range of high end specialist
                        ‘imposing’, yet contemporary, executive desk chairs, swivel armchairs and guest seating in
                        wonderfully and highly stylised finishes and hand finished leathers.
                    </p>
                    <br>
                    <p>
                        Home office and personalised workspace rooms are equally our focus and strength.
                    </p>
                    <br>
                    <p>
                        Click on the office section for our full range of specifically selected directors CEO’S and
                        boardroom interiors and also study our writing desks in our ‘Desks &amp; Bureaus’ under our
                        Table section..
                    </p>
                </div>
        </section>

    </div>
