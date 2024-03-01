<!-- Banner Carousel -->
<div class="relative z-10 w-full overflow-x-hidden">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner" class="rounded grid transition-transform duration-500 h-full w-full" style="grid-template-columns: @for($i = 1; $i <= 5; $i++) 100% @endfor">
  
    @for ($i = 1; $i <= 5; $i++)
    
      <!-- Carousel Item -->
      <div class="w-full bg-neutral-200 flex flex-col justify-between xl:px-32 px-4 rounded text-red-500 xl:py-4 xl:pb-4 pb-12">

        <p class="xl:py-4 py-2">@lang('home-reviews-'.$i.'-paragraph')</p>

        <div class="py-4 xl:flex items-center justify-start grid grid-cols-2 gap-2">

          <p>@lang('home-reviews-'.$i.'-author')</p>

          <div class="h-4 flex gap-1">
            <x-font-awesome.star/>
            <x-font-awesome.star/>
            <x-font-awesome.star/>
            <x-font-awesome.star/>
            <x-font-awesome.star/>
          </div>

        </div>

      </div>

    @endfor

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
    
      @for ($i = 0; $i <= 4; $i++)
        <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>
      @endfor

    </div>
    
</div>
