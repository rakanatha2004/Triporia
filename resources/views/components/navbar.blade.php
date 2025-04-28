<section class="sticky top-0 bg-white z-50 px-4 md:px-20 shadow-sm">
    <nav class="bg-white">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <!-- Logo -->
          <div class="flex-shrink-0 flex items-center">
            <img class="h-8 w-auto" src="{{ asset('assets/images/Logo.svg') }}" alt="triporia" />
          </div>
  
          <!-- Desktop Menu -->
          <div class="hidden sm:block">
            <div class="flex space-x-4">
              <a href="/" class="rounded-md px-3 py-2 text-sm font-bold text-[#24479C] hover:text-black">Home</a>
              <a href="/about" class="rounded-md px-3 py-2 text-sm font-bold text-[#24479C] hover:text-black">About Us</a>
              <a href="/destination" class="rounded-md px-3 py-2 text-sm font-bold text-[#24479C] hover:text-black">Destination</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-bold text-[#24479C] hover:text-black">Recommended</a>
            </div>
          </div>
  
          <!-- Mobile Hamburger Button -->
          <div class="sm:hidden">
            <button
              id="mobile-menu-button"
              type="button"
              class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-black focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
              aria-controls="mobile-menu"
              aria-expanded="false"
            >
              <span class="sr-only">Open main menu</span>
              <!-- Icon when closed -->
              <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <!-- Icon when open -->
              <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile Menu: hidden by default -->
      <div class="sm:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-md">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-[#24479C] hover:text-black">Home</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-[#24479C] hover:text-black">About Us</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-[#24479C] hover:text-black">Destination</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-[#24479C] hover:text-black">Recommended</a>
        </div>
      </div>
    </nav>
  </section>
  