<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="Dashboard Achieve Rent A Car">
        <meta name="description" content="O dashboard para a melhor Rent A Car da Madeira">
        <meta name="author" content="Leonardo Abreu de Paulo">
        @vite(['resources/css/app.css', 'resources/js/dashboard.js'])
        <title>@lang('Title')</title>
    </head>

    <body class="min-h-screen grid grid-rows-1 bg-neutral-900 text-white">

        <!-- Loader -->
        <x-loader :isLight="false"/>

        <!-- Sidebar -->
        <x-dashboard.sidebar :current="$current" :is="$is"/>

        <!-- Main Content -->
        <main class="xl:pl-64 row-span-1">

            @yield('main')

        </main>

        <!-- Footer -->
        <footer class="xl:pl-64 w-full bg-neutral-950 min-h-footer flex justify-start items-center">

            <!-- Links -->
            <div class="flex gap-4 text-white justify-center items-center px-4">

                <!-- Title -->
                <h2 class="py-4">Made by <br><a href="https://github.com/leonardo-abreu-programmer" target="__blank">Leonardo Abreu de Paulo</a></h2>

            </div>

        </footer>

    </body>

</html>
