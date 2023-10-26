<script>
    document.addEventListener('DOMContentLoaded', function () {
        Alpine.data('app', function () {
            return {
                modal: false,
                mobileMenu: false,
                mobileSearch: false,
                mobileCart: false,
            }
        });
    });
</script>



  <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800">
    <div x-data="app">
      <div class="container relative">
  
  <div class="relative z-50 py-6 shadow-xs lg:py-10">
    <div class="flex items-center justify-between">
      <div class="flex items-center">
        <div class="block lg:hidden">
          <i
            class="bx bx-menu text-4xl text-primary"
            @click="mobileMenu = !mobileMenu"
          ></i>
        </div>

        <a
          href="/search"
          class="group ml-2 hidden cursor-pointer rounded-full border-2 border-transparent p-2 transition-colors hover:border-primary focus:outline-none sm:ml-3 sm:p-4 md:ml-5 lg:mr-8 lg:block"
        >
          <img
            src="/assets/img/icons/icon-search.svg"
            class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon search"
          />
          <img
            src="/assets/img/icons/icon-search-hover.svg"
            class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon search hover"
          />
        </a>

        <button
          @click="mobileSearch = !mobileSearch"
          class="group ml-2 block cursor-pointer rounded-full border-2 border-transparent p-2 transition-colors hover:border-primary focus:outline-none sm:ml-3 sm:p-4 md:ml-5 lg:mr-8 lg:hidden"
        >
        <img
        src="/assets/img/icons/icon-search.svg"
        class="block h-6 w-6 group-hover:hidden sm:h-6 sm:w-6 md:h-6 md:w-6"
        alt="icon search"
        
    />
          <img
            src="/assets/img/icons/icon-search-hover.svg"
            class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon search hover"
          />
        </button>

        <a
          href="/account/wishlist"
          class="group hidden rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:p-4 lg:block"
        >
          <img
            src="/assets/img/icons/icon-heart.svg"
            class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon heart"
          />
          <img
            src="/assets/img/icons/icon-heart-hover.svg"
            class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon heart hover"
          />
        </a>
      </div>
      <a href="/">
        <img
          src="/assets/img/taylorllorente_logo.svg"
          class="w-450 h-auto"
          alt="logo"
        />
      </a>
      <div class="flex items-center">
        <a
          href="/account/dashboard"
          class="group rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:p-4"
        >
          <img
            src="/assets/img/icons/icon-user.svg"
            class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon user"
          />
          <img
            src="/assets/img/icons/icon-user-hover.svg"
            class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon user hover"
          />
        </a>

        {{-- <a
          href="/cart/index"
          class="group ml-2 hidden rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:ml-3 sm:p-4 md:ml-5 lg:ml-8 lg:block"
        >
          <img
            src="/assets/img/icons/icon-cart.svg"
            class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon cart"
          />
          <img
            src="/assets/img/icons/icon-cart-hover.svg"
            class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon cart hover"
          />
        </a>
    

        <span
          @click="mobileCart = !mobileCart"
          class="group ml-2 block rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:ml-3 sm:p-4 md:ml-5 lg:ml-8 lg:hidden"
        >
          <img
            src="/assets/img/icons/icon-cart.svg"
            class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon cart"
          />
          <img
            src="/assets/img/icons/icon-cart-hover.svg"
            class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8"
            alt="icon cart hover"
          />
        </span>
      </div> --}}

<div class=" ml-2">
                        <button type="button" x-bind:class="darkMode ? 'bg-indigo-500' : 'bg-gray-200'"
                            x-on:click="darkMode = !darkMode"
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            role="switch" aria-checked="false">
                            <span class="sr-only">Dark mode toggle</span>
                            <span x-bind:class="darkMode ? 'translate-x-5 bg-gray-700' : 'translate-x-0 bg-white'"
                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full shadow ring-0 transition duration-200 ease-in-out">
                                <span
                                    x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                    </svg>
                                </span>
                                <span
                                    x-bind:class="darkMode ?  'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        </button>
                    </div>
                </div>



      <div class="hidden">
        <i
          class="bx bx-menu text-3xl text-primary"
          @click="mobileMenu = true"
        ></i>
      </div>
    </div>
    <div class="hidden justify-center lg:flex lg:pt-8">
      <ul class="list-reset flex items-center">
         
        <li class="mr-10">
          <a
            href="/"
            class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary dark:bg-gray-800 dark:border-gray-700 dark:text-white text-black"
            >Home</a
          >
        </li>
          
        <li class="mr-10">
          <a
            href="/about"
            class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary dark:bg-gray-800 dark:border-gray-700 dark:text-white text-black"
            >About</a
          >
        </li>

         <li class="mr-10">
          <a
            href="/all"
            class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary dark:bg-gray-800 dark:border-gray-700 dark:text-white text-black"
            >All</a
          >
        </li>
          
    <li class="relative group mr-10 hidden lg:block">
  <div class="flex items-center border-b-2 border-transparent transition-colors group-hover:border-primary">
    {{-- <span class="cursor-pointer px-2 font-hk text-lg text-secondary text-white transition-all group-hover:font-bold group-hover:text-primary dark:bg-gray-800 dark:border-gray-700 dark:text-white text-black">Tables</span> --}}
    <i class="bx bx-chevron-down px-2 pl-2 text-secondary transition-colors group-hover:text-primary"></i>
  </div>
  <div class="mega-menu pointer-events-none absolute top-16 left-0 right-0 z-50 mx-auto w-2/3 pt-10 opacity-0 group-hover:pointer-events-auto group-hover:opacity-100">
    <div class="relative flex rounded-b p-8 shadow-lg transition-all bg-gray-400"> <!-- Change background to grey (bg-gray-400) -->
      <div class="relative z-20 flex-1 text-center">
        {{-- <h4 class="font-hkbold mb-2 text-base text-secondary">Man</h4> --}}
        <ul>
          <li>
            {{-- <a href="/collection-grid" class="block border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter hover:text-primary">Boots</a>
          </li>
          <li>
            <a href="/collection-grid" class="block border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter hover:text-primary">Blutcher Boot</a>
          </li>
          <li>
            <a href="/collection-grid" class="block border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter hover:text-primary">Chelsea Boot</a>
          </li> --}}
          <!-- Other menu items -->
        </ul>
      </div>
    </div>
  </div>
</li>



          
        <li class="mr-10">
          <a
            href="/contact"
            class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary dark:bg-gray-800 dark:border-gray-700 dark:text-white text-black"
            >Contact</a
          >
        </li>
         
      </ul>
    </div>
  </div>
</div>

<div
  class="pointer-events-none fixed inset-x-0 z-50 pt-20 opacity-0 transition-all md:top-28"
  :class="{ 'opacity-100 pointer-events-auto': mobileMenu }"
>
  <div
    class="absolute left-0 top-0 z-40 w-full bg-white px-6 shadow-sm sm:w-1/2"
  >
    <a
      href="/"
      class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary"
      >Home
    </a>
    <a
      href="/account/wishlist.html"
      class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary"
      >Wishlist
    </a>
    <div
      class="block w-full border-b border-grey-dark py-3"
      x-data="{
                isParentAccordionOpen: false
            }"
    >
      <div
        class="flex items-center justify-between"
        @click="isParentAccordionOpen = !isParentAccordionOpen"
      >
        <span
          class="block font-hk font-medium transition-colors"
          :class="isParentAccordionOpen ? 'text-primary' : 'text-secondary'"
          >Collections</span
        >
        <i
          class="bx text-xl text-secondary"
          :class="isParentAccordionOpen ? 'bx-chevron-down' : 'bx-chevron-left'"
        ></i>
      </div>
      <div
        class="transition-all"
        :class="isParentAccordionOpen ? 'max-h-infinite' : 'max-h-0 overflow-hidden'"
      >
        <div
          x-data="{
                    isAccordionOpen: false
                }"
        >
          <div
            class="flex items-center pt-3"
            @click="isAccordionOpen = !isAccordionOpen"
          >
            <i
              class="bx pr-3 text-xl transition-colors"
              :class="isAccordionOpen ? 'bx-chevron-down text-secondary' : 'bx-chevron-right text-grey-darkest'"
            ></i>
            <a
              href="/collection-grid.html"
              class="font-hk font-medium transition-colors"
              :class="isAccordionOpen ? 'text-primary' : 'text-grey-darkest'"
              >Men's Fashion</a
            >
          </div>
          <div
            class="pl-12 transition-all"
            :class="isAccordionOpen ? 'max-h-infinite' : 'max-h-0 overflow-hidden'"
          >
            <a
              href="/collection-grid.html"
              class="mt-2 block font-hk font-medium text-secondary"
              >T-Shirts</a
            >
            <a
              href="/collection-grid.html"
              class="mt-2 block font-hk font-medium text-secondary"
              >Shirts</a
            >
            <a
              href="/collection-grid.html"
              class="mt-2 block font-hk font-medium text-secondary"
              >Men’s Bags</a
            >
            <a
              href="/collection-grid.html"
              class="mt-2 block font-hk font-medium text-secondary"
              >Travel Essentials</a
            >
          </div>
        </div>
        <div class="flex items-center pt-3">
          <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
          <a
            href="/collection-grid.html"
            class="font-hk font-medium text-grey-darkest"
            >Women's Fashion</a
          >
        </div>
        <div class="flex items-center pt-3">
          <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
          <a
            href="/collection-grid.html"
            class="font-hk font-medium text-grey-darkest"
            >Baggage</a
          >
        </div>
        <div class="flex items-center pt-3">
          <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
          <a
            href="/collection-grid.html"
            class="font-hk font-medium text-grey-darkest"
            >Camp</a
          >
        </div>
        <div class="flex items-center pt-3">
          <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
          <a
            href="/collection-grid.html"
            class="font-hk font-medium text-grey-darkest"
            >Personal Care</a
          >
        </div>
        <div class="flex items-center pt-3">
          <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
          <a
            href="/collection-grid.html"
            class="font-hk font-medium text-grey-darkest"
            >Backpacks</a
          >
        </div>
        <div class="flex items-center pt-3">
          <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
          <a
            href="/collection-grid.html"
            class="font-hk font-medium text-grey-darkest"
            >Pullovers</a
          >
        </div>
      </div>
    </div>
    <a
      href="/about.html"
      class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary"
      >About
    </a>
    <a
      href="/contact#faq"
      class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary"
      >FAQ
    </a>
    <a
      href="/blog.html"
      class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary"
      >Blog
    </a>
    <a
      href="/contact.html"
      class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary"
      >Contact
    </a>
    <div class="my-8">
      <a
        href="/login"
        class="btn btn-primary mb-4 w-full"
        aria-label="Login button"
        >Login Account</a
      >

      <a
        href="/register"
        class="block pl-3 text-center font-hk text-secondary underline md:text-lg"
        >Create your account</a
      >
    </div>
  </div>
</div>

<div
  class="pointer-events-none absolute inset-x-0 top-20 z-50 opacity-0 lg:top-28"
  :class="{ 'opacity-100 pointer-events-auto': mobileSearch }"
>
  <div class="container">
    <div class="z-10 w-full rounded bg-white shadow-sm sm:w-1/2 lg:w-1/4">
      <form
        action="/search"
        class="flex items-center rounded-md border border-grey-dark px-4 py-3"
      >
        <input
          type="text"
          name="search"
          class="w-full border-grey-dark font-hk font-medium text-secondary placeholder-grey-darkest outline-none focus:border-primary focus:outline-none focus:ring focus:ring-primary"
          placeholder="Search for a product"
        />
        <button
          class="flex items-center focus:border-transparent focus:outline-none"
        >
          <i class="bx bx-search ml-4 text-xl text-primary"></i>
        </button>
      </form>
    </div>
  </div>
</div>

<div
  class="pointer-events-none absolute inset-x-0 z-50 opacity-0"
  :class="{ 'opacity-100 pointer-events-auto': mobileCart }"
>
  <div
    class="absolute right-0 top-0 z-10 w-full rounded bg-white px-6 py-6 shadow-sm sm:w-1/2"
  >
    <div
      class="flex items-center justify-between border-b border-grey-dark pb-2"
    >
      <div class="flex items-center">
        <i
          class="bx bx-x mr-2 cursor-pointer text-2xl text-grey-darkest sm:text-3xl"
        ></i>
        <div class="mx-0 flex h-20 w-20 items-center justify-center rounded">
          <div
            class="mx-auto h-16 w-16 bg-cover bg-center bg-no-repeat"
            style="background-image: url(/assets/img/unlicensed/backpack-1.png)"
          ></div>
        </div>
        <div class="pl-2">
          <span class="block font-hk text-base text-grey-darkest"
            >Winter Bag</span
          >
          <span class="mt-2 font-hk text-base text-secondary">$19</span>
        </div>
      </div>
      <div class="flex items-center pl-3">
        <span
          class="flex h-6 w-6 items-center justify-center rounded-full border border-primary"
          ><i class="bx bx-minus text-primary"></i
        ></span>
        <span class="font-hkbold block px-2 text-lg text-primary">1</span>
        <span
          class="flex h-6 w-6 items-center justify-center rounded-full border border-primary"
          ><i class="bx bx-plus text-primary"></i
        ></span>
      </div>
    </div>
    <div
      class="flex items-center justify-between border-b border-grey-dark pb-2"
    >
      <div class="flex items-center">
        <i
          class="bx bx-x mr-2 cursor-pointer text-2xl text-grey-darkest sm:text-3xl"
        ></i>
        <div class="mx-0 flex h-20 w-20 items-center justify-center rounded">
          <div
            class="mx-auto h-16 w-16 bg-cover bg-center bg-no-repeat"
            style="background-image: url(/assets/img/unlicensed/backpack-1.png)"
          ></div>
        </div>
        <div class="pl-2">
          <span class="block font-hk text-base text-grey-darkest"
            >Winter Bag</span
          >
          <span class="mt-2 font-hk text-base text-secondary">$19</span>
        </div>
      </div>
      <div class="flex items-center pl-3">
        <span
          class="flex h-6 w-6 items-center justify-center rounded-full border border-primary"
          ><i class="bx bx-minus text-primary"></i
        ></span>
        <span class="font-hkbold block px-2 text-lg text-primary">1</span>
        <span
          class="flex h-6 w-6 items-center justify-center rounded-full border border-primary"
          ><i class="bx bx-plus text-primary"></i
        ></span>
      </div>
    </div>
    <div class="flex justify-between pt-4">
      <span class="font-hkbold text-lg text-secondary">Total</span>
      <span class="font-hkbold text-lg text-secondary">$38</span>
    </div>
    <button
      type="submit"
      class="btn btn-primary mt-5 w-full"
      aria-label="Login button"
    >
      Checkout
    </button>
    <a
      href="/cart"
      class="mt-4 block pl-3 text-center font-hk text-secondary underline md:text-lg"
      >Go to cart page</a
    >
  </div>
</div>
 <div>