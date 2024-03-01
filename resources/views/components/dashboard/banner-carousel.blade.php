<!-- Banner Carousel -->
<div class="relative z-10 w-full overflow-hidden xl:h-homeTitleXL h-homeTitle">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner" class="rounded grid transition-transform duration-500 h-full w-full" style="grid-template-columns: @for($i = 1; $i <= 3; $i++) 100% @endfor">
      
    <!-- Carousel Item -->
    <div class="w-full h-full flex flex-col items-center justify-between">

      <img src="{{asset('/img/about/2.jpeg')}}" alt="Banner" class="object-center">

    </div>
      
    <!-- Carousel Item -->
    <div class="w-full h-full flex flex-col items-center justify-between">

      <img src="{{asset('/img/home/banner.jpg')}}" alt="Banner" class="object-center">

    </div>
      
    <!-- Carousel Item -->
    <div class="w-full h-full flex flex-col items-center justify-between">

      <img src="{{asset('/img/home/banner.jpg')}}" alt="Banner" class="">

    </div>

  </div>
    
    <!-- Carousel Buttons -->
    <div class="absolute top-0 w-full h-full flex justify-between xl:items-center items-end xl:z-auto z-50">
    
        <!-- Previous Button -->
        <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn-banner">
          <div class="p-4 xl:h-auto h-16 w-16 bg-red-500 rounded-xl">
            <x-font-awesome.arrow-left/>
          </div>
        </button>
        
        <!-- Next Button -->
        <button class="cursor-pointer w-32 flex items-center justify-center" id="nextBtn-banner">
          <div class="p-4 xl:h-auto h-16 w-16 bg-red-500 rounded-xl">
            <x-font-awesome.arrow-right/>
          </div>
        </button>
    
    </div>

    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full flex justify-center items-center gap-2 p-4 xl:z-auto z-40">
    
      @for ($i = 0; $i <= 2; $i++)
        <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>
      @endfor

    </div>
    
</div>
