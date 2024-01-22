<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Dashboard Achieve Rent A Car">
    <meta name="description" content="O dashboard para a melhor Rent A Car da Madeira">
    <meta name="author" content="Leonardo Abreu de Paulo">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@lang('Dashboard Achieve Rent A Car')</title>
  </head>

    <body class="min-h-screen grid grid-rows-10">

      <!-- Loading -->
      <div role="status" id="loading" class="hidden h-screen w-screen bg-zinc-800/70 z-50 fixed top-0 left-0 items-center justify-center">
        <svg aria-hidden="true" class="w-16 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
          <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
      </div>

      <!-- Sidebar -->
      <div class="flex xl:hidden h-navbar top-0 fixed w-full justify-center items-center bg-zinc-950 z-50">

        <!-- Garfo -->
        @if($isLogged)
          <div class="left-0 top-0 fixed flex justify-center items-center h-navbar pl-4 text-white">
            <button id="openSidebar">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        @endif

        <!-- Logo -->
        <a href="{{route('views')}}"><img src="{{url('/img/logo2.png')}}" alt="Logo Achieve Rent A Car" class="h-10 pl-6"></a>

        <!-- Sidebar Itself -->
        <nav id="sidebar" class="bg-zinc-800 text-white h-screen w-44 fixed top-0 left-0 transition-transform duration-300 transform -translate-x-full p-4 text-xl flex flex-col gap-4">

          <!-- Items -->
          @if($isLogged)
            <div class="flex justify-between pr-4">
              <a class="@if($current == 'views') text-flagYellow @endif loaderActivator" href="{{route('views')}}"><h5>@lang('Views')</h5></a>
              <button id="closeSidebar" class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            <a class="@if($current == 'faq') text-flagYellow @endif loaderActivator" href="{{route('faq.list')}}"><h5>@lang('FAQ')</h5></a>
            <a class="@if($current == 'discounts') text-flagYellow @endif loaderActivator" href="{{route('discount.list')}}"><h5>@lang('Discounts')</h5></a>
            @if($isAdmin)
              <a class="@if($current == 'users') text-flagYellow @endif loaderActivator" href="{{route('user.list')}}"><h5>@lang('Users')</h5></a>
            @endif
            <a href="{{route('sign.out')}}" class="loaderActivator"><h5>@lang('Logout')</h5></a>
          @endif

        </nav>

      </div>
      
      <!-- Navbar -->
      <nav class="h-navbar xl:px-20 2xl:px-margin w-full fixed z-40 top-0 bg-neutral-950 text-white hidden xl:flex justify-between items-center select-none">

        <!-- Left Part -->
        <div class="flex justify-start items-center">
  
          <!-- Logo -->
          <a href="{{route('views')}}" class="hidden loaderActivator 2xl:flex items-center"><h1 class="text-flagBlue">Dashboard</h1><img src="{{url('/img/logo2.png')}}" alt="Logo Achieve Rent A Car" class="h-16"></a>

          <!-- Logo -->
          <a href="{{route('views')}}" class="2xl:hidden loaderActivator flex items-center pl-8"><img src="{{url('/img/logo.png')}}" alt="Logo Achieve Rent A Car" class="h-12"></a>

        </div>

        <!-- Right Part -->
        <div class="flex items-center justify-center gap-4 xl:w-auto w-full">

          @if($isLogged)
            <!-- Items -->
            <a class="@if($current == 'views') text-flagYellow @endif loaderActivator" href="{{route('views')}}"><h5>@lang('Views')</h5></a>
            <a class="@if($current == 'faq') text-flagYellow @endif loaderActivator" href="{{route('faq.list')}}"><h5>@lang('FAQ')</h5></a>
            <a class="@if($current == 'discounts') text-flagYellow @endif loaderActivator" href="{{route('discount.list')}}"><h5>@lang('Discounts')</h5></a>
            @if($isAdmin)
              <a class="@if($current == 'users') text-flagYellow @endif loaderActivator" href="{{route('user.list')}}"><h5>@lang('Users')</h5></a>
            @endif
            <a href="{{route('sign.out')}}" class="loaderActivator"><h5>@lang('Logout')</h5></a>
          @endif

        </div>

      </nav>

      <!-- Main Content -->
      <main class="pt-navbar px-4 xl:px-20 2xl:px-margin bg-zinc-900 text-white row-span-10">

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
