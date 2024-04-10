@extends('layout')
@php $title = 'title.home'; @endphp
@section('main')

  <div id="system" class="xl:pt-16 xl:pb-16 bg-no-repeat bg-cover bg-bottom lg:px-0 flex flex-col xl:gap-8 gap-2">

    <article id="systemArticle" class="px-default px-0">
      <div class="w-full h-full relative">
        <div class="w-full h-full absolute xl:bg-white/75 bg-black/75 rounded-md animate-pulse" id="systemLoader"></div>
        <anyrent-iframe data-locale="{{$language}}"></anyrent-iframe>
      </div>
      <script id="jedeyeScript" src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
    </article>

    @if ($reviews)

      <span id="home-page"></span>
    
      <!-- Reviews Computer -->
      <div class="relative z-10 w-full overflow-x-hidden xl:block hidden">
      
        <!-- Carousel Slide -->
        <div id="carousel-slide-reviews" class="grid transition-transform duration-500 w-full px-4 pb-8" style="grid-template-columns: @for($i = 1; $i <= count($reviews); $i++) calc(100%/3) @endfor">
          
          @foreach ($reviews as $review)
          
            <!-- Carousel Item -->
            <div class="reviews-item w-full p-4" id="{{$review['order']}}-reviews" style="order: {{$review['order']}};">
      
              <div class="flex flex-col justify-start items-center h-full p-6 gap-4 rounded-lg shadow-2xl bg-white">
    
                <div class="flex w-full gap-8 items-center">
                  
                  <img src="{{$review['image']}}" alt="Valentina Vucicic" class="h-20 w-20">
                  
                  <div class="flex flex-col">
    
                    <h2 class="font-bold">{{$review['name']}}</h2>
                    
                    <a href="{{$review['url']}}" target="_blank" class="w-fit">
                      <img src="{{asset('/img/pages/home/reviews.webp')}}" alt="Google Reviews" height="64" width="114" class="object-cover">
                    </a>
    
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
      <div class="relative z-10 w-full overflow-x-hidden xl:hidden bg-flagRed">
      
        <!-- Carousel Slide -->
        <div id="carousel-slide-reviews-mobile" class="grid transition-transform duration-500 w-full xl:py-8 pb-8" style="grid-template-columns: @for($i = 1; $i <= count($reviews); $i++) 100% @endfor">
        
          @foreach ($reviews as $review)
              
            <!-- Carousel Item -->
            <div class="reviews-mobile-item w-full p-4" id="{{$review['order']}}-reviews-mobile" style="order: {{$review['order']}};">
      
              <div class="flex flex-col justify-start items-center h-full p-6 gap-4 rounded-md shadow-2xl bg-white">
      
                <img src="{{$review['image']}}" alt="Valentina Vucicic" height="80" width="80" class="h-20 w-20">
        
                <h2 class="font-bold">{{$review['name']}}</h2>

                <a href="{{$review['url']}}" target="_blank" class="w-fit">
                  <img src="{{asset('/img/pages/home/reviews.webp')}}" alt="Google Reviews" height="64" width="114" class="object-cover">
                </a>
                
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
        <div class="absolute bottom-0 w-full py-2 xl:hidden flex justify-between items-center gap-2 px-4 z-40" id="carousel-indicators-div-reviews-mobile">
        
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
      
    <div class="flex items-center justify-center">
      <button title="@lang('home.why.achieve.book.now.title')" class="scrollToTopBtn px-4 py-2 w-1/3 rounded-md bg-flagRed text-white border-2 border-flagRed hover:text-flagRed hover:bg-white transition-all duration-300">@lang('home.why.achieve.book.now')</button>
    </div>

  </div>

@endsection
