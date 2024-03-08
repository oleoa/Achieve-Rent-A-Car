@php $slides = 3; @endphp

<!-- Carousel Section -->
<div class="relative z-10 w-full overflow-x-hidden">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner" class="rounded grid transition-transform duration-500 w-full" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
    
    <!-- Carousel Item 1 -->
    <div class="w-full flex items-center justify-center h-homeTitleXL bg-cover bg-center" style="background-image: url('/img/home/banner1.png')">

      <h1>Item 1</h1>

    </div>
    
    <!-- Carousel Item 2 -->
    <div class="w-full flex items-center justify-center h-homeTitleXL bg-cover bg-center" style="background-image: url('/img/home/banner2.png')">

      <h1>Item 2</h1>

    </div>
    
    <!-- Carousel Item 3 -->
    <div class="w-full flex items-center justify-center h-homeTitleXL bg-cover bg-center" style="background-image: url('/img/home/banner3.png')">

      <h1>Item 3</h1>

    </div>

  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 xl:z-auto z-40" id="carousel-indicators-div">
  
    @for ($i = 0; $i <= $slides-1; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>

    @endfor

  </div>
    
</div>