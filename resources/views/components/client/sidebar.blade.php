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
    <a title="@lang('Menu-Home.Title')" href="{{route('home', $locale)}}"><img src="{{url('/img/logos/logo2.png')}}" alt="Logo Achieve Rent A Car" class="h-10 pl-6 "></a>

    <!-- Sidebar Itself -->
    <aside class="bg-white h-screen w-44 fixed top-0 left-0 transition-transform duration-300 transform -translate-x-full">

        <!-- Items -->
        <div class="flex justify-between pr-4">
        <a title="@lang('Menu-Home.Title')" class=" @if($current == 'home') text-blue-400 underline @endif" href="{{route('home', $locale)}}"><h4 class="p-4">@lang('Menu-Home')</h4></a>
        <button id="closeSidebar" class="">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        </div>
        <a title="@lang('Menu-About.Title')" class=" @if($current == 'about') text-blue-400 underline @endif" href="{{route('about', $locale)}}"><h4 class="p-4">@lang('Menu-About')</h4></a>
        <a title="@lang('Menu-Seats.Title')" class=" @if($current == 'seats') text-blue-400 underline @endif" href="{{route('seats', $locale)}}"><h4 class="p-4">@lang('Menu-Seats')</h4></a>
        <a title="@lang('Menu-FAQ.Title')" class=" @if($current == 'faq') text-blue-400 underline @endif" href="{{route('faq', $locale)}}"><h4 class="p-4">@lang('Menu-FAQ')</h4></a>
        <a title="@lang('Menu-Contact.Title')" class=" @if($current == 'contact') text-blue-400 underline @endif" href="{{route('contact', $locale)}}"><h4 class="p-4">@lang('Menu-Contact')</h4></a>

        <!-- Flags -->
        <div class="flex justify-start items-center gap-4 p-4">
        <a title="Click to change the language to english" href="{{route($current, ['en'])}}" class="">
            <img src="{{ asset('img/flags/en.png') }}" alt="English Flag" class="w-6 h-4">
        </a>
        <a title="Click to change the language to portuguese" href="{{route($current, ['pt'])}}" class="">
            <img src="{{ asset('img/flags/pt.png') }}" alt="Portuguese Flag" class="w-6 h-4">
        </a>
        </div>

    </aside>

</div>
