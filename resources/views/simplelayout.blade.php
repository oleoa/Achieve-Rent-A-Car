<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <!-- Head -->
  <head>
  
    <!-- Resources (CSS and JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Page Title -->
    <title>Simple</title>

  </head>

  <!-- Body -->
  <body class="min-h-screen grid grid-rows-1">

    @yield('main')

  </body>

</html>
