@extends('layout')
@php $title = 'title.home'; @endphp
@section('main')

  <section id="hero" class="px-default text-center tablet:text-start flex flex-col gap-0 items-start justify-center bg-center pb-64 pt-32 text-white bg-cover">

    <h2 class="font-bold text-blue w-full text-lg"><span class="achieve text-white">Achieve </span>Rent a Car</h2>

    <h1 class="tablet:text-7xl font-bold w-full text-5xl pb-4">@lang('home.hero.title')</h1>

    <p class="pb-4 hidden">
      @lang('home.hero.paragraph')
    </p>
    <ul class="pb-4 tablet:block list-none text-center w-full flex flex-col items-start">
      @for ($i = 1; $i <= 7; $i++)
        <li class="flex items-center gap-2 font-bold w-fit text-start">
          <i class="fa-solid fa-check text-2xl"></i>
          @lang('home.hero.paragraph.phone.'.$i)
        </li>
      @endfor
    </ul>

    <div class="flex gap-4 justify-center tablet:justify-start w-full">
      <button class="anyrent-scroll rounded-md px-4 py-2 bg-red text-white hover:scale-110 duration-300">@lang('home.hero.book.now')</button>
      <button class="why-us-scroll rounded-md px-4 py-2 bg-white text-red hover:scale-110 duration-300">@lang('home.hero.why.us')</button>
    </div>
  </section>

  <section class="laptop:py-16 py-8 bg-red/5 select-none">

    <div class="px-default w-full flex justify-center items-center">
      <a class="w-fit flex" target="_blank" href="https://www.google.com/search?sca_esv=3cf5305f7235dc23&tbm=lcl&sxsrf=ADLYWIIjpL3gnJgjuGz15oNC7DzYxm7K5g:1715971983926&q=Achieve+Rent+a+Car+Reviews&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxK2NDEzM7UwNjQxMDMxMrU0NjMz2MDI-IpRyjE5IzO1LFUhKDWvRCFRwTmxCMgsy0wtL17EikcSAB9GV0BUAAAA&rldimm=9466583140642593660&hl=en-PT&sa=X&ved=2ahUKEwj49a7krZWGAxUzbKQEHX2PCgwQ9fQKegQILRAF#lkt=LocalPoiReviews">
        <h2 class="w-fit text-center text-red laptop:text-5xl text-2xl font-bold laptop:pb-20 pb-4 underline">@lang('home.reviews.title')</h2>
      </a>
    </div>

    <div class="swiper px-4" style="width: 95vw" id="review">

      <div class="swiper-wrapper pt-4">

        @foreach ($reviews as $review)

          <div class="swiper-slide">

            <div class="flex flex-col justify-start items-center h-full py-4 px-8 pb-8 gap-4 rounded-lg bg-white border-b-4 border-red">

              <div class="flex w-full gap-8 items-center">

                <img src="{{$review['image']}}" alt="{{$review['name']}}" class="h-20 w-20">

                <div class="flex flex-col">

                  <h2 class="font-bold text-xl">{{$review['name']}}</h2>

                  <a href="{{$review['url']}}" target="_blank" class="w-fit">
                    <img src="{{asset('/img/pages/home/reviews.webp')}}" alt="Google Reviews" height="64" width="114" class="rounded-md border-red">
                  </a>

                </div>

              </div>

              <p class="font-semibold text-start">

                @if ($locale == 'pt')

                  @lang($review['comentario'])

                @elseif ($locale == 'en')

                  @lang($review['comment'])

                @endif

              </p>

            </div>

          </div>

        @endforeach

      </div>

      <div class="swiper-pagination"></div>

    </div>
  </section>

  <section class="laptop:py-16 py-8 bg-red/10 relative" id="anyrent">

    <span id="anyrent-scroller" class="absolute block"></span>

    <h2 class="text-center w-full text-red laptop:text-5xl text-3xl font-bold laptop:pb-16 pb-4 px-default">@lang('home.anyrent.title')</h2>

    <article class="px-default anyrent-height relative">

      <span id="anyrent-system-scroller" class="absolute"></span>

      <anyrent-iframe data-locale="{{$locale}}"></anyrent-iframe>

      <script id="jedeyeScript" src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>

    </article>

  </section>

  <section class="flex flex-col px-default laptop:gap-8 gap-4 laptop:py-16 py-8" id="why-us">

    <h2 class="laptop:text-5xl text-4xl">@lang('home.why.achieve.title')</h2>

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
