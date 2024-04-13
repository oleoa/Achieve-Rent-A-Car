@extends('layout')
@php $title = 'title.home'; @endphp
@section('main')

  <section id="hero" class="px-default text-center tablet:text-start flex flex-col gap-4 items-start justify-center bg-center tablet:py-64 pb-80 pt-28 text-white bg-cover">

    <h2 class="font-bold text-blue w-full"><span class="achieve text-white">Achieve </span>Rent a Car</h2>

    <h1 class="tablet:text-7xl font-bold w-full text-5xl">Rent a Car<br>Madeira Island</h1>

    <p>
      Um serviço especializado de aluguer de carros na Ilha da Madeira.<span class="tablet:inline hidden"><br></span>Com uma frota de veículos novos e uma equipa de profissionais pronta para o ajudar.
    </p>

    <div class="flex gap-4 justify-center tablet:justify-start w-full">
      <button class="anyrent-scroll rounded-md px-4 py-2 bg-red text-white hover:scale-110 duration-300">Book Now</button>
      <button class="rounded-md px-4 py-2 bg-white text-red hover:scale-110 duration-300">Know More</button>
    </div>

  </section>
  
  <section class="py-20 bg-blue">
    <h2 class="text-white px-default text-6xl pb-8">Our Reviews on Google</h2>
    <x-reviews :reviews="$reviews" :language="$language"/>
  </section>

  <section class="py-40 bg-cover bg-top" id="anyrent" style="background-image: url('/img/main/1.jpg');">

    <article class="px-default anyrent-height">

      <div class="w-full min-h-fit relative anyrent-height">
        <div class="w-full h-full absolute xl:bg-red/75 bg-black/75 rounded-md animate-pulse anyrent-height" id="anyrent-skeleton"></div>
        <anyrent-iframe data-locale="{{$language}}"></anyrent-iframe>
      </div>

      <script id="jedeyeScript" src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
      
    </article>

  </section>

  <section class="flex flex-col px-default gap-4 py-16">

    <h2 class="text-5xl">@lang('home.why.achieve.title')</h2>

    <p class="text-start">@lang('home.why.achieve.paragraph', ['link' => "https://www.google.com/search?sca_esv=a9443e757acfc69c&tbm=lcl&sxsrf=ACQVn0_ttAqFgT9Dzfq9tWv6-mqFV0U1xw:1711973259387&q=Achieve+Rent+a+Car+Reviews&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxK2NDEzM7UwNjQxMDMxMrU0NjMz2MDI-IpRyjE5IzO1LFUhKDWvRCFRwTmxCMgsy0wtL17EikcSAB9GV0BUAAAA&rldimm=9466583140642593660&hl=en-PT&sa=X&ved=2ahUKEwiogPav_aCFAxVsRqQEHXMyAkIQ9fQKegQIPxAF&biw=1626&bih=1035&dpr=1#lkt=LocalPoiReviews"])</p>

    <div class="flex gap-4">

      <button title="@lang('home.why.achieve.book.now.title')" class="scrollToTopBtn flex gap-2 items-center text-red hover:text-red-400 font-bold underline" href="#system">@lang('home.why.achieve.book.now')</button>

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
