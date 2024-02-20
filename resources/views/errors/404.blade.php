<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Leonardo Abreu de Paulo">
    @vite('resources/css/app.css')
    <title>Page not found</title>
  </head>

    <body class="h-screen flex items-center justify-center">

      <main class="flex flex-col items-center justify-center gap-6">
        <h1 class="text-9xl font-black"><span class="text-flagBlue">4</span></span><span class="text-flagYellow">0</span><span class="text-flagBlue">4</span></h1>
        <h2 class="text-4xl">Page not found</h2>
        <a title="Click to go to the home page" href="{{route('home', ['en'])}}" class="px-4 py-2 bg-flagRed rounded-lg text-white text-xl hover:text-white hover:bg-red-400">Home</a>
      </main>

    </body>

</html>
