@extends('layouts.main')
@php $title = 'title.home'; @endphp
@section('main')

  <div id="system" class="pt-8 pb-4 bg-no-repeat bg-cover bg-bottom flex flex-col gap-4" style="background-image: url('/img/main/1.jpg')">

    <article class="xl:px-96">
      <anyrent-iframe data-locale="{{$language}}"></anyrent-iframe>
      <script src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
    </article>

    <span id="home-page"></span>
    <x-reviews/>

  </div>

  <!-- Why choose achieve -->
  <div class="xl:px-margin px-4 py-8 flex flex-col gap-8 bg-flagBlue/20">

    <h2 class="text-center">@lang('home.why.choose.arac.title')</h2>

    <p class="text-xl text-center">@lang('home.why.choose.arac.paragraph')</p>

    <div class="grid lg:grid-cols-3 gap-4 grid-rows-9 lg:grid-rows-3">

      @for ($i = 1; $i <= 9; $i++)

        <div class="px-4 py-2 bg-flagRed text-white rounded flex justify-between items-center gap-4">

          <p>
            @lang('home.why.choose.arac.item.'.$i)
          </p>

          <div class="h-8 md:w-auto w-8 fles items-center justify-end">

            @switch($i)

              @case(1)
                <i class="fas fa-handshake w-full h-full text-3xl"></i>
                @break
              @case(2)
                <x-font-awesome.hand-holding-car/>
                @break
              @case(3)
                <i class="fas fa-file-shield w-full h-full text-3xl"></i>
                @break
              @case(4)
                <x-font-awesome.no-credit-card/>
                @break
              @case(5)
                <i class="fa-solid fa-person-circle-plus w-full h-full text-3xl"></i>
                @break
              @case(6)
                <i class="fas fa-smile w-full h-full text-3xl"></i>
                @break
              @case(7)
                <i class="fas fa-check-double w-full h-full text-3xl"></i>
                @break
              @case(8)
                <i class="fas fa-map-marked-alt w-full h-full text-3xl"></i>
                @break
              @case(9)
                <i class="fas fa-paper-plane w-full h-full text-3xl"></i>
                @break
                    
            @endswitch

          </div>

        </div>

      @endfor

    </div>

  </div>

  <!-- Poem -->
  <div class="w-full xl:px-margin px-4 flex flex-col gap-4 py-8">

    <!-- Text -->
    <h2 class="text-center xl:text-start py-0 xl:text-4xl text-2xl">@lang('home.poem.title')</h2>

    <!-- Poem -->
    <div class="bg-flagBlue/20 rounded px-4 py-12 flex flex-col justify-between gap-4 w-full xl:col-span-2">

      @if($language != 'pt')
        <h3 class="text-start py-0 xl:text-2xl text-xl">“A Madeira é um jardim, no mundo não há igual;<br>Seu encanto não tem fim, é filha de Portugal.”</h3>
      @endif

      <h3 class="text-center py-0 xl:text-2xl text-xl">@lang('home.poem.poem')</h3>

      <h4 class="py-0 text-sm text-end w-full">@lang('home.poem.author')</h4>

      
      <!-- Paragraph -->
      <p class="xl:text-start text-justify">@lang('home.poem.paragraph')</p>

    </div>

  </div>

  <!-- Pleasant Experience -->
  <div class="py-8 flex flex-col gap-8 bg-flagBlue/20">

    <!-- Cards -->
    <div class="grid lg:grid-cols-2 w-full xl:px-margin px-4 gap-4">

      <h2 class="lg:col-span-2 py-4 text-center font-bold text-4xl">@lang('home.pleasant.expereince.title')</h2>

      <div class="rounded-lg shadow-lg">
        <img src="{{asset('/img/pages/home/2.png')}}" alt="" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home.pleasant.expereince.card.1.title')</h3>
          <p class="mt-2 text-justify">
            @lang('home.pleasant.expereince.card.1.paragraph')
          </p>
          @for($i = 1; $i <= 5; $i++)
            <p class="py-1 flex gap-2">
              <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#263e78" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
              @lang('home.pleasant.expereince.card.1.item.'.$i)
            </p>
          @endfor
        </div>
      </div>

      <div class="rounded-lg shadow-lg">
        <img src="{{asset('/img/pages/home/3.png')}}" alt="" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home.pleasant.expereince.card.2.title')</h3>
          <p class="mt-2 text-justify">
            @lang('home.pleasant.expereince.card.2.paragraph')
          </p>
        </div>
      </div>

    </div>

  </div>

  <!-- Explore Madeira -->
  <div class="py-8 flex flex-col gap-8 xl:px-margin px-4">
  
    <!-- Content -->
    <div class="w-full flex flex-col items-center gap-8">

      <!-- Text -->            
      <div class="flex flex-col items-center justify-center gap-4 xl:w-1/2">

        <h3 class="text-center py-0">@lang('home.explore.subtitle')</h3>
        <h2 class="text-center py-0 font-bold">@lang('home.explore.title')</h2>
        <p class="text-center">@lang('home.explore.paragraph')</p>

      </div>

      <!-- Items -->
      <div class="grid lg:grid-cols-3 gap-4 w-full">
        @php $icons = ['fa-car-rear', 'fa-lock', 'fa-headset'] @endphp
        @for ($i = 1; $i <= 3; $i++)
          <div class="md:grid md:grid-rows-3 flex flex-col gap-4 md:gap-0 items-center justify-items-center rounded-lg shadow-lg md:p-8 p-4">
            <i class="fa-solid {{$icons[$i-1]}} text-5xl py-4"></i>
            <h2 class="text-center">@lang('home.explore.card.'.$i.'.title')</h2>
            <p>@lang('home.explore.card.'.$i.'.paragraph')</p>
          </div>
        @endfor
      </div>

    </div>

  </div>

@endsection
