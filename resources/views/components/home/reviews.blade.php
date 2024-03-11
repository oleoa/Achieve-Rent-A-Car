<!-- Reviews -->
@php $slides = 5; @endphp

<!-- Separator -->
<div class="flex items-center justify-center py-4">
  <div class="xl:w-1/3 w-full">
    <x-separator/>
  </div>
</div>

<!-- Carousel Section -->
<div class="relative z-10 w-full overflow-x-hidden">

  <!-- Carousel Slide -->
  <div id="carousel-slide-reviews" class="rounded grid transition-transform duration-500 w-full" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
    
    @for ($i = 1; $i <= 5; $i++)
        
      <!-- Carousel Item -->
      <div class="w-full bg-neutral-200 flex flex-col justify-between xl:px-margin px-4 rounded text-red-500 xl:py-4 xl:pb-4 pb-12">

        <p class="xl:py-4 py-2">@lang('home-reviews-'.$i.'-paragraph')</p>

        <div class="py-4 xl:flex items-center justify-start grid grid-cols-2 gap-2">

          <p>@lang('home-reviews-'.$i.'-author')</p>

          <div class="h-4 flex gap-1">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
          </div>

        </div>

      </div>

    @endfor

  </div>

  <!-- Carousel Buttons -->
  <div class="absolute top-0 w-full h-full hidden justify-between xl:items-center items-end xl:z-auto z-50" id="carousel-buttons-div-reviews">
        
    <!-- Previous Button -->
    <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn-reviews">
      <i class="fas fa-arrow-left p-4 xl:h-auto bg-flagRed h-16 w-16 text-4xl rounded-xl text-white"></i>
    </button>
    
    <!-- Next Button -->
    <button class="cursor-pointer w-32 flex items-center justify-center" id="nextBtn-reviews">
      <i class="fas fa-arrow-right p-4 xl:h-auto bg-flagRed h-16 w-16 text-4xl rounded-xl text-white"></i>
    </button>

  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 xl:z-auto z-40" id="carousel-indicators-div-reviews">
  
    @for ($i = 0; $i <= $slides-1; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-reviews"></div>

    @endfor

  </div>
    
</div>
