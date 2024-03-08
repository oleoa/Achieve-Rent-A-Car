<!-- Banner Carousel -->
<div class="relative z-10 xl:w-full w-screen overflow-x-hidden xl:h-homeTitleXL h-homeTitle select-none xl:block hidden">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner" class="rounded grid transition-transform duration-500 xl:h-homeTitleXL h-homeTitle w-full" style="grid-template-columns: @for($i = 1; $i <= 3; $i++) 100% @endfor">
      
    <!-- Carousel Item 1 -->
    <div class="grid w-full xl:h-homeTitleXL h-homeTitle bg-cover bg-bottom xl:grid-cols-2 xl:content-end content-start py-4 xl:px-margin px-4" style="background-image: url(/img/home/banner1.png)">

    </div>
      
    <!-- Carousel Item 2 -->
    <div class="grid w-full xl:h-homeTitleXL h-homeTitle bg-cover bg-center xl:grid-cols-2 xl:content-end content-start py-4 xl:px-margin px-4" style="background-image: url(/img/home/banner2.png)">

    </div>
      
    <!-- Carousel Item 3 -->
    <div class="grid w-full xl:h-homeTitleXL h-homeTitle bg-cover bg-center xl:grid-cols-2 xl:content-end content-start py-4 xl:px-margin px-4" style="background-image: url(/img/home/banner3.png)">

    </div>

  </div>

  <!-- Reviews Image -->
  <div class="absolute bottom-0 left-0 xl:px-margin px-4 py-4 w-full h-full grid grid-cols-3 content-end">
    <img src="{{asset('/img/home/reviews.png')}}" alt="Google Reviews" class="bg-white/70 rounded-md py-1 px-2 w-2/5">
  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full flex justify-center items-center gap-2 p-4 xl:z-auto z-40">
  
    @for ($i = 0; $i <= 2; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>

    @endfor

  </div>
    
</div>
