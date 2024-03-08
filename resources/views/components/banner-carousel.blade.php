@php $slides = 3; @endphp

<!-- Carousel Section -->
<div class="relative z-10 w-full overflow-x-hidden">

  <!-- Carousel Slide -->
  <div id="carousel-slide-banner" class="rounded xl:grid hidden transition-transform duration-500 w-full" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
    
    <!-- Carousel Item 1 -->
    <div class="w-full flex items-center justify-start px-margin h-homeTitleXL bg-cover bg-bottom" style="background-image: url('/img/home/banner1.png')">

      <div class="bg-white/70 text-flagRed px-4 py-2 rounded-md font-semibold text-2xl">
        <h1>Rent a car - Ilha da Madeira</h1>
        <p>A melhor relação preço qualidade.</p>
        <p>Sem depósito, sem franquia.</p>
        <p>Quilometragem ilimitada.</p>
        <p>Sem cartão de crédito.</p>
      </div>
      
    </div>
    
    <!-- Carousel Item 2 -->
    <div class="w-full flex items-center justify-end px-margin h-homeTitleXL bg-cover bg-center" style="background-image: url('/img/home/banner2.png')">

      <div class="bg-white/70 text-flagRed px-4 py-2 rounded-md font-semibold text-2xl">
        <h1>Rent a car - Ilha da Madeira</h1>
        <p>Condutor adicional gratuito.</p>
        <p>Seguro Premium incluído.</p>
      </div>

    </div>
    
    <!-- Carousel Item 3 -->
    <div class="w-full flex items-center justify-start pl-margin h-homeTitleXL bg-cover bg-center" style="background-image: url('/img/home/banner3.png')">

      <div class="bg-white/70 text-flagRed px-4 py-2 rounded-md font-semibold text-2xl">
        <h1>Rent a car - Ilha da Madeira</h1>
        <p>Receba e devolva onde preferir.</p>
        <p>Contratação rápida e fácil.</p>
        <p>Atendimento 5 estrelas.</p>
      </div>

    </div>

  </div>

  <!-- Reviews Image -->
  <div class="absolute bottom-0 left-0 xl:px-margin px-4 py-4 w-full h-full grid xl:grid-cols-3 content-end">

    <img src="{{asset('/img/home/reviews.png')}}" alt="Google Reviews" class="bg-white/70 rounded-md py-1 px-2 w-2/5">

  </div>

  <!-- Carousel Indicator -->
  <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 xl:z-auto z-40" id="carousel-indicators-div-banner">
  
    @for ($i = 0; $i <= $slides-1; $i++)
    
      <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>

    @endfor

  </div>
    
</div>