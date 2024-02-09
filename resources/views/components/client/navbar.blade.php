<div class="h-navbar px-margin bg-white w-full hidden xl:flex justify-between items-center">

    <!-- Logo -->
    <a title="@lang('Menu-Home.Title')" href="{{route('home', $locale)}}"><img src="{{url('/img/logos/logo2.png')}}" alt="Logo Achieve Rent A Car" class="h-14"></a>

    <!-- Right Part -->
    <div class="flex items-center justify-center gap-6">

        <!-- Items -->
        <a title="@lang('Menu-Home.Title')" class="@if($current == 'home') text-blue-400 underline @endif" href="{{route('home', $locale)}}"><h5>@lang('Menu-Home')</h5></a>
        <a title="@lang('Menu-About.Title')" class=" @if($current == 'about') text-blue-400 underline @endif" href="{{route('about', $locale)}}"><h5>@lang('Menu-About')</h5></a>
        <a title="@lang('Menu-Seats.Title')" class=" @if($current == 'seats') text-blue-400 underline @endif" href="{{route('seats', $locale)}}"><h5>@lang('Menu-Seats')</h5></a>
        <a title="@lang('Menu-FAQ.Title')" class=" @if($current == 'faq') text-blue-400 underline @endif" href="{{route('faq', $locale)}}"><h5>@lang('Menu-FAQ')</h5></a>
        <a title="@lang('Menu-Contact.Title')" class=" @if($current == 'contact') text-blue-400 underline @endif" href="{{route('contact', $locale)}}"><h5>@lang('Menu-Contact')</h5></a>

        <!-- Flags -->
        <div class="flex justify-center items-center gap-4">
            <a title="@lang('Menu-Locale-En.Title')" href="{{route($current, ['en'])}}">
                <img src="{{ asset('img/flags/en.png') }}" alt="English Flag" class="w-6 h-4">
            </a>
            <a title="@lang('Menu-Locale-Pt.Title')" href="{{route($current, ['pt'])}}">
                <img src="{{ asset('img/flags/pt.png') }}" alt="Portuguese Flag" class="w-6 h-4">
            </a>
        </div>

    </div>

</div>
