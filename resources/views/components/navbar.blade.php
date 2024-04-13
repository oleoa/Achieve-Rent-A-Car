<div id="headerContent" @class([
    "w-full bg-white flex items-center xl:justify-between justify-center gap-4 p-4 px-default relative",
    "[&>a]:flex [&>a]:items-center [&>a]:justify-center text-flagRed/40 hover:[&>a]:text-flagRed [&>a]:h-fit",
])>

    <div class="absolute left-0 top-0 w-full h-full px-8 flex items-center">
        <button title="@lang('menu.toggle.title')" class="xl:hidden sidebar-toggle">
            <i class="fas fa-bars text-flagRed text-xl"></i>
        </button>
    </div>

    <img src="{{asset('/img/navbar/phone.webp')}}" alt="Achieve Rent a Car Log" height="48" width="213" class="block xl:hidden max-h-12 xl:px-0 px-14 object-cover">
    <img src="{{asset('/img/navbar/computer.webp')}}" alt="Achieve Rent a Car Log" height="48" width="306" class="hidden xl:block max-h-12 xl:px-0 px-14 object-cover">
    
    <div id="sidebar" class="xl:static fixed z-50 xl:flex xl:items-center xl:justify-end grid grid-cols-2 gap-0 top-0 left-0 w-full h-full transition-transform duration-300 transform -translate-x-full xl:-translate-x-0">

        <div @class([
            "flex gap-6", {{-- Both --}}
            "[&>a]:items-center [&>a]:justify-center text-white/50 xl:text-flagRed xl:hover:[&>a]:text-flagRed xl:hover:[&>a]:underline hover:[&>a]:text-white [&>a]:h-fit", {{-- Children --}}
            "xl:flex-row xl:bg-white xl:p-0 xl:h-full xl:items-center xl:w-full xl:static xl:w-fit xl:justify-end", {{-- Computer --}}
            "flex-col p-4 bg-flagRed items-start left-0 top-0 h-full relative", {{-- Phone --}}
        ])>

            <button title="@lang('menu.toggle.title')" class="absolute right-0 top-0 p-4 xl:hidden sidebar-toggle">
                <i class="fas fa-xmark text-white text-xl"></i>
            </button>

            <a title="@lang('menu.home.title')" href="{{route('home', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "xl:text-flagRed text-white underline" => $current == 'home',
            ])>
                <i class="fa-solid fa-house xl:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.home')
            </a>

            <a title="@lang('menu.fleet.title')" href="{{route('fleet', ['locale' => $locale])}}" @class([
                "hidden gap-2",
                "xl:text-flagRed text-white underline" => $current == 'fleet',
            ])>
                <i class="fa-solid fa-car xl:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.fleet')
            </a>
            
            <a title="@lang('menu.seats.title')" href="{{route('seats', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "xl:text-flagRed text-white underline" => $current == 'seats',
            ])>
                <i class="fa-solid fa-baby xl:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.seats')
            </a>
            
            <a title="@lang('menu.stays.title')" href="{{route('stays', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "xl:text-flagRed text-white underline" => $current == 'stays',
            ])>
                <i class="fa-solid fa-bed xl:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.stays')
            </a>
            
            <a title="@lang('menu.about.title')" href="{{route('about', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "xl:text-flagRed text-white underline" => $current == 'about',
            ])>
                <i class="fa-solid fa-people-group xl:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.about')
            </a>
            
            <a title="@lang('menu.faq.title')" href="{{route('faq', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "xl:text-flagRed text-white underline" => $current == 'faq',
            ])>
                <i class="fa-solid fa-circle-question xl:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.faq')
            </a>
            
            <a title="@lang('menu.contact.title')" href="{{route('contact', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "xl:text-flagRed text-white underline" => $current == 'contact',
            ])>
                <i class="fa-solid fa-envelope-open-text xl:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.contact')
            </a>

            <div class="flex flex-row justify-start xl:p-0 xl:mt-0 mt-auto xl:w-fit w-full rounded-md">

                <a title="@lang('menu.en.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'locale' : 'en'])}}" class="flex gap-2 items-center bg-white p-2 rounded-l-md">
                    <img src="{{asset('/img/flags/en.jpg')}}" alt="England Flag" height="24" width="32" class="object-cover rounded">
                </a>
            
                <a title="@lang('menu.pt.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'local' : 'pt'])}}" class="flex gap-2 items-center bg-white p-2 rounded-r-md">
                    <img src="{{asset('/img/flags/pt.jpg')}}" alt="Portugal Flag" height="24" width="32" class="object-cover rounded">
                </a>

            </div>
    
        </div>

        <div class="sidebar-toggle"></div>

    </div>

</nav>
