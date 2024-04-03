@extends('layout')
@php $title = 'title.home'; @endphp
@section('main')

  <div id="system" class="xl:pt-16 pt-4 xl:pb-16 pb-4 bg-no-repeat bg-cover bg-bottom lg:px-0 flex flex-col xl:gap-8">

    <article id="systemArticle" class="px-default">
      <anyrent-iframe data-locale="{{$language}}"></anyrent-iframe>
      <script src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
    </article>

    @if ($reviews)

      <span id="home-page"></span>
    
      <!-- Reviews Computer -->
      <div class="relative z-10 w-full overflow-x-hidden xl:block hidden">
      
        <!-- Carousel Slide -->
        <div id="carousel-slide-reviews" class="grid transition-transform duration-500 w-full px-4 pb-8" style="grid-template-columns: @for($i = 1; $i <= count($reviews); $i++) calc(100%/3) @endfor">
          
          @foreach ($reviews as $review)
          
            <!-- Carousel Item -->
            <div class="reviews-item w-full p-4 cursor-pointer" id="{{$review['order']}}-reviews" style="order: {{$review['order']}};">
      
              <div class="flex flex-col justify-start items-center h-full p-6 gap-4 rounded-lg shadow-2xl bg-white">
    
                <div class="flex w-full gap-8 items-start">
                  
                  <img src="{{$review['image']}}" alt="Valentina Vucicic" class="h-20 w-20">
                  
                  <div class="flex flex-col gap-2">
    
                    <h2 class="font-bold">{{$review['name']}}</h2>
            
                    <h3 class="[&>i]:text-yellow-400 text-base"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>              
    
                  </div>
    
                </div>
    
                <p class="font-semibold text-start w-full">

                  @if ($language == 'pt')

                    {{$review['comentario']}}  

                  @elseif ($language == 'en')

                    {{$review['comment']}}

                  @endif

                </p>
      
              </div>
      
            </div>
          
          @endforeach
      
        </div>
      
        <!-- Carousel Indicator -->
        <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 md:z-auto z-40" id="carousel-indicators-div-reviews">
        
          <input type="hidden" id="carousel-selected-indicator-color-reviews" value="bg-white">
      
          @for ($i = 0; $i <= count($reviews)-1; $i++)
          
            <div class="w-4 h-4 rounded-full cursor-pointer border-2 border-white" id="carousel-{{$i}}-indicator-reviews"></div>
      
          @endfor
      
        </div>
          
      </div>
      
      <!-- Reviews Mobile -->
      <div class="relative z-10 w-full overflow-x-hidden xl:hidden">
      
        <!-- Carousel Slide -->
        <div id="carousel-slide-reviews-mobile" class="grid transition-transform duration-500 w-full xl:py-8 pb-8" style="grid-template-columns: @for($i = 1; $i <= count($reviews); $i++) 100% @endfor">
        
          @foreach ($reviews as $review)
              
            <!-- Carousel Item -->
            <div class="reviews-mobile-item w-full p-4" id="{{$review['order']}}-reviews-mobile" style="order: {{$review['order']}};">
      
              <div class="flex flex-col justify-start items-center h-full p-6 gap-4 rounded-md shadow-2xl bg-white">
      
                <img src="{{$review['image']}}" alt="Valentina Vucicic" height="80" width="80" class="h-20 w-20">
        
                <h2 class="font-bold">{{$review['name']}}</h2>
        
                <h3 class="[&>i]:text-yellow-400 text-base"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
        
                <p>
                  @if ($language == 'pt')
                    {{$review['comentario']}}  
                  @elseif ($language == 'en')
                    {{$review['comment']}}
                  @endif
                </p>
      
              </div>
      
            </div>
            
          @endforeach
      
        </div>
      
        <!-- Carousel Indicator -->
        <div class="absolute bottom-0 w-full xl:hidden flex justify-between items-center gap-2 px-4 z-40" id="carousel-indicators-div-reviews-mobile">
        
          <input type="hidden" id="carousel-selected-indicator-color-reviews-mobile" value="bg-white">

          <!-- Previous Button -->
          <button title="@lang('home.reviews.previous.title')" class="cursor-pointer w-8 h-8 bg-white text-black rounded-full flex items-center justify-center" id="prevBtn-reviews-mobile">
            <i class="fas fa-arrow-left text-lg"></i>
          </button>

          <div class="flex gap-2 items-center">

            @for ($i = 0; $i <= count($reviews)-1; $i++)
            
              <div class="w-4 h-4 rounded-full cursor-pointer border-2 border-white" id="carousel-{{$i}}-indicator-reviews-mobile"></div>
        
            @endfor

          </div>
      
          <!-- Next Button -->
          <button title="@lang('home.reviews.next.title')" class="cursor-pointer w-8 h-8 bg-white text-black rounded-full flex items-center justify-center" id="nextBtn-reviews-mobile">
            <i class="fas fa-arrow-right text-lg"></i>
          </button>
      
        </div>
          
      </div> 

    @endif

  </div>

  <article class="flex flex-col px-default gap-4 py-16">

    <h2 class="text-5xl">@lang('home.why.achieve.title')</h2>

    <p class="text-start">@lang('home.why.achieve.paragraph', ['link' => "https://www.google.com/search?sca_esv=a9443e757acfc69c&tbm=lcl&sxsrf=ACQVn0_ttAqFgT9Dzfq9tWv6-mqFV0U1xw:1711973259387&q=Achieve+Rent+a+Car+Reviews&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxK2NDEzM7UwNjQxMDMxMrU0NjMz2MDI-IpRyjE5IzO1LFUhKDWvRCFRwTmxCMgsy0wtL17EikcSAB9GV0BUAAAA&rldimm=9466583140642593660&hl=en-PT&sa=X&ved=2ahUKEwiogPav_aCFAxVsRqQEHXMyAkIQ9fQKegQIPxAF&biw=1626&bih=1035&dpr=1#lkt=LocalPoiReviews"])</p>

    <div class="flex gap-4">

      <button title="@lang('home.why.achieve.book.now.title')" class="scrollToTopBtn flex gap-2 items-center text-flagRed hover:text-red-400 font-bold underline" href="#system">@lang('home.why.achieve.book.now')</button>

      <a title="@lang('home.why.achieve.contact.us.title')" class="text-flagRed flex items-center gap-2 font-bold underline" href="{{route('contact', ['locale' => $locale])}}">@lang('home.why.achieve.contact.us')</a>

    </div>

    <div class="grid lg:grid-cols-3 gap-8 py-4">

      @for ($i = 1; $i <= 6; $i++)
      
        <div class="shadow-2xl border-b-4 py-12 border-flagRed p-4 flex gap-4 items-center flex-col justify-start rounded-md">
          @if($i == 1)
            <x-font-awesome.hand-holding-car/>
          @elseif($i == 2)
            <i class="fa-solid fa-map-marked-alt text-4xl h-12"></i>
          @elseif($i == 3)
            <x-font-awesome.no-credit-card/>
          @elseif($i == 4)
          <i class="fa-solid fa-person-circle-plus text-4xl h-12"></i>
          @elseif($i == 5)
            <i class="fa-solid fa-route text-4xl h-12"></i>
          @else
            <i class="fa-solid fa-road-circle-check text-4xl h-12"></i>
          @endif
          <h3 class="text-center">@lang('home.why.achieve.item.'.$i.'.title')</h3>
          <p class="text-center">@lang('home.why.achieve.item.'.$i.'.paragraph')</p>
        </div>

      @endfor

    </div>

  </article>

  <!-- Explore Madeira -->
  <div class="py-16 flex flex-col gap-8 px-default">
  
    <!-- Content -->
    <div class="w-full flex flex-col items-center gap-8">

      <!-- Text -->            
      <div class="flex flex-col items-center justify-center gap-4 xl:w-2/3">

        <h3 class="text-center py-0">@lang('home.explore.subtitle')</h3>
        <h2 class="text-center py-0 font-bold">@lang('home.explore.title')</h2>
        <p class="text-center">@lang('home.explore.paragraph')</p>

      </div>

      <!-- Items -->
      <div class="grid lg:grid-cols-3 gap-4 w-full">
        @php $icons = ['fa-car-rear', 'fa-lock', 'fa-headset'] @endphp
        @for ($i = 1; $i <= 3; $i++)
          <div class="md:grid md:grid-rows-3 border-b-4 border-flagRed flex flex-col gap-4 md:gap-0 items-center justify-items-center rounded-lg shadow-2xl md:p-8 p-4">
            <i class="fa-solid {{$icons[$i-1]}} text-5xl py-4"></i>
            <h2 class="text-center">@lang('home.explore.card.'.$i.'.title')</h2>
            <p>@lang('home.explore.card.'.$i.'.paragraph')</p>
          </div>
        @endfor
      </div>

    </div>

  </div>

  <!-- Pleasant Experience -->
  <div class="py-16 flex flex-col gap-8">

    <!-- Cards -->
    <div class="grid lg:grid-cols-2 w-full px-default gap-4">

      <h2 class="lg:col-span-2 py-4 text-center font-bold text-4xl">@lang('home.pleasant.experience.title')</h2>

      <div class="rounded-lg shadow-2xl border-b-4 border-flagRed">
        <img src="{{asset('/img/pages/home/2.png')}}" width="578" height="292" alt="@lang('home.pleasant.experience.card.1.image')" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home.pleasant.experience.card.1.title')</h3>
          <p class="mt-2 text-justify">
            @lang('home.pleasant.experience.card.1.paragraph')
          </p>
          @for($i = 1; $i <= 5; $i++)
            <p class="py-1 flex gap-2">
              <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#263e78" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
              @lang('home.pleasant.experience.card.1.item.'.$i)
            </p>
          @endfor
        </div>
      </div>

      <div class="rounded-lg shadow-2xl border-b-4 border-flagRed">
        <img src="{{asset('/img/pages/home/3.png')}}" width="578" height="292" alt="@lang('home.pleasant.experience.card.2.image')" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home.pleasant.experience.card.2.title')</h3>
          <p class="mt-2 text-justify">
            @lang('home.pleasant.experience.card.2.paragraph')
          </p>
        </div>
      </div>

    </div>

  </div>

@endsection
