<span class="w-full" id="maxPageWidth"></span>
<!-- Banner Carousel -->
<div class="relative z-10 w-full overflow-x-hidden xl:h-homeTitleXL h-homeTitle select-none xl:flex hidden bg-black">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner" class="grid transition-transform duration-500 h-homeTitleXL w-full" style="grid-template-columns: @for($i = 1; $i <= 3; $i++) 100% @endfor">
      
    <!-- Carousel Item 1 -->
    <div class="w-full grid grid-cols-2 h-homeTitleXL py-4 px-margin bg-cover bg-bottom" style="background-image: url(/img/home/banner1.png)">
      <div class="col-span-2 flex flex-col items-center justify-center gap-4 z-50">
        <h3 class="text-white px-2 py-1 rounded-md font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">Achieve Rent A Car</h3>
        <h1 class="text-white px-2 py-1 rounded-md font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">{{strtoupper('Rent a Car na Ilha da Madeira')}}</h1>
        <p class="text-white px-2 py-1 rounded-md font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">{{strtoupper('A melhor relação Preço / Qualidade para alugar um carro na Ilha da Madeira')}}</p>
        <button class="px-4 py-2 rounded-md bg-flagRed hover:bg-red-400 text-white" id="bookNow">Book Now</button>
      </div>
    </div>
      
    <!-- Carousel Item 2 -->
    <div class="w-full flex justify-center items-center h-homeTitleXL py-4 px-margin bg-cover bg-center" style="background-image: url(/img/home/banner2.png)">
      <h1 class="text-white px-2 py-1 rounded-md font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">{{strtoupper('Rent a Car na Ilha da Madeira')}}</h1>
    </div>
      
    <!-- Carousel Item 3 -->
    <div class="w-full flex justify-center items-center h-homeTitleXL py-4 px-margin bg-cover bg-center" style="background-image: url(/img/home/banner3.png)">
      <h1 class="text-white px-2 py-1 rounded-md font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">{{strtoupper('Rent a Car na Ilha da Madeira')}}</h1>
    </div>

  </div>

  <!-- Reviews Image -->
  <div class="absolute bottom-0 left-0 xl:px-margin px-4 py-4 h-full w-full grid grid-cols-3 content-end z-30">
    <img src="{{asset('/img/home/reviews.png')}}" alt="Google Reviews" class="bg-white/70 rounded-md py-1 px-2 w-2/5">
  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full flex justify-center items-center gap-2 p-4 z-40">
  
    @for ($i = 0; $i <= 2; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>

    @endfor

  </div>
    
</div>
