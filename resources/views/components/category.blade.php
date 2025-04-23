<section class="py-6">
    <h2 class="text-3xl font-bold text-center mb-4">Category</h2>
  
    <div class="flex justify-center space-x-4">
      <!-- Category Item: Park -->
      <div
        class="w-[83px] h-[120px] flex flex-col items-center justify-center cursor-pointer hover:scale-105 transition-transform"
        onclick="onCategoryTap('Park')"
        role="button"
        aria-label="Category Park"
      >
        <div class="relative w-[83px] h-[51px] bg-[#3F6FDE] rounded-xl">
          <img
            src="{{ asset('assets/images/park.svg') }}"
            alt="Park"
            class="absolute top-[-20px] left-1/2 transform -translate-x-1/2 w-[87px] h-[87px] object-contain"
          />
        </div>
        <div class="mt-2 text-sm font-semibold text-black">Park</div>
      </div>
  
      <!-- Category Item: Nature -->
      <div
        class="w-[83px] h-[120px] flex flex-col items-center justify-center cursor-pointer hover:scale-105 transition-transform"
        onclick="onCategoryTap('Nature')"
        role="button"
        aria-label="Category Nature"
      >
        <div class="relative w-[83px] h-[51px] bg-[#3F6FDE] rounded-xl">
          <img
            src="{{ asset('assets/images/nature.svg') }}"
            alt="Nature"
            class="absolute top-[-20px] left-1/2 transform -translate-x-1/2 w-[87px] h-[87px] object-contain"
          />
        </div>
        <div class="mt-2 text-sm font-semibold text-black">Nature</div>
      </div>
  
      <!-- Category Item: Culinary -->
      <div
        class="w-[83px] h-[120px] flex flex-col items-center justify-center cursor-pointer hover:scale-105 transition-transform"
        onclick="onCategoryTap('Culinary')"
        role="button"
        aria-label="Category Culinary"
      >
        <div class="relative w-[83px] h-[51px] bg-[#3F6FDE] rounded-xl">
          <img
            src="{{ asset('assets/images/culinary.svg') }}"
            alt="Culinary"
            class="absolute top-[-20px] left-1/2 transform -translate-x-1/2 scale-[1.8] w-[87px] h-[87px] object-contain"
          />
        </div>
        <div class="mt-2 text-sm font-semibold text-black">Culinary</div>
      </div>
    </div>
  </section>
  