@php $slides = 3; @endphp

<!-- Carousel Section -->
<div class="relative z-10 w-full overflow-x-hidden">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner-mobile" class="rounded xl:hidden grid transition-transform duration-500 w-screen" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
    
    <!-- Carousel Item 1 -->
    <div class="p-4 w-full flex flex-col items-start justify-start gap-1 h-homeTitle bg-cover bg-bottom" style="background-image: url('/img/home/banner1mobile.png')">

      <h1 class="text-flagRed px-2 py-1 rounded-md bg-white/85 font-medium text-2xl">@lang('home-banner-1-title')</h1>
      
      <p class="text-flagRed rounded-md px-2 py-1 bg-white/85 text-lg font-medium">@lang('home-banner-1-p.1')</p>

      <p class="text-flagRed rounded-md px-2 py-1 bg-white/85 text-lg font-medium">@lang('home-banner-1-p.2')</p>

      <p class="text-flagRed rounded-md px-2 py-1 bg-white/85 text-lg font-medium">@lang('home-banner-1-p.3')</p>

      <p class="text-flagRed rounded-md px-2 py-1 bg-white/85 text-lg font-medium">@lang('home-banner-1-p.4')</p>
      
    </div>
    
    <!-- Carousel Item 2 -->
    <div class="p-4 w-full flex flex-col items-start justify-start gap-1 h-homeTitle bg-cover bg-top" style="background-image: url('/img/home/banner2mobile.png')">

      <h1 class="px-2 py-1 rounded-md bg-white/50 text-flagRed font-medium text-2xl">@lang('home-banner-2-title')</h1>

      <p class="rounded-md px-2 py-1 bg-white/50 text-flagRed text-lg font-medium">@lang('home-banner-2-p.1')</p>

      <p class="rounded-md px-2 py-1 bg-white/50 text-flagRed text-lg font-medium">@lang('home-banner-2-p.2')</p>

    </div>
    
    <!-- Carousel Item 3 -->
    <div class="p-4 w-full flex flex-col items-start justify-start gap-1 h-homeTitle bg-cover bg-center" style="background-image: url('/img/home/banner3mobile.png')">

      <h1 class="text-flagRed px-2 py-1 rounded-md bg-white/75 font-medium text-2xl">@lang('home-banner-3-title')</h1>

      <p class="text-flagRed rounded-md px-2 py-1 bg-white/75 text-lg font-medium">@lang('home-banner-3-p.1')</p>

      <p class="text-flagRed rounded-md px-2 py-1 bg-white/75 text-lg font-medium">@lang('home-banner-3-p.2')</p>

      <p class="text-flagRed rounded-md px-2 py-1 bg-white/75 text-lg font-medium">@lang('home-banner-3-p.3')</p>

    </div>

  </div>

  <!-- Reviews Image -->
  <div class="absolute bottom-0 left-0 xl:px-margin px-4 py-4 w-full h-full grid xl:grid-cols-3 content-end">

    <img src="{{asset('/img/home/reviews.png')}}" alt="Google Reviews" class="bg-white/70 rounded-md py-1 px-2 w-1/4">

  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 xl:z-auto z-40" id="carousel-indicators-div-banner-mobile">
  
    @for ($i = 0; $i <= $slides-1; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner-mobile"></div>

    @endfor

  </div>
    
</div>
