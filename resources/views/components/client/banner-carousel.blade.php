<!-- Banner Carousel -->
<div class="relative z-10 w-full overflow-x-hidden xl:h-homeTitleXL h-homeTitle">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner" class="rounded grid transition-transform duration-500 xl:h-homeTitleXL h-homeTitle w-full" style="grid-template-columns: @for($i = 1; $i <= 3; $i++) 100% @endfor">
      
    <!-- Carousel Item 1 -->
    <div class="w-full xl:h-homeTitleXL h-homeTitle relative bg-cover bg-center flex items-center justify-center" style="background-image: url(/img/about/2.jpeg)">

      <h1 itemprop="https://schema.org/name" class="text-flagRed p-4 rounded-xl bg-white/75 font-black xl:text-4xl text-lg h-fit w-fit">@lang('home-Banner-Title')</h1>

    </div>
      
    <!-- Carousel Item 1 -->
    <div class="w-full xl:h-homeTitleXL h-homeTitle relative bg-cover bg-center flex items-center justify-center" style="background-image: url(/img/about/2.jpeg)">

      <h1 itemprop="https://schema.org/name" class="text-flagRed p-4 rounded-xl bg-white/75 font-black xl:text-4xl text-lg h-fit w-fit">@lang('home-Banner-Title')</h1>

    </div>
      
    <!-- Carousel Item 1 -->
    <div class="w-full xl:h-homeTitleXL h-homeTitle relative bg-cover bg-center flex items-center justify-center" style="background-image: url(/img/about/2.jpeg)">

      <h1 itemprop="https://schema.org/name" class="text-flagRed p-4 rounded-xl bg-white/75 font-black xl:text-4xl text-lg h-fit w-fit">@lang('home-Banner-Title')</h1>

    </div>

  </div>
    
  <!-- Carousel Buttons -->
  <div class="absolute top-0 w-full h-full flex justify-between xl:items-center items-end xl:z-auto z-50">
  
    <!-- Previous Button -->
    <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn-banner">
      <i class="fas fa-arrow-left p-4 xl:h-auto h-16 w-16 text-4xl rounded-xl text-white"></i>
    </button>
      
    <!-- Next Button -->
    <button class="cursor-pointer w-32 flex items-center justify-center" id="nextBtn-banner">
      <i class="fas fa-arrow-right p-4 xl:h-auto h-16 w-16 text-4xl rounded-xl text-white"></i>
    </button>
  
  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full flex justify-center items-center gap-2 p-4 xl:z-auto z-40">
  
    @for ($i = 0; $i <= 2; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>

    @endfor

  </div>
    
</div>
