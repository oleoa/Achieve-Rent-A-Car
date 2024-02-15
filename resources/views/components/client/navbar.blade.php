<div class="h-navbar px-margin bg-white w-full hidden xl:flex justify-between items-center">

    <!-- Logo -->
    <a title="@lang('Menu-Home.Title')" href="{{$menu['links']['home']['route']}}"><img src="{{url('/img/logos/logo2.png')}}" alt="@lang('Menu-Logo.Alt')" class="h-14"></a>

    <!-- Right Part -->
    <div class="flex items-center justify-center gap-6">

        <!-- Items -->
        @foreach ($menu['links'] as $item)
            <a title="@lang('Menu-'.$item['name'].'.Title')" class="@if($item['current']) text-blue-400 underline @endif" href="{{$item['route']}}"><h5>@lang('Menu-'.$item['name'])</h5></a>
        @endforeach

        <!-- Flags -->
        <div class="flex justify-center items-center gap-4">

            @foreach ($menu['locale'] as $item)

                <!-- Flag -->
                <a title="@lang('Menu-Locale-'.$item['name'].'.Title')" href="{{$item['route']}}">
                    <img src="{{ asset('img/flags/'.$item['name'].'.png') }}" alt="@lang('Menu-Locale-'.$item['name'].'.Alt')" class="w-6 h-4">
                </a>

            @endforeach

        </div>

    </div>

</div>
