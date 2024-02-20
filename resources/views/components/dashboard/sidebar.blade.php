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
    <a href="{{route('views')}}"><img src="{{url('/img/logos/logo2.png')}}" alt="@lang('Menu-Logo.Alt')" class="h-10 pl-6"></a>

    <!-- Sidebar Holder -->
    <aside class="h-screen w-screen fixed top-0 left-0 transition-transform duration-300 transform -translate-x-full flex flex-row">

        <!-- Sidebar Itself -->
        <div class="w-96 bg-white h-full z-40">

            <!-- Items -->
            @if($isLogged)

                <div class="flex justify-between pr-4">
                    <a class="@if($menu['views']['current']) text-flagYellow @endif " href="{{$menu['views']['route']}}"><h5>@lang('Views')</h5></a>
                    <button id="closeSidebar" class="text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                @foreach ($menu as $item)

                    <!-- Skip first item -->
                    @if ($loop->first)
                        @continue
                    @endif

                    <!-- Item -->
                    <a title="@lang('Menu-'.$item['name'].'.Title')" class="@if($item['current']) text-flagYellow @endif " href="{{$item['route']}}"><h5>@lang('Menu-'.$item['name'])</h5></a>

                @endforeach

                @if($isAdmin)

                    <a class="@if($menu['users']['current']) text-flagYellow @endif " href="{{route('user.list')}}"><h5>@lang('Users')</h5></a>

                @endif

                <a href="{{route('sign.out')}}" class=""><h5>@lang('Logout')</h5></a>

            @endif

        </div>

        <!-- Overlay -->
        <div id="overlay" class="h-full w-full z-30"></div>

    </aside>

</div>
