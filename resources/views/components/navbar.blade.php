<div id="headerContent" @class([
    "w-full bg-white flex items-center lg:justify-between justify-center gap-4 p-4 px-default relative",
    "[&>a]:flex [&>a]:items-center [&>a]:justify-center text-flagRed/40 hover:[&>a]:text-flagRed [&>a]:h-fit",
])>

    <div class="absolute left-0 top-0 w-full h-full px-8 flex items-center">
        <button title="@lang('menu.toggle.title')" class="lg:hidden sidebar-toggle">
            <i class="fas fa-bars text-flagRed text-xl"></i>
        </button>
    </div>

    <img src="{{asset('/img/logos/logo.png')}}" alt="Achieve Rent a Car Log" height="48" width="213" class="block lg:hidden max-h-12 lg:px-0 px-14 object-cover">
    <img src="{{asset('/img/logos/logo2.png')}}" alt="Achieve Rent a Car Log" height="48" width="306" class="hidden lg:block max-h-12 lg:px-0 px-14 object-cover">
    
    <div id="sidebar" class="lg:static fixed z-50 lg:flex lg:items-center lg:justify-end grid grid-cols-2 gap-0 top-0 left-0 w-full h-full transition-transform duration-300 transform -translate-x-full lg:-translate-x-0">

        <div @class([
            "flex gap-6", {{-- Both --}}
            "[&>a]:flex [&>a]:items-center [&>a]:justify-center text-white/50 lg:text-flagRed lg:hover:[&>a]:text-flagRed lg:hover:[&>a]:underline hover:[&>a]:text-white [&>a]:h-fit", {{-- Children --}}
            "lg:flex-row lg:bg-white lg:p-0 lg:h-full lg:items-center lg:w-full lg:static lg:w-fit lg:justify-end", {{-- Computer --}}
            "flex-col p-4 bg-flagRed items-start left-0 top-0 h-full relative", {{-- Phone --}}
        ])>

            <button title="@lang('menu.toggle.title')" class="absolute right-0 top-0 p-4 lg:hidden sidebar-toggle">
                <i class="fas fa-xmark text-white text-xl"></i>
            </button>

            <a title="@lang('menu.home.title')" href="{{route('home', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "lg:text-flagRed text-white underline" => $current == 'home',
            ])>
                <i class="fa-solid fa-house lg:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.home')
            </a>
            
            <a title="@lang('menu.fleet.title')" href="{{route('fleet', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "lg:text-flagRed text-white underline" => $current == 'fleet',
            ])>
                <i class="fa-solid fa-car-rear lg:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.fleet')
            </a>
            
            <a title="@lang('menu.seats.title')" href="{{route('seats', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "lg:text-flagRed text-white underline" => $current == 'seats',
            ])>
                <i class="fa-solid fa-baby lg:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.seats')
            </a>
            
            <a title="@lang('menu.about.title')" href="{{route('about', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "lg:text-flagRed text-white underline" => $current == 'about',
            ])>
                <i class="fa-solid fa-people-group lg:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.about')
            </a>
            
            <a title="@lang('menu.faq.title')" href="{{route('faq', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "lg:text-flagRed text-white underline" => $current == 'faq',
            ])>
                <i class="fa-solid fa-circle-question lg:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.faq')
            </a>
            
            <a title="@lang('menu.contact.title')" href="{{route('contact', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "lg:text-flagRed text-white underline" => $current == 'contact',
            ])>
                <i class="fa-solid fa-envelope-open-text lg:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.contact')
            </a>

            <div class="flex flex-row gap-4 justify-start lg:p-0 p-4 lg:mt-0 mt-auto bg-white lg:w-fit w-full">

                <a title="@lang('menu.en.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'locale' : 'en'])}}" class="flex gap-2 items-center">
                    <img src="{{asset('/img/flags/en.jpg')}}" alt="England Flag" class="object-cover max-w-8 max-h-6">
                </a>
            
                <a title="@lang('menu.pt.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'local' : 'pt'])}}" class="flex gap-2 items-center">
                    <img src="{{asset('/img/flags/pt.jpg')}}" alt="Portugal Flag" class="object-cover max-w-8 max-h-6">
                </a>

            </div>
    
        </div>

        <div class=""></div>

    </div>

</nav>
