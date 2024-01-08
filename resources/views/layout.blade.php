<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>@lang($title)</title>
  </head>

    <body>

      <!-- Navbar -->
      <nav class="h-navbar px-margin w-full fixed top-0 bg-white flex justify-between items-center">

        <!-- Logo -->
        <a href="{{route('home', $locale)}}"><img src="{{url('/img/logo.png')}}" alt="" class="h-16"></a>

        <!-- Right Part -->
        <div class="flex items-center justify-center gap-4">

          <!-- Items -->
          <a href="{{route('about', $locale)}}"><h5>@lang('About')</h5></a>
          <a href="{{route('faq', $locale)}}"><h5>@lang('FAQ')</h5></a>
          <a href="{{route('contact', $locale)}}"><h5>@lang('Contact')</h5></a>

          <!-- Flags -->
          <div class="flex justify-center items-center gap-4">
            <a href="{{route($current, ['pt'])}}">
              <img src="{{ asset('img/pt.png') }}" alt="Portuguese Flag" class="w-6 h-4">
            </a>
            <a href="{{route($current, ['en'])}}">
              <img src="{{ asset('img/en.png') }}" alt="English Flag" class="w-6 h-4">
            </a>
          </div>

        </div>

      </nav>

      <!-- Main Content -->
      <main class="pt-navbar px-margin bg-slate-900 h-screen">

        @yield('main')

      </main>

      <!-- Footer -->
      <footer class="w-full bg-black h-footer flex justify-center items-center">

        <h1 class="text-9xl text-white">FOOTER</h1>

      </footer>

    </body>

</html>
