<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>@lang($title)</title>
  </head>
    <body>
      <nav class="h-navbar px-margin w-full fixed top-0 bg-white flex justify-between items-center">
        <img src="{{url('/img/logo.png')}}" alt="" class="h-16">
        <div class="flex gap-4">
          <h1>Items</h1>
          <h1>Items</h1>
          <h1>Items</h1>
          <h1>Items</h1>
          <h1>Items</h1>
        </div>
      </nav>
      <main class="pt-navbar px-margin bg-slate-900 h-screen">
        @yield('main')
      </main>
    </body>
</html>
