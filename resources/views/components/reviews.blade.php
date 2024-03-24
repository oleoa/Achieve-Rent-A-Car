<div>

  @php $slides = 4; @endphp
  
  <!-- Reviews Computer -->
  <div class="relative z-10 w-full overflow-x-hidden xl:block hidden">
  
    <!-- Carousel Slide -->
    <div id="carousel-slide-reviews" class="grid transition-transform duration-500 w-full md:margin px-4 pb-8" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) calc(100%/3) @endfor">
      
      @for ($i = 1; $i <= $slides; $i++)
      
        <!-- Carousel Item -->
        <div class="reviews-item w-full p-4 {{$i-1}}-reviews" id="{{$i-1}}-reviews">
  
          <div class="flex flex-col justify-start items-center h-full p-12 gap-4 rounded-lg shadow-2xl bg-white {{$i-1}}-review">

            <div class="flex w-full gap-8 items-start">
              
              <img src="@lang('home-new-reviews-'.$i.'-image')" alt="Valentina Vucicic" class="h-20 w-20">
              
              <div class="flex flex-col gap-2">

                <h2 class="font-bold">@lang('home-new-reviews-'.$i.'-author')</h2>
        
                <h3 class="[&>i]:text-yellow-400 text-base"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>              

              </div>

            </div>

            <p class="font-semibold">@lang('home-new-reviews-'.$i.'-comment')</p>
  
          </div>
  
        </div>
      
      @endfor
  
    </div>
  
    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 md:z-auto z-40" id="carousel-indicators-div-reviews">
    
      <input type="hidden" id="carousel-selected-indicator-color-reviews" value="bg-white">
  
      @for ($i = 0; $i <= $slides-1; $i++)
      
        <div class="w-4 h-4 rounded-full cursor-pointer border-2 border-white" id="carousel-{{$i}}-indicator-reviews"></div>
  
      @endfor
  
    </div>
      
  </div>
  
  <!-- Reviews Mobile/Tablet -->
  <div class="relative z-10 w-full overflow-x-hidden xl:hidden">
  
    <!-- Carousel Slide -->
    <div id="carousel-slide-reviews-mobile" class="grid transition-transform duration-500 w-full py-8" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
    
      @for ($i = 1; $i <= $slides; $i++)
          
        <!-- Carousel Item -->
        <div class="reviews-mobile-item w-full p-4" id="{{$i-1}}-reviews-mobile">
  
          <div class="flex flex-col justify-start items-center h-full p-12 gap-4 rounded-md shadow-2xl">
  
            <img src="@lang('home-new-reviews-'.$i.'-image')" alt="Valentina Vucicic" class="h-20 w-20">
    
            <h2 class="font-bold">@lang('home-new-reviews-'.$i.'-author')</h2>
    
            <h3 class="[&>i]:text-yellow-400 text-base"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
    
            <p>@lang('home-new-reviews-'.$i.'-comment')</p>
  
          </div>
  
        </div>
        
      @endfor
  
    </div>
  
    <!-- Carousel Buttons -->
    <div class="absolute top-0 w-full h-full hidden justify-between md:items-center items-end md:z-auto z-50" id="carousel-buttons-div-reviews-mobile">
          
      <!-- Previous Button -->
      <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn-reviews-mobile">
        <i class="fas fa-arrow-left p-4 md:h-auto bg-flagRed h-16 w-16 text-4xl rounded-xl text-white"></i>
      </button>
      
      <!-- Next Button -->
      <button class="cursor-pointer w-32 flex items-center justify-center" id="nextBtn-reviews-mobile">
        <i class="fas fa-arrow-right p-4 md:h-auto bg-flagRed h-16 w-16 text-4xl rounded-xl text-white"></i>
      </button>
  
    </div>
  
    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 md:z-auto z-40" id="carousel-indicators-div-reviews-mobile">
    
      <input type="hidden" id="carousel-selected-indicator-color-reviews-mobile" value="bg-flagBlue">
  
      @for ($i = 0; $i <= $slides-1; $i++)
      
        <div class="w-4 h-4 rounded-full cursor-pointer border-2 border-flagBlue" id="carousel-{{$i}}-indicator-reviews-mobile"></div>
  
      @endfor
  
    </div>
      
  </div>

</div>
