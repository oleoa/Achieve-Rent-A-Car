@extends('layouts.main')
@section('main')

  <!-- Identification for js -->
  <span id="home-page"></span>

  <!-- Videos -->
  <div class="w-full overflow-hidden">
    <video class="w-full h-homeTitleXL md:flex hidden object-cover object-center" autoplay muted loop>
      <source src="{{asset('/video/pc-'.($locale=="pt"?"pt":"en").'.mp4')}}" type="video/mp4">
    </video>
    <video class="w-full h-full md:hidden flex object-cover" autoplay="" muted="" loop="" preload="auto" playsinline="">
      <source src="{{asset('/video/mb-'.($locale=="pt"?"pt":"en").'.mp4')}}" type="video/mp4">
    </video>
  </div>

  <!-- System -->
  <div @class([
    'hidden' => $tld == 'pt',
  ]) id="system">
    <anyrent-iframe data-locale="{{$locale=='pt'?'pt':'en'}}"></anyrent-iframe>
    <script src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
  </div>

  <!-- Why choose achieve -->
  <div class="xl:px-margin px-4 py-8 flex flex-col gap-8 bg-flagBlue/20">

    <h2 class="text-center">@lang('home-list-title')</h2>

    <p class="text-xl text-center">@lang('home-list-p')</p>

    <div class="grid lg:grid-cols-3 gap-4 grid-rows-9 lg:grid-rows-3">

      @for ($i = 1; $i <= 9; $i++)

        <div class="px-4 py-2 bg-flagRed text-white rounded flex justify-between items-center gap-4">

          <p>
            @lang('home-list-li.'.$i)
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

  <!-- Reviews -->
  @php $slides = 4; @endphp
  <h2 class="text-center py-4 font-semibold">@lang('home-reviews-title')</h2>
  
  <!-- Reviews Computer -->
  <div class="relative z-10 w-full overflow-x-hidden xl:block hidden">

    <!-- Carousel Slide -->
    <div id="carousel-slide-reviews" class="grid transition-transform duration-500 w-full md:margin px-4 py-8" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) calc(100%/3) @endfor">
      
      @for ($i = 1; $i <= $slides; $i++)
      
        <!-- Carousel Item -->
        <div class="reviews-item w-full p-4" id="{{$i-1}}-reviews">

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
    <div class="absolute top-0 w-full h-full hidden justify-between md:items-center items-end md:z-auto z-50" id="carousel-buttons-div-reviews">
          
      <!-- Previous Button -->
      <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn-reviews">
        <i class="fas fa-arrow-left p-4 md:h-auto bg-flagRed h-16 w-16 text-4xl rounded-xl text-white"></i>
      </button>
      
      <!-- Next Button -->
      <button class="cursor-pointer w-32 flex items-center justify-center" id="nextBtn-reviews">
        <i class="fas fa-arrow-right p-4 md:h-auto bg-flagRed h-16 w-16 text-4xl rounded-xl text-white"></i>
      </button>

    </div>

    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 md:z-auto z-40" id="carousel-indicators-div-reviews">
    
      <input type="hidden" id="carousel-selected-indicator-color-reviews" value="bg-flagBlue">

      @for ($i = 0; $i <= $slides-1; $i++)
      
        <div class="w-4 h-4 rounded-full cursor-pointer border-2 border-flagBlue" id="carousel-{{$i}}-indicator-reviews"></div>

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

  <!-- Poem -->
  <div class="w-full xl:px-margin px-4 flex flex-col gap-4 py-8">

    <!-- Text -->
    <h2 class="text-center xl:text-start py-0 xl:text-4xl text-2xl">@lang('home-1-Title')</h2>

    <!-- Poem -->
    <div class="bg-flagBlue/20 rounded px-4 py-12 flex flex-col justify-between gap-4 w-full xl:col-span-2">

      @if($locale != 'pt')
        <h3 class="text-start py-0 xl:text-2xl text-xl">“A Madeira é um jardim, no mundo não há igual;<br>Seu encanto não tem fim, é filha de Portugal.”</h3>
      @endif

      <h3 class="text-center py-0 xl:text-2xl text-xl">@lang('home-1-Poem')</h3>

      <h4 class="py-0 text-sm text-end w-full">@lang('home-1-Author')</h4>

      
      <!-- Paragraph -->
      <p class="xl:text-start text-justify">@lang('home-1-Paragraph')</p>

    </div>

  </div>

  <!-- Pleasant Experience -->
  <div class="py-8 flex flex-col gap-8 bg-flagBlue/20">

    <!-- Cards -->
    <div class="grid lg:grid-cols-2 w-full xl:px-margin px-4 gap-4">

      <h2 class="lg:col-span-2 py-4 text-center font-bold text-4xl">@lang('home-2-Title')</h2>

      <div class="rounded-lg shadow-lg">
        <img src="{{asset('/img/home/2.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home-2-Card.1-Title')</h3>
          <p class="mt-2 text-justify">
            @lang('home-2-Card.1-Paragraph')
          </p>
          @for($i = 1; $i <= 5; $i++)
            <p class="py-1 flex gap-2">
              <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#263e78" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
              @lang('home-2-Card.1-List.'.$i)
            </p>
          @endfor
        </div>
      </div>

      <div class="rounded-lg shadow-lg">
        <img src="{{asset('/img/home/3.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home-2-Card.2-Title')</h3>
          <p class="mt-2 text-justify">
            @lang('home-2-Card.2-Paragraph')
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

        <h3 class="text-center py-0">@lang('home-3-Subtitle')</h3>
        <h2 class="text-center py-0 font-bold">@lang('home-3-Title')</h2>
        <p class="text-center">@lang('home-3-Paragraph')</p>

      </div>

      <!-- Items -->
      <div class="grid lg:grid-cols-3 gap-4 w-full">
        @for ($i = 1; $i <= 3; $i++)
          <div class="md:grid md:grid-rows-3 flex flex-col gap-4 md:gap-0 items-center justify-items-center rounded-lg shadow-lg md:p-8 p-4">
            <img src="{{asset('/img/home/3-items/'.$i.'.png')}}" alt="Item Image" class="rounded-lg h-12">
            <h2 class="text-center">@lang('home-3-Card.'.$i.'-Title')</h2>
            <p>@lang('home-3-Card.'.$i.'-Paragraph')</p>
          </div>
        @endfor
      </div>

    </div>

  </div>

@endsection
