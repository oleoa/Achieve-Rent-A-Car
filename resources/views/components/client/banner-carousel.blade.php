<!-- Banner Carousel -->
<div class="relative z-10 w-full overflow-x-hidden xl:h-homeTitleXL h-homeTitle select-none">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner" class="rounded grid transition-transform duration-500 xl:h-homeTitleXL h-homeTitle w-full" style="grid-template-columns: @for($i = 1; $i <= 3; $i++) 100% @endfor">
      
    <!-- Carousel Item 1 -->
    <div class="w-full xl:h-homeTitleXL h-homeTitle relative bg-cover xl:bg-center bg-right grid xl:grid-cols-2 xl:content-center content-start py-4 xl:px-margin px-4" style="background-image: url(/img/home/banner1.jpg)">

      <h1 itemprop="https://schema.org/name" class="text-flagRed p-4 rounded-xl bg-white/75 font-black xl:text-4xl text-3xl h-fit w-fit">
        @lang('home-Banner-Title.1')
      </h1>

    </div>
      
    <!-- Carousel Item 3 -->
    <div class="w-full xl:h-homeTitleXL h-homeTitle relative bg-cover xl:bg-center bg-right grid xl:grid-cols-2 xl:content-center content-start py-4 xl:px-margin px-4" style="background-image: url(/img/home/banner3.png)">

      <span></span>
      <h1 itemprop="https://schema.org/name" class="text-flagRed p-4 text-end rounded-xl bg-white/75 font-black xl:text-4xl text-3xl h-fit w-fit">
        @lang('home-Banner-Title.3')
      </h1>

    </div>

    <!-- Carousel Item 2 -->
    <div class="w-full xl:h-homeTitleXL h-homeTitle relative bg-cover xl:bg-center bg-right grid xl:grid-cols-2 xl:content-center content-start py-4 xl:px-margin px-4" style="background-image: url(/img/home/banner2.png)">

      <h1 itemprop="https://schema.org/name" class="text-flagRed p-4 rounded-xl bg-white/75 font-black xl:text-4xl text-3xl h-fit w-fit">
        @lang('home-Banner-Title.2')
      </h1>

    </div>

  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full flex justify-center items-center gap-2 p-4 xl:z-auto z-40">
  
    @for ($i = 0; $i <= 2; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>

    @endfor

  </div>
    
</div>
