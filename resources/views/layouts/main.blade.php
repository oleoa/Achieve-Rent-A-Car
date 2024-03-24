<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <!-- Head -->
  <head>
    
    <!-- Favicon Google Ads -->
    <link rel="icon" href="{{asset('/favicon.ico')}}">

    <!-- Author (Me) -->
    <meta name="author" content="Leonardo Abreu de Paulo, leonardo.abreu.de.paulo@gmail.com">

    <!-- Needed Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Description For Search Engine Optimization -->
    <meta name="description" content="@lang('Meta-Description')">

    <!-- Languages For Search Engine Optimization -->
    <link rel="alternate" href="https://achieverentacar.com/" hreflang="x-default"/>
    <link rel="alternate" href="https://achieverentacar.com/en" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/about" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/faq" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/contact" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/terms" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/privacy" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/pt" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/about" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/faq" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/contact" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/terms" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/privacy" hreflang="pt"/>
    
    <!-- Canonical Pages For Search Engine Optimization -->
    <link rel="canonical" href="https://achieverentacar.com/en"/>

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@lang('Meta-Facebook-Title')"/>
    <meta property="og:description" content="@lang('Meta-Facebook-Description')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Achieve Rent a Car"/>
    <meta property="og:url" content="https://achieverentacar.com/en"/>
    <meta property="og:image" content="https://achieverentacar.com/img/main/2.jpg"/>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="Achieve Rent A Car"/>
    <meta name="twitter:title" content="@lang('Meta-Twitter-Title')"/>
    <meta name="twitter:description" content="@lang('Meta-Twitter-Description')"/>
    <meta name="twitter:creator" content="@o_leo_a"/>
    <meta name="twitter:image" content="http://achieverentacar.com/img/logos/logo.png"/>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cf64f43fc0.js" crossorigin="anonymous"></script>

    <!-- Resources (CSS and JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Page Title -->
    <title>@lang($title)</title>

  </head>

  <!-- Body -->
  <body class="min-h-screen grid grid-rows-1">

    <!-- Clixtell Tracking Code -->
    <script type='text/javascript'>
      var script=document.createElement('script');
      var prefix=document.location.protocol;
      script.async=true;script.type='text/javascript';
      var target=prefix + '//scripts.clixtell.com/track.js';
      script.src=target;var elem=document.head;
      elem.appendChild(script);
    </script>

    <!-- Header Content -->
    <nav class="fixed top-0 left-0 w-full flex flex-col z-50">

      <!-- Discounts -->
      @if($discount)
        <div class="text-xs md:text-xl w-full py-3 md:px-margin px-4 flex justify-center items-center font-semibold" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}};">
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

    </nav>

    <!-- Sidebar -->
    <aside class="w-16 h-full fixed top-0 left-0 bg-white z-50 py-4 flex flex-col items-center gap-4 [&>i]:text-xl [&>i]:text-flagRed" id="sidebar">

      <!-- Menu -->
      <i class="fa-solid fa-bars"></i>

      <!-- Home -->
      <i class="fa-solid fa-house"></i>

      <!-- Fleet -->
      <i class="fa-solid fa-car-rear"></i>

      <!-- About Us -->
      <i class="fa-solid fa-people-group"></i>

      <!-- Car Seats -->
      <i class="fa-solid fa-baby"></i>

      <!-- FAQ -->
      <i class="fa-solid fa-circle-question"></i>

      <!-- Contact -->
      <i class="fa-solid fa-envelope-open-text"></i>

    </aside>

    <!-- Loader -->
    <div role="status" id="loading" class="hidden h-screen w-screen bg-zinc-200/70 z-50 fixed top-0 left-0 items-center justify-center">
      <img src="{{url('/img/loader/loader.png')}}" alt="Loader" class="animate-spin-slow absolute z-30 w-28">
      <img src="{{url('/img/logos/logo_sem_carro.png')}}" alt="Loader" class="absolute z-20 h-14">
    </div>

    <!-- Main Content -->
    <main class="row-span-1 pl-16">

      @yield('main')

    </main>

    <!-- Footer -->
    <footer class="w-full xl:px-margin px-4 bg-flagRed min-h-footer flex flex-col justify-center items-start gap-4 py-4">

      <!-- Links -->
      <div class="hidden gap-4 text-white justify-center items-center">

        <!-- Instagram -->
        <a title="@lang('Footer-Social-Instagram.Title')" href="https://www.instagram.com/achieverentacar/" target="_blank">
          <i class="fab fa-instagram text-4xl hover:text-white"></i>
        </a>

        <!-- Youtube -->
        <a title="Click here to visit us on Youtube" href="https://www.youtube.com/@achieverentacar" target="_blank">
          <i class="fab fa-youtube text-4xl hover:text-white"></i>
        </a>

      </div>

      <!-- Separator -->
      <div class="bg-flagYellow w-full h-1 rounded"></div>

      <!-- Legal -->
      <p class="text-white flex md:flex-row flex-col gap-1">
        <a title="@lang('Footer-Legal-Terms.Title')" href="{{route('terms', $locale)}}">@lang('Footer-Legal-Terms')</a>
        <a title="@lang('Footer-Legal-Privacy.Title')" href="{{route('privacy', $locale)}}">@lang('Footer-Legal-Privacy')</a>
      </p>

      <!-- Reserved -->
      <div class="flex md:flex-row flex-col gap-1">
        <p class="text-white">@lang('Footer-@')</p>
        <p class="text-white">@lang('Footer-Reserved')</p>
      </div>

    </footer>

  </body>

</html>
