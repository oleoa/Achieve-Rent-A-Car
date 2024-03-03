<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="Dashboard Achieve Rent A Car">
        <meta name="description" content="O dashboard para a melhor Rent A Car da Madeira">
        <meta name="author" content="Leonardo Abreu de Paulo">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/cf64f43fc0.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/dashboard.js'])
        <title>@lang('Title')</title>
    </head>

    <body class="min-h-screen grid grid-rows-1 bg-neutral-900 text-white">

        <!-- Loader -->
        <x-loader :isLight="false"/>

        <!-- Sidebar -->
        <x-dashboard.sidebar :current="$current" :is="$is" :logged="$logged"/>

        <!-- Main Content -->
        <main class="xl:pl-64 pl-20 row-span-1">

            @yield('main')

        </main>

        <!-- Footer -->
        <footer class="xl:pl-64 pl-20 w-full bg-neutral-950 min-h-footer flex justify-start items-center">

            <!-- Links -->
            <div class="flex gap-4 text-white justify-center items-center px-4">

                <!-- Title -->
                <h2 class="py-4 xl:text-3xl text-xl">Made by <br><a href="https://github.com/leonardo-abreu-programmer" target="__blank">Leonardo Abreu de Paulo</a></h2>

            </div>

        </footer>

    </body>

</html>
