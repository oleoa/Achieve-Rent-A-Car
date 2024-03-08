<!-- Banner Carousel -->
<div class="relative z-10 xl:w-full w-screen overflow-x-hidden xl:h-homeTitleXL h-homeTitle select-none xl:hidden block">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner-mobile" class="rounded grid transition-transform duration-500 xl:h-homeTitleXL h-homeTitle w-full" style="grid-template-columns: @for($i = 1; $i <= 3; $i++) 100% @endfor">
      
    <!-- Carousel Item 1 Mobile -->
    <div class="w-full xl:h-homeTitleXL h-homeTitle bg-cover bg-center py-12 flex justify-center items-start xl:px-margin px-4" style="background-image: url(/img/home/banner1mobile.png)">
      <h1 class="text-white bg-flagRed/70 px-2 py-1 rounded-md font-semibold text-xl drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">{{strtoupper('Rent a Car na Ilha da Madeira')}}</h1>
    </div>

    <!-- Carousel Item 2 Mobile -->
    <div class="w-full xl:h-homeTitleXL h-homeTitle bg-cover bg-center py-12 flex justify-center items-start xl:px-margin px-4" style="background-image: url(/img/home/banner2mobile.png)">
      <h1 class="text-white bg-flagRed/70 px-2 py-1 rounded-md font-semibold text-xl drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">{{strtoupper('Rent a Car na Ilha da Madeira')}}</h1>
    </div>

    <!-- Carousel Item 3 Mobile -->
    <div class="w-full xl:h-homeTitleXL h-homeTitle bg-cover bg-center py-12 flex justify-center items-start xl:px-margin px-4" style="background-image: url(/img/home/banner3mobile.png)">
      <h1 class="text-white bg-flagRed/70 px-2 py-1 rounded-md font-semibold text-xl drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">{{strtoupper('Rent a Car na Ilha da Madeira')}}</h1>
    </div>

  </div>

  <!-- Reviews Image -->
  <div class="absolute bottom-0 left-0 xl:px-margin px-4 py-4 w-full h-full grid xl:grid-cols-3 content-end">
    <img src="{{asset('/img/home/reviews.png')}}" alt="Google Reviews" class="bg-white/70 rounded-md py-1 px-2 w-2/5">
  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full flex justify-center items-center gap-2 p-4 xl:z-auto z-40">
  
    @for ($i = 0; $i <= 2; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner-mobile"></div>

    @endfor

  </div>
    
</div>
