<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <!-- Head -->
  <head>

    <!-- CookieBot -->
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="ad0b7cd2-7f52-40fc-b5c2-ce61f1f7b361" data-blockingmode="auto" type="text/javascript"></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PJSKCCJL');</script>
    <!-- End Google Tag Manager -->

    <!-- Favicon Google Ads -->
    <link rel="icon" href="{{asset('/favicon.ico')}}">

    <!-- Author (Me) -->
    <meta name="author" content="Leonardo Abreu de Paulo, leonardo.abreu.de.paulo@gmail.com">

    <!-- Needed Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Description For Search Engine Optimization -->
    <meta name="description" content="@lang('meta.description')">

    <!-- locales For Search Engine Optimization -->
    <link rel="alternate" href="{{env('APP_URL')}}/" hreflang="x-default"/>
    <link rel="alternate" href="{{env('APP_URL')}}/en" hreflang="en"/>
    <link rel="alternate" href="{{env('APP_URL')}}/en/about" hreflang="en"/>
    <link rel="alternate" href="{{env('APP_URL')}}/en/faq" hreflang="en"/>
    <link rel="alternate" href="{{env('APP_URL')}}/en/contact" hreflang="en"/>
    <link rel="alternate" href="{{env('APP_URL')}}/en/terms" hreflang="en"/>
    <link rel="alternate" href="{{env('APP_URL')}}/en/privacy" hreflang="en"/>
    <link rel="alternate" href="{{env('APP_URL')}}/pt" hreflang="pt"/>
    <link rel="alternate" href="{{env('APP_URL')}}/pt/about" hreflang="pt"/>
    <link rel="alternate" href="{{env('APP_URL')}}/pt/faq" hreflang="pt"/>
    <link rel="alternate" href="{{env('APP_URL')}}/pt/contact" hreflang="pt"/>
    <link rel="alternate" href="{{env('APP_URL')}}/pt/terms" hreflang="pt"/>
    <link rel="alternate" href="{{env('APP_URL')}}/pt/privacy" hreflang="pt"/>
    
    <!-- Canonical Pages For Search Engine Optimization -->
    <link rel="canonical" href="{{env('APP_URL')}}/en"/>

    <!-- Open Graph / Facebook / Instagram / Whatsapp -->
    <meta property="og:title" content="@lang('meta.facebook.title')"/>
    <meta property="og:description" content="@lang('meta.facebook.description')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Achieve Rent a Car"/>
    <meta property="og:url" content="{{env('APP_URL')}}/en"/>
    <meta property="og:image" content="{{env('APP_URL')}}/img/main/2.jpg"/>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="Achieve Rent A Car"/>
    <meta name="twitter:title" content="@lang('meta.twitter.title')"/>
    <meta name="twitter:description" content="@lang('meta.twitter.description')"/>
    <meta name="twitter:creator" content="@o_leo_a"/>
    <meta name="twitter:image" content="{{env('APP_URL')}}/img/main/2.jpg"/>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cf64f43fc0.js" crossorigin="anonymous" defer></script>

    <style>

      #hero {
        background-image: url('/img/pages/home/hero-phone.webp');
      }

      @media (min-width: 768px) {
        #hero {
          background-image: url('/img/pages/home/new-hero.webp');
        }
      }

      #plane {
        background-image: url('/img/pages/instructions/plane.jpeg');
      }

      #hotel {
        background-image: url('/img/pages/instructions/hotel.jpg');
      }

    </style>
  
    <!-- Resources (CSS and JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Page Title -->
    <title>@lang($title)</title>

  </head>


  <!-- Body -->
  <body class="min-h-screen grid grid-rows-1">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJSKCCJL"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

    <!-- Header Content -->
    <nav class="fixed top-0 left-0 w-full flex flex-col z-30">

      <!-- Discounts -->
      @if(isset($discount) && $discount)
        <div id="discount" class="text-xs md:text-xl w-full py-3 md:px-64 px-4 flex justify-center items-center font-semibold" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}};">
          <p class="w-full h-full text-center md:block hidden">
            @if ($locale=='en')
              @lang($discount['text'])
            @elseif ($locale=='pt')
              @lang($discount['texto'])
            @endif
          </p>
          <p class="w-full h-full text-start md:hidden block">
            @if ($locale=='en')
              @lang($discount['text_mobile'])
            @elseif ($locale=='pt')
              @lang($discount['texto_mobile'])
            @endif
          </p>
        </div>
      @endif

      <!-- Navbar -->
      <x-navbar :locale="$locale" :current="$current"/>

      <!-- Sidebar -->
      <x-sidebar :locale="$locale" :current="$current"/>

    </nav>

    <!-- Whatsapp Button -->
    <x-whatsapp-button/>

    <!-- Loader -->
    <div role="status" id="loading" class="hidden h-screen w-screen bg-zinc-200/70 z-50 fixed top-0 left-0 items-center justify-center">
      <img src="{{url('/img/loader/car.webp')}}" alt="Loader" class="animate-spin-slow absolute z-30 w-28">
      <img src="{{url('/img/loader/island.webp')}}" alt="Loader" class="absolute z-20 h-14">
    </div>

    <!-- Main Content -->
    <main @class([
      "row-span-1",
      "pt-20" => $current != "home",
    ]) id="mainContent">

      @yield('main')

    </main>

    <!-- Footer -->
    <footer class="w-full px-default bg-red min-h-footer flex md:flex-row flex-col justify-between md:items-center items-start gap-4 py-4 md:pb-4 pb-20 z-20">

      <!-- Links -->
      <div class="hidden gap-4 text-white justify-center items-center">

        <!-- Instagram -->
        <a href="https://www.instagram.com/achieverentacar/" target="_blank">
          <i class="fab fa-instagram text-4xl hover:text-white"></i>
        </a>

        <!-- Youtube -->
        <a href="https://www.youtube.com/@achieverentacar" target="_blank">
          <i class="fab fa-youtube text-4xl hover:text-white"></i>
        </a>

      </div>

      <!-- Separator -->
      <div class="bg-yellow w-full h-1 rounded hidden"></div>

      <!-- Legal -->
      <p class="text-white flex md:flex-row flex-col gap-4">
        <a class="hover:text-white hover:underline" target="_blank" title="@lang('footer.terms.title')" href="{{asset('/files/terms'.strtoupper($locale).'.pdf')}}?#toolbar=0">@lang('footer.terms')</a>
        <a class="hover:text-white hover:underline" target="_blank" title="@lang('footer.privacy.title')" href="{{route('privacy', $locale)}}">@lang('footer.privacy')</a>
      </p>

      <!-- Reserved -->
      <div class="flex md:flex-row flex-col gap-1">
        <p class="text-white">@lang('footer.@')</p>
      </div>

    </footer>

  </body>

</html>
