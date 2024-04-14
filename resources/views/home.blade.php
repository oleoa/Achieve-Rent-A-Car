@extends('layout')
@php $title = 'title.home'; @endphp
@section('main')

  <section id="hero" class="px-default text-center tablet:text-start flex flex-col gap-0 items-start justify-center bg-center computer:py-80 laptop:py-72 tablet:py-64 pb-80 pt-28 text-white bg-cover">

    <h2 class="font-bold text-blue w-full text-lg"><span class="achieve text-white">Achieve </span>Rent a Car</h2>

    <h1 class="tablet:text-7xl font-bold w-full text-5xl pb-4">@lang('home.hero.title')</h1>

    <p class="pb-4">
      @lang('home.hero.paragraph')
    </p>

    <div class="flex gap-4 justify-center tablet:justify-start w-full">
      <button class="anyrent-scroll rounded-md px-4 py-2 bg-red text-white hover:scale-110 duration-300">@lang('home.hero.book.now')</button>
      <button class="why-us-scroll rounded-md px-4 py-2 bg-white text-red hover:scale-110 duration-300">@lang('home.hero.why.us')</button>
    </div>

  </section>
  
  <section class="py-8 bg-[#0386D4]">

    <h2 class="text-white text-center tablet:text-start text-4xl font-bold pb-8 px-default">What our clients say</h2>
    
    <div class="swiper" style="width: 90vw;">
      
      <div class="swiper-wrapper">

        @foreach ($reviews as $review)

          <div class="swiper-slide">
        
            <div class="flex flex-col justify-start items-center h-full p-4 pb-8 gap-4 rounded-lg bg-white">

              <div class="flex w-full gap-8 items-center">
                  
                <img src="{{$review['image']}}" alt="Valentina Vucicic" class="h-20 w-20">
                
                <div class="flex flex-col">

                  <h2 class="font-bold text-xl">{{$review['name']}}</h2>
                  
                  <a href="{{$review['url']}}" target="_blank" class="w-fit">
                    <img src="{{asset('/img/pages/home/reviews.webp')}}" alt="Google Reviews" height="64" width="114" class="object-cover">
                  </a>

                </div>

              </div>

              <p class="font-semibold text-start">

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
      
      <div class="swiper-pagination"></div>

    </div>

  </section>

  <section class="py-20 bg-top" id="anyrent">

    <article class="px-default anyrent-height">

      <div class="w-full min-h-fit relative anyrent-height">
        <div class="w-full h-full absolute xl:bg-red/75 bg-black/75 rounded-md animate-pulse anyrent-height" id="anyrent-skeleton"></div>
        <anyrent-iframe data-locale="{{$language}}"></anyrent-iframe>
      </div>

      <script id="jedeyeScript" src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
      
    </article>

  </section>

  <section class="bg-blue/5 flex flex-col px-default gap-4 py-16 pt-20" id="why-us">

    <h2 class="text-5xl">@lang('home.why.achieve.title')</h2>

    <p class="text-start">@lang('home.why.achieve.paragraph', ['link' => "https://www.google.com/search?sca_esv=a9443e757acfc69c&tbm=lcl&sxsrf=ACQVn0_ttAqFgT9Dzfq9tWv6-mqFV0U1xw:1711973259387&q=Achieve+Rent+a+Car+Reviews&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxK2NDEzM7UwNjQxMDMxMrU0NjMz2MDI-IpRyjE5IzO1LFUhKDWvRCFRwTmxCMgsy0wtL17EikcSAB9GV0BUAAAA&rldimm=9466583140642593660&hl=en-PT&sa=X&ved=2ahUKEwiogPav_aCFAxVsRqQEHXMyAkIQ9fQKegQIPxAF&biw=1626&bih=1035&dpr=1#lkt=LocalPoiReviews"])</p>

    <div class="flex gap-4">

      <button title="@lang('home.why.achieve.book.now.title')" class="anyrent-scroll flex gap-2 items-center text-red hover:text-red-400 font-bold underline" href="#system">@lang('home.why.achieve.book.now')</button>

      <a title="@lang('home.why.achieve.contact.us.title')" class="text-red flex items-center gap-2 font-bold underline" href="{{route('contact', ['locale' => $locale])}}">@lang('home.why.achieve.contact.us')</a>

    </div>

    <div class="grid lg:grid-cols-3 gap-8 py-4">

      @for ($i = 1; $i <= 6; $i++)
      
        <div class="shadow-2xl border-b-4 py-12 border-red p-4 flex gap-4 items-center flex-col justify-start rounded-md">
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

  </section>

@endsection
