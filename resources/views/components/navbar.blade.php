<div id="headerContent" @class([
    "w-full bg-white flex items-center lg:justify-between justify-center gap-4 p-4 px-default relative",
    "[&>a]:flex [&>a]:items-center [&>a]:justify-center text-flagRed/40 hover:[&>a]:text-flagRed [&>a]:h-fit",
])>

    <button class="absolute left-0 px-8 py-2 lg:hidden sidebar-toggle">
        <i class="fas fa-bars text-flagRed text-xl"></i>
    </button>

    <img src="{{asset('/img/logos/logo.png')}}" alt="Achieve Rent a Car Log" class="max-h-14 lg:px-0 px-14 object-cover">
    
    <div id="sidebar" @class([
        "flex gap-8 z-50", {{-- Both --}}
        "[&>a]:flex [&>a]:items-center [&>a]:justify-center text-white/50 hover:[&>a]:text-white [&>a]:h-fit", {{-- Children --}}
        "lg:flex-row lg:bg-white lg:p-0 lg:h-full lg:items-center lg:static lg:w-fit lg:-translate-x-0 lg:items-center lg:pt-4", {{-- Computer --}}
        "flex-col fixed p-4 bg-flagRed items-start left-0 top-0 h-full w-48 transition-transform duration-300 transform transform -translate-x-full", {{-- Phone --}}
    ])>

        <button class="absolute right-0 top-0 p-4 lg:hidden sidebar-toggle">
            <i class="fas fa-xmark text-white text-xl"></i>
        </button>

        <a title="@lang('menu.home.title')" href="{{route('home', ['locale' => $locale])}}" @class([
            "text-white" => $current == 'home',
        ])>
            <i class="fa-solid fa-house min-w-8 flex items-center justify-start"></i>
            @lang('menu.home')
        </a>
        
        <a title="@lang('menu.fleet.title')" href="{{route('fleet', ['locale' => $locale])}}" @class([
            "text-white" => $current == 'fleet',
        ])>
            <i class="fa-solid fa-car-rear min-w-8 flex items-center justify-start"></i>
            @lang('menu.fleet')
        </a>
        
        <a title="@lang('menu.seats.title')" href="{{route('seats', ['locale' => $locale])}}" @class([
            "text-white" => $current == 'seats',
        ])>
            <i class="fa-solid fa-baby min-w-8 flex items-center justify-start"></i>
            @lang('menu.seats')
        </a>
        
        <a title="@lang('menu.about.title')" href="{{route('about', ['locale' => $locale])}}" @class([
            "text-white" => $current == 'about',
        ])>
            <i class="fa-solid fa-people-group min-w-8 flex items-center justify-start"></i>
            @lang('menu.about')
        </a>
        
        <a title="@lang('menu.faq.title')" href="{{route('faq', ['locale' => $locale])}}" @class([
            "text-white" => $current == 'faq',
        ])>
            <i class="fa-solid fa-circle-question min-w-8 flex items-center justify-start"></i>
            @lang('menu.faq')
        </a>
        
        <a title="@lang('menu.contact.title')" href="{{route('contact', ['locale' => $locale])}}" @class([
            "text-white" => $current == 'contact',
        ])>
            <i class="fa-solid fa-envelope-open-text min-w-8 flex items-center justify-start"></i>
            @lang('menu.contact')
        </a>

        <div class="flex flex-row gap-4 justify-between lg:mt-0 mt-auto">

            <a title="@lang('menu.en.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'locale' : 'en'])}}" class="flex gap-2 items-center">
                <img src="{{asset('/img/flags/en.png')}}" alt="England Flag" class="object-cover max-w-8 max-h-6">
            </a>
        
            <a title="@lang('menu.pt.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'local' : 'pt'])}}" class="flex gap-2 items-center">
                <img src="{{asset('/img/flags/pt.png')}}" alt="Portugal Flag" class="object-cover max-w-8 max-h-6">
            </a>

        </div>
    

    </div>

</nav>
