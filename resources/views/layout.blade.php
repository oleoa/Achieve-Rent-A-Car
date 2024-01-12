<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Achieve Rent A Car Madeira">
    <meta name="author" content="Leonardo Abreu de Paulo">
    <meta name="description" content="Explore Madeira Island with ease! Rent a car with us for an unforgettable journey. Discover scenic routes, picturesque landscapes, and hidden gems. Affordable and reliable car rental services tailored to enhance your Madeira experience. Book now for a seamless travel adventure!">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@lang($title)</title>
  </head>

    <body class="min-h-screen flex flex-col justify-between">
      
      <!-- Header Content -->
      <nav class="fixed top-0 left-0 w-full flex flex-col" id="headerContent">

        <!-- Discounts -->
        @if($discount)
          <div class="text-sm xl:text-xl w-full min-h-navbar py-4 xl:px-margin px-4" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}};">
            <p>{{$locale=='en'?$discount['text']:$discount['texto'];}}</p>
          </div>
        @endif

        <!-- Navbar -->
        <nav class="h-navbar px-margin bg-white w-full hidden xl:flex justify-between items-center">

          <!-- Logo -->
          <a href="{{route('home', $locale)}}"><img src="{{url('/img/logo2.png')}}" alt="Logo Achieve Rent A Car" class="h-14"></a>

          <!-- Right Part -->
          <div class="flex items-center justify-center gap-6">

            <!-- Items -->
            <a class="loaderActivator @if($current == 'home') text-blue-400 underline @endif" href="{{route('home', $locale)}}"><h5>@lang('Home')</h5></a>
            <a class="loaderActivator @if($current == 'about') text-blue-400 underline @endif" href="{{route('about', $locale)}}"><h5>@lang('About')</h5></a>
            <a class="loaderActivator @if($current == 'faq') text-blue-400 underline @endif" href="{{route('faq', $locale)}}"><h5>@lang('FAQ')</h5></a>
            <a class="loaderActivator @if($current == 'contact') text-blue-400 underline @endif" href="{{route('contact', $locale)}}"><h5>@lang('Contact')</h5></a>

            <!-- Flags -->
            <div class="flex justify-center items-center gap-4">
              <a href="{{route($current, ['en'])}}" class="loaderActivator">
                <img src="{{ asset('img/en.png') }}" alt="English Flag" class="w-6 h-4">
              </a>
              <a href="{{route($current, ['pt'])}}" class="loaderActivator">
                <img src="{{ asset('img/pt.png') }}" alt="Portuguese Flag" class="w-6 h-4">
              </a>
            </div>

          </div>

        </nav>

        <!-- Sidebar -->
        <div class="flex xl:hidden h-navbar relative w-full justify-center items-center bg-white">

          <!-- Garfo -->
          <div class="left-0 top-0 absolute flex justify-center items-center h-navbar pl-4">
            <button id="openSidebar">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>

          <!-- Logo -->
          <a href="{{route('home', $locale)}}"><img src="{{url('/img/logo2.png')}}" alt="Logo Achieve Rent A Car" class="h-10 pl-6"></a>

          <!-- Sidebar Itself -->
          <nav id="sidebar" class="bg-zinc-800 text-white h-screen w-44 fixed top-0 left-0 transition-transform duration-300 transform -translate-x-full">

            <!-- Items -->
            <div class="flex justify-between pr-4">
              <a class="@if($current == 'home') text-blue-400 underline @endif" href="{{route('home', $locale)}}"><h4 class="p-4">@lang('Home')</h4></a>
              <button id="closeSidebar" class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            <a class="@if($current == 'about') text-blue-400 underline @endif" href="{{route('about', $locale)}}"><h4 class="p-4">@lang('About')</h4></a>
            <a class="@if($current == 'faq') text-blue-400 underline @endif" href="{{route('faq', $locale)}}"><h4 class="p-4">@lang('FAQ')</h4></a>
            <a class="@if($current == 'contact') text-blue-400 underline @endif" href="{{route('contact', $locale)}}"><h4 class="p-4">@lang('Contact')</h4></a>

            <!-- Flags -->
            <div class="flex justify-start items-center gap-4 p-4">
              <a href="{{route($current, ['en'])}}">
                <img src="{{ asset('img/en.png') }}" alt="English Flag" class="w-6 h-4">
              </a>
              <a href="{{route($current, ['pt'])}}">
                <img src="{{ asset('img/pt.png') }}" alt="Portuguese Flag" class="w-6 h-4">
              </a>
            </div>

          </nav>

        </div>

      </nav>

      <!-- Loading -->
      <div role="status" id="loading" class="hidden h-screen w-screen bg-zinc-200/70 z-50 fixed top-0 left-0 items-center justify-center">
        <svg aria-hidden="true" class="w-16 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
          <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
      </div>

      <!-- Main Content -->
      <div class="pt-navbar pb-4" id="mainContent">

        @yield('main')

      </div>

      <!-- Footer -->
      <footer class="w-full xl:px-margin bg-black h-footer flex justify-start items-center">

        <!-- Links -->
        <div class="p-4 flex gap-4 text-white justify-center items-center">

          <!-- Title -->
          <h2>Links</h2>

          <!-- Instagram -->
          <a href="https://www.instagram.com/achieverentacar/" target="_blank">
            <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
          </a>

          <!-- Youtube -->
          <a href="https://www.instagram.com/achieverentacar/" target="_blank">
            <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
          </a>

          <!-- Facebook -->
          <a href="https://www.instagram.com/achieverentacar/" target="_blank">
            <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
          </a>

        </div>

      </footer>

    </body>

</html>
