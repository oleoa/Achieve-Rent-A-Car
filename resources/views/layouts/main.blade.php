<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <!-- Head -->
  <head>

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
    <meta property="og:image" content="https://achieverentacar.com/img/logos/logo.png"/>

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
        <div class="text-xs xl:text-xl w-full py-3 xl:px-margin px-4 flex justify-center items-center font-semibold" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}};">
          <p class="w-full h-full text-center xl:block hidden">
            @if ($locale=='en')
              @lang($discount['text'])
            @elseif ($locale=='pt')
              @lang($discount['texto'])
            @endif
          </p>
          <p class="w-full h-full text-start xl:hidden block">
            @if ($locale=='en')
              @lang($discount['text_mobile'])
            @elseif ($locale=='pt')
              @lang($discount['texto_mobile'])
            @endif
          </p>
        </div>
      @endif


      <!-- Navbar -->
      <div class="h-navbar px-margin bg-white w-full hidden xl:flex justify-between items-center font-bold">

        <!-- Logo -->
        <a title="@lang('Menu-Home.Title')" href="{{$menu['links']['home']['route']}}"><img src="{{url('/img/logos/logo2.png')}}" alt="@lang('Menu-Logo.Alt')" class="h-14"></a>
      
        <!-- Right Part -->
        <div class="flex items-center justify-center gap-6">
      
          <!-- Items -->
          @foreach ($menu['links'] as $item)
            <a title="@lang('Menu-'.$item['name'].'.Title')" class="@if($item['current']) text-red-400 underline @endif" href="{{$item['route']}}"><h5>@lang('Menu-'.$item['name'])</h5></a>
          @endforeach
      
          <!-- Flags -->
          <div class="flex justify-center items-center gap-4">
      
            @foreach ($menu['locale'] as $item)
      
              <!-- Flag -->
              <a title="@lang('Menu-Locale-'.$item['name'].'.Title')" href="{{$item['route']}}">
                <img src="{{ asset('img/flags/'.$item['name'].'.png') }}" alt="@lang('Menu-Locale-'.$item['name'].'.Alt')" class="w-6 h-4">
              </a>
      
            @endforeach
      
          </div>
      
        </div>
      
      </div>
      
      <!-- Sidebar -->
      <div class="flex xl:hidden h-navbar relative w-full justify-center items-center bg-white">

        <!-- Garfo -->
        <div class="left-0 top-0 absolute flex justify-center items-center h-navbar pl-4">
          <button id="openSidebar">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      
        <!-- Logo -->
        <a title="@lang('Menu-Home.Title')" href="{{$menu['links']['home']['route']}}"><img src="{{url('/img/logos/logo.png')}}" alt="@lang('Menu-Logo.Alt')" class="h-16"></a>
      
        <!-- Sidebar Holder -->
        <aside class="h-screen w-screen fixed top-0 left-0 transition-transform duration-300 transform -translate-x-full flex flex-row">
      
          <!-- Sidebar Itself -->
          <div class="w-96 bg-white h-full z-40">
      
            <!-- Items -->
            <div class="flex justify-between pr-4">
              <a title="@lang('Menu-Home.Title')" class="@if($menu['links']['home']['current']) text-red-400 underline @endif" href="{{$menu['links']['home']['route']}}"><h4 class="p-4">@lang('Menu-Home')</h4></a>
              <button id="closeSidebar">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
      
            <!-- Items -->
            @foreach ($menu['links'] as $item)
      
              <!-- Skip first item -->
              @if ($loop->first)
                @continue
              @endif
      
              <!-- Item -->
              <a title="@lang('Menu-'.$item['name'].'.Title')" class="@if($item['current']) text-red-400 underline @endif" href="{{$item['route']}}"><h4 class="p-4">@lang('Menu-'.$item['name'])</h4></a>
      
            @endforeach
      
            <!-- Flags -->
            <div class="flex justify-start items-center gap-4 p-4">
      
              @foreach ($menu['locale'] as $item)
      
                <!-- Flag -->
                <a title="@lang('Menu-Locale-'.$item['name'].'.Title')" href="{{$item['route']}}">
                  <img src="{{ asset('img/flags/'.$item['name'].'.png') }}" alt="@lang('Menu-Locale-'.$item['name'].'.Alt')" class="w-6 h-4">
                </a>
      
              @endforeach
      
            </div>
      
          </div>
      
          <!-- Overlay -->
          <div id="overlay" class="h-full w-full z-30"></div>
      
        </aside>
      
      </div>

    </nav>

    <!-- Loader -->
    <div role="status" id="loading" class="hidden h-screen w-screen bg-zinc-200/70 z-50 fixed top-0 left-0 items-center justify-center">
      <img src="{{url('/img/loader/loader.png')}}" alt="Loader" class="animate-spin-slow absolute z-30 w-28">
      <img src="{{url('/img/logos/logo_sem_carro.png')}}" alt="Loader" class="absolute z-20 h-14">
    </div>  

    <!-- Main Content -->
    <main class="pt-navbar row-span-1">

      @yield('main')

    </main>

    <!-- Whatsapp button -->
    <div class="fixed bottom-1 right-1 xl:bottom-16 xl:right-5 z-40 flex flex-col items-end">

      <div id="whatsappBalloon" class="pr-10 xl:hidden hidden">
    
        <div class="relative">
    
          <div class="absolute py-4 px-6 flex justify-center items-center">
    
            <p class="text-start text-sm">@lang('Whatsapp-Paragraph')</p>
    
          </div>
    
          <img src="{{asset('/img/whatsapp/balloon.png')}}" alt="Balloon" class="h-28">
    
        </div>
    
      </div>
    
      <a title="@lang('Whatsapp-Button.Alt')" href="https://wa.me/351968178109" target="_blank" class="bg-[#25D366] h-16 w-16 rounded-3xl flex items-center justify-center">
    
        <i class="fa-brands fa-whatsapp text-white text-4xl"></i>
    
      </a>
    
    </div>    

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
      <p class="text-white flex xl:flex-row flex-col gap-1">
        <a title="@lang('Footer-Legal-Terms.Title')" href="{{route('terms', $locale)}}">@lang('Footer-Legal-Terms')</a>
        <a title="@lang('Footer-Legal-Privacy.Title')" href="{{route('privacy', $locale)}}">@lang('Footer-Legal-Privacy')</a>
      </p>

      <!-- Reserved -->
      <div class="flex xl:flex-row flex-col gap-1">
        <p class="text-white">@lang('Footer-@')</p>
        <p class="text-white">@lang('Footer-Reserved')</p>
      </div>

    </footer>

  </body>

</html>
