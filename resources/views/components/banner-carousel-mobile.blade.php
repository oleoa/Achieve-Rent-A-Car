@php $slides = 3; @endphp

<!-- Carousel Section -->
<div class="relative z-10 w-full overflow-x-hidden">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner-mobile" class="rounded xl:hidden grid transition-transform duration-500 w-screen" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
    
    <!-- Carousel Item 1 -->
    <div class="px-4 w-full flex flex-col items-center justify-center h-homeTitle bg-cover bg-bottom" style="background-image: url('/img/home/banner1mobile.png')">

      <h2 class="text-white text-xl text-center font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">Achieve Rent A Car</h2>

      <h1 class="text-white text-2xl text-center font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">Rent a Car na Ilha da Madeira</h1>

      <p class="text-white text-center font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">A melhor relação Preço / Qualidade para alugar um carro na Ilha da Madeira</p>
      
    </div>
    
    <!-- Carousel Item 2 -->
    <div class="px-4 w-full flex flex-col items-center justify-center h-homeTitle bg-cover bg-center" style="background-image: url('/img/home/banner2mobile.png')">

      <h2 class="text-white text-xl text-center font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">Achieve Rent A Car</h2>

      <h1 class="text-white text-2xl text-center font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">Rent a Car na Ilha da Madeira</h1>

      <p class="text-white text-center font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">Seguro Premium incluído. Sem depósito, sem franquia. Sem cartão de crédito.</p>

    </div>
    
    <!-- Carousel Item 3 -->
    <div class="px-4 w-full flex flex-col items-center justify-center h-homeTitle bg-cover bg-center" style="background-image: url('/img/home/banner3mobile.png')">

      <h2 class="text-white text-xl text-center font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">Achieve Rent A Car</h2>

      <h1 class="text-white text-2xl text-center font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">Rent a Car na Ilha da Madeira</h1>

      <p class="text-white text-center font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,100)]">Receba e devolva onde preferir. Atendimento altamente recomendado. Quilometragem ilimitada.</p>

    </div>

  </div>

  <!-- Reviews Image -->
  <div class="absolute bottom-0 left-0 xl:px-margin px-4 py-4 w-full h-full grid xl:grid-cols-3 content-end">

    <img src="{{asset('/img/home/reviews.png')}}" alt="Google Reviews" class="bg-white/70 rounded-md py-1 px-2 w-2/5">

  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 xl:z-auto z-40" id="carousel-indicators-div-banner-mobile">
  
    @for ($i = 0; $i <= $slides-1; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner-mobile"></div>

    @endfor

  </div>
    
</div>
