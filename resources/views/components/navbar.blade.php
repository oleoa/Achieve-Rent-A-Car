<div id="headerContent" @class([
    "w-full bg-white flex items-center lg:justify-between justify-center gap-4 p-4 px-default relative",
    "[&>a]:flex [&>a]:items-center [&>a]:justify-center text-flagRed/40 hover:[&>a]:text-flagRed [&>a]:h-fit",
])>

    <button class="absolute left-0 px-4 py-2 bg-flagRed rounded-md mx-4 hover:bg-flagRed lg:hidden sidebar-toggle">
        <i class="fas fa-bars text-white"></i>
    </button>

    <img src="{{asset('/img/logos/logo2.png')}}" alt="Achieve Rent a Car Log" class="max-h-14 lg:px-0 px-14 object-cover">
    
    <div id="sidebar" @class([
        "bg-white flex gap-4 p-4 z-50", {{-- Both --}}
        "[&>a]:flex [&>a]:items-center [&>a]:justify-center text-flagRed/40 hover:[&>a]:text-flagRed [&>a]:h-fit", {{-- Children --}}
        "lg:flex-row lg:h-full lg:items-center lg:static lg:-translate-x-0 lg:items-center lg:pt-4", {{-- Computer --}}
        "flex-col absolute items-start left-0 top-0 h-screen transition-transform duration-300 transform transform -translate-x-full", {{-- Phone --}}
    ])>

        <button class="px-4 py-2 bg-flagRed rounded-md hover:bg-flagRed lg:hidden sidebar-toggle">
            <i class="fas fa-xmark text-white"></i>
        </button>

        <a title="@lang('menu.home.title')" href="{{route('home', ['locale' => $locale])}}" @class([
            "text-flagRed" => $current == 'home',
        ])>
            @lang('menu.home')
        </a>
        
        <a title="@lang('menu.fleet.title')" href="{{route('fleet', ['locale' => $locale])}}" @class([
            "text-flagRed" => $current == 'fleet',
        ])>
            @lang('menu.fleet')
        </a>
        
        <a title="@lang('menu.seats.title')" href="{{route('seats', ['locale' => $locale])}}" @class([
            "text-flagRed" => $current == 'seats',
        ])>
            @lang('menu.seats')
        </a>
        
        <a title="@lang('menu.about.title')" href="{{route('about', ['locale' => $locale])}}" @class([
            "text-flagRed" => $current == 'about',
        ])>
            @lang('menu.about')
        </a>
        
        <a title="@lang('menu.faq.title')" href="{{route('faq', ['locale' => $locale])}}" @class([
            "text-flagRed" => $current == 'faq',
        ])>
            @lang('menu.faq')
        </a>
        
        <a title="@lang('menu.contact.title')" href="{{route('contact', ['locale' => $locale])}}" @class([
            "text-flagRed" => $current == 'contact',
        ])>
            @lang('menu.contact')
        </a>
    
        <a title="@lang('menu.en.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'locale' : 'en'])}}" class="flex gap-2 items-center">
            <img src="{{asset('/img/flags/en.png')}}" alt="England Flag" class="object-cover max-w-8 max-h-6">
        </a>
    
        <a title="@lang('menu.pt.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'local' : 'pt'])}}" class="flex gap-2 items-center">
            <img src="{{asset('/img/flags/pt.png')}}" alt="Portugal Flag" class="object-cover max-w-8 max-h-6">
        </a>

    </div>

</nav>
