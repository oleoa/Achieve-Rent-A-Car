<!-- Carousel Banner Computer/Tablet -->
@php $slides = 3; @endphp
<div class="relative z-10 w-full h-homeTitleXL overflow-x-hidden md:flex hidden">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner" class="rounded grid transition-transform duration-500 h-homeTitleXL w-full" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
    
    <!-- Carousel Item 1 -->
    <div class="w-full flex items-center justify-start xl:px-64 px-4 h-homeTitleXL bg-cover bg-bottom" style="background-image: url('/img/home/banner1.png')">

      <div class="bg-white/70 text-red px-4 py-2 rounded-md font-semibold text-2xl">
        <h1>@lang('home-banner-1-title')</h1>
        <p class="flex gap-2 items-end justify-start"><i class="fa-solid fa-check"></i>@lang('home-banner-1-p.1')</p>
        <p class="flex gap-2 items-end justify-start"><i class="fa-solid fa-check"></i>@lang('home-banner-1-p.2')</p>
        <p class="flex gap-2 items-end justify-start"><i class="fa-solid fa-check"></i>@lang('home-banner-1-p.3')</p>
        <p class="flex gap-2 items-end justify-start"><i class="fa-solid fa-check"></i>@lang('home-banner-1-p.4')</p>
        <p class="flex gap-2 items-end justify-start"><i class="fa-solid fa-check"></i>@lang('home-banner-1-p.5')</p>
        <p class="flex gap-2 items-end justify-start"><i class="fa-solid fa-check"></i>@lang('home-banner-1-p.6')</p>
      </div>
      
    </div>
    
    <!-- Carousel Item 2 -->
    <div class="w-full flex items-center justify-end xl:px-64 px-4 h-homeTitleXL bg-cover bg-center" style="background-image: url('/img/home/banner2.png')">

      <div class="bg-white/70 text-red px-4 py-2 rounded-md font-semibold text-2xl">
        <h1 class="text-end">@lang('home-banner-2-title')</h1>
        <p class="flex gap-2 items-end justify-end">@lang('home-banner-2-p.1')<i class="fa-solid fa-check"></i></p>
        <p class="flex gap-2 items-end justify-end">@lang('home-banner-2-p.2')<i class="fa-solid fa-check"></i></p>
      </div>

    </div>
    
    <!-- Carousel Item 3 -->
    <div class="w-full flex items-center justify-start xl:pl-64 pl-4 h-homeTitleXL bg-cover bg-center" style="background-image: url('/img/home/banner3.png')">

      <div class="bg-white/70 text-red px-4 py-2 rounded-md font-semibold text-2xl">
        <h1>@lang('home-banner-3-title')</h1>
        <p class="flex gap-2 items-end justify-start"><i class="fa-solid fa-check"></i>@lang('home-banner-3-p.1')</p>
        <p class="flex gap-2 items-end justify-start"><i class="fa-solid fa-check"></i>@lang('home-banner-3-p.2')</p>
        <p class="flex gap-2 items-end justify-start"><i class="fa-solid fa-check"></i>@lang('home-banner-3-p.3')</p>
      </div>

    </div>

  </div>

  <!-- Reviews Image -->
  <x-google-review/>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 md:z-auto z-40" id="carousel-indicators-div-banner">
  
    <input type="hidden" id="carousel-selected-indicator-color-banner" value="bg-yellow">
    <input type="hidden" id="carousel-default-indicator-color-banner" value="bg-white">
  
    @for ($i = 0; $i <= $slides-1; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>

    @endfor

  </div>
    
</div>
