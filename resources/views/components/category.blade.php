<section class="py-6">
  <h2 class="text-3xl font-bold text-center mb-4">Category</h2>

  <!-- wrapper dengan overflow-x-auto di mobile, disable di md ke atas -->
  <div class="flex overflow-x-auto md:overflow-x-visible justify-center md:justify-center px-4 md:px-0 space-x-4">
    <!-- Category Item: Park -->
    <div
      class="flex-shrink-0 w-20 h-28 md:w-[83px] md:h-[120px] flex flex-col items-center justify-center cursor-pointer hover:scale-105 transition-transform"
      onclick="onCategoryTap('Park')"
      role="button"
      aria-label="Category Park"
    >
      <div class="relative w-full h-[50%] bg-[#3F6FDE] rounded-xl">
        <img
          src="{{ asset('assets/images/park.svg') }}"
          alt="Park"
          class="absolute top-[-1/3] left-1/2 transform -translate-x-1/2 w-[60px] h-[60px] md:w-[87px] md:h-[87px] object-contain"
        />
      </div>
      <div class="mt-2 text-sm font-semibold text-black">Park</div>
    </div>

    <!-- Category Item: Nature -->
    <div
      class="flex-shrink-0 w-20 h-28 md:w-[83px] md:h-[120px] flex flex-col items-center justify-center cursor-pointer hover:scale-105 transition-transform"
      onclick="onCategoryTap('Nature')"
      role="button"
      aria-label="Category Nature"
    >
      <div class="relative w-full h-[50%] bg-[#3F6FDE] rounded-xl">
        <img
          src="{{ asset('assets/images/nature.svg') }}"
          alt="Nature"
          class="absolute top-[-1/3] left-1/2 transform -translate-x-1/2 w-[60px] h-[60px] md:w-[87px] md:h-[87px] object-contain"
        />
      </div>
      <div class="mt-2 text-sm font-semibold text-black">Nature</div>
    </div>

    <!-- Category Item: Culinary -->
    <div
      class="flex-shrink-0 w-20 h-28 md:w-[83px] md:h-[120px] flex flex-col items-center justify-center cursor-pointer hover:scale-105 transition-transform"
      onclick="onCategoryTap('Culinary')"
      role="button"
      aria-label="Category Culinary"
    >
      <div class="relative w-full h-[50%] bg-[#3F6FDE] rounded-xl">
        <img
          src="{{ asset('assets/images/culinary.svg') }}"
          alt="Culinary"
          class="absolute top-[-1/3] left-1/2 transform -translate-x-1/2 scale-[1.8] w-[60px] h-[60px] md:w-[87px] md:h-[87px] object-contain"
        />
      </div>
      <div class="mt-2 text-sm font-semibold text-black">Culinary</div>
    </div>
  </div>
</section>
