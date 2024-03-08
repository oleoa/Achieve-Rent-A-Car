<div class="flex xl:hidden h-navbar relative w-full justify-center items-center bg-white">

  <!-- Garfo -->
  <div class="left-0 top-0 absolute flex justify-center items-center h-navbar pl-4">
    <button id="openSidebar">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Logo -->
  <a title="@lang('Menu-Home.Title')" href="{{$menu['links']['home']['route']}}"><img src="{{url('/img/logos/logo.png')}}" alt="@lang('Menu-Logo.Alt')" class="h-16"></a>

  <!-- Sidebar Holder -->
  <aside class="h-screen w-screen fixed top-0 left-0 transition-transform duration-300 transform -translate-x-full flex flex-row">

    <!-- Sidebar Itself -->
    <div class="w-96 bg-white h-full z-40">

      <!-- Items -->
      <div class="flex justify-between pr-4">
        <a title="@lang('Menu-Home.Title')" class="@if($menu['links']['home']['current']) text-red-400 underline @endif" href="{{$menu['links']['home']['route']}}"><h4 class="p-4">@lang('Menu-Home')</h4></a>
        <button id="closeSidebar">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <!-- Items -->
      @foreach ($menu['links'] as $item)

        <!-- Skip first item -->
        @if ($loop->first)
          @continue
        @endif

        <!-- Item -->
        <a title="@lang('Menu-'.$item['name'].'.Title')" class="@if($item['current']) text-red-400 underline @endif" href="{{$item['route']}}"><h4 class="p-4">@lang('Menu-'.$item['name'])</h4></a>

      @endforeach

      <!-- Flags -->
      <div class="flex justify-start items-center gap-4 p-4">

        @foreach ($menu['locale'] as $item)

          <!-- Flag -->
          <a title="@lang('Menu-Locale-'.$item['name'].'.Title')" href="{{$item['route']}}">
            <img src="{{ asset('img/flags/'.$item['name'].'.png') }}" alt="@lang('Menu-Locale-'.$item['name'].'.Alt')" class="w-6 h-4">
          </a>

        @endforeach

      </div>

    </div>

    <!-- Overlay -->
    <div id="overlay" class="h-full w-full z-30"></div>

  </aside>

</div>
