<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Dashboard Achieve Rent A Car">
    <meta name="description" content="O dashboard para a melhor Rent A Car da Madeira">
    <meta name="author" content="Leonardo Abreu de Paulo">
    @vite(['resources/css/app.css', 'resources/js/dashboard.js'])
    <title>@lang('Dashboard Achieve Rent A Car')</title>
  </head>

    <body class="min-h-screen grid grid-rows-1">

        <!-- Loader -->
        <x-loader/>

        <!-- Sidebar -->
        <x-dashboard.sidebar :menu="$menu" :isLogged="$isLogged" :isAdmin="$isAdmin"/>

        <!-- Navbar -->
        <nav class="h-navbar xl:px-20 2xl:px-margin w-full fixed z-40 top-0 bg-neutral-950 text-white hidden xl:flex justify-between items-center select-none">

            <!-- Left Part -->
            <div class="flex justify-start items-center">
    
            <!-- Logo -->
            <a href="{{route('views')}}" class="hidden  2xl:flex items-center"><h1 class="text-flagBlue">Dashboard</h1><img src="{{url('/img/logos/logo2.png')}}" alt="@lang('Menu-Logo.Alt')" class="h-16"></a>

            <!-- Logo -->
            <a href="{{route('views')}}" class="2xl:hidden  flex items-center pl-8"><img src="{{url('/img/logos/logo.png')}}" alt="@lang('Menu-Logo.Alt')" class="h-12"></a>

            </div>

            <!-- Right Part -->
            <div class="flex items-center justify-center gap-4 xl:w-auto w-full">

            @if($isLogged)
                <!-- Items -->
                <a class="@if($current == 'views') text-flagYellow @endif " href="{{route('views')}}"><h5>@lang('Views')</h5></a>
                <a class="@if($current == 'faq') text-flagYellow @endif " href="{{route('faq.list')}}"><h5>@lang('FAQ')</h5></a>
                <a class="@if($current == 'discounts') text-flagYellow @endif " href="{{route('discount.list')}}"><h5>@lang('Discounts')</h5></a>
                @if($isAdmin)
                <a class="@if($current == 'users') text-flagYellow @endif " href="{{route('user.list')}}"><h5>@lang('Users')</h5></a>
                @endif
                <a href="{{route('sign.out')}}" class=""><h5>@lang('Logout')</h5></a>
            @endif

            </div>

        </nav>

        <!-- Main Content -->
        <main class="pt-navbar px-4 xl:px-20 2xl:px-margin bg-zinc-900 text-white row-span-1">

            @yield('main')

        </main>

        <!-- Footer -->
        <footer class="w-full xl:px-20 px-4 2xl:px-margin bg-black min-h-footer flex justify-start items-center">

            <!-- Links -->
            <div class="flex gap-4 text-white justify-center items-center">

            <!-- Title -->
            <h2 class="py-4">Made by <br><a href="https://github.com/leonardo-abreu-programmer" target="__blank">Leonardo Abreu de Paulo</a></h2>

            </div>

        </footer>

    </body>

</html>
