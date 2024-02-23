<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Head -->
    <head>

        <!-- Author (Me) -->
        <meta name="author" content="Leonardo Abreu de Paulo, leonardo.abreu.de.paulo@gmail.com">

        <!-- Needed Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Resources (CSS and JS) -->
        @vite(['resources/css/app.css', 'resources/js/iframes.js'])

    </head>

    <!-- Body -->
    <body class="min-h-screen">

        @yield('main')

    </body>

</html>
