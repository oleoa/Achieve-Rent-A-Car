<div id="headerContent" @class([
    "w-full bg-white/50 flex items-center laptop:justify-between justify-center gap-4 p-4 px-default relative backdrop-blur-xl",
    "[&>a]:flex [&>a]:items-center [&>a]:justify-center text-red/40 hover:[&>a]:text-red [&>a]:h-fit",
])>

    <div class="absolute left-0 top-0 w-full h-full px-8 flex items-center">
        <button title="@lang('menu.toggle.title')" class="laptop:hidden sidebar-toggle">
            <i class="fas fa-bars text-red text-xl"></i>
        </button>
    </div>

    <img src="{{asset('/img/navbar/phone.webp')}}" alt="Achieve Rent a Car Log" height="48" width="213" class="block laptop:hidden max-h-12 laptop:px-0 px-14 object-cover">
    <img src="{{asset('/img/navbar/computer.webp')}}" alt="Achieve Rent a Car Log" height="48" width="306" class="hidden laptop:block max-h-12 laptop:px-0 px-14 object-cover">
    
    <div id="sidebar" class="laptop:static fixed z-50 laptop:flex laptop:items-center laptop:justify-end grid grid-cols-2 gap-0 top-0 left-0 w-full h-full transition-transform duration-300 transform -translate-x-full laptop:-translate-x-0">

        <div @class([
            "flex gap-6", {{-- Both --}}
            "[&>a]:items-center [&>a]:justify-center text-white/50 laptop:text-red laptop:hover:[&>a]:text-red laptop:hover:[&>a]:underline hover:[&>a]:text-white [&>a]:h-fit", {{-- Children --}}
            "laptop:flex-row laptop:bg-transparent laptop:p-0 laptop:h-full laptop:items-center laptop:w-full laptop:static laptop:w-fit laptop:justify-end", {{-- Computer --}}
            "flex-col p-4 bg-red items-start left-0 top-0 h-screen relative", {{-- Phone --}}
        ])>

            <button title="@lang('menu.toggle.title')" class="absolute right-0 top-0 p-4 laptop:hidden sidebar-toggle">
                <i class="fas fa-xmark text-white text-xl"></i>
            </button>

            <a title="@lang('menu.home.title')" href="{{route('home', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "laptop:text-red text-white underline" => $current == 'home',
            ])>
                <i class="fa-solid fa-house laptop:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.home')
            </a>

            <a title="@lang('menu.fleet.title')" href="{{route('fleet', ['locale' => $locale])}}" @class([
                "hidden gap-2",
                "laptop:text-red text-white underline" => $current == 'fleet',
            ])>
                <i class="fa-solid fa-car laptop:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.fleet')
            </a>
            
            <a title="@lang('menu.seats.title')" href="{{route('seats', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "laptop:text-red text-white underline" => $current == 'seats',
            ])>
                <i class="fa-solid fa-baby laptop:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.seats')
            </a>
            
            <a title="@lang('menu.stays.title')" href="{{route('stays', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "laptop:text-red text-white underline" => $current == 'stays',
            ])>
                <i class="fa-solid fa-bed laptop:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.stays')
            </a>
            
            <a title="@lang('menu.about.title')" href="{{route('about', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "laptop:text-red text-white underline" => $current == 'about',
            ])>
                <i class="fa-solid fa-people-group laptop:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.about')
            </a>
            
            <a title="@lang('menu.faq.title')" href="{{route('faq', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "laptop:text-red text-white underline" => $current == 'faq',
            ])>
                <i class="fa-solid fa-circle-question laptop:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.faq')
            </a>
            
            <a title="@lang('menu.contact.title')" href="{{route('contact', ['locale' => $locale])}}" @class([
                "flex gap-2",
                "laptop:text-red text-white underline" => $current == 'contact',
            ])>
                <i class="fa-solid fa-envelope-open-text laptop:min-w-min min-w-8 flex items-center justify-start"></i>
                @lang('menu.contact')
            </a>

            <div class="flex flex-row justify-start laptop:p-0 laptop:mt-0 mt-auto laptop:w-fit w-full rounded-md">

                <a title="@lang('menu.en.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'locale' : 'en'])}}" class="flex gap-2 items-center laptop:bg-transparent bg-white p-2 rounded-l-md">
                    <img src="{{asset('/img/flags/en.jpg')}}" alt="England Flag" height="24" width="32" class="object-cover rounded">
                </a>
            
                <a title="@lang('menu.pt.title')" href="{{route($current, ['locale' => ($locale == 'locale' || $locale == 'local') ? 'local' : 'pt'])}}" class="flex gap-2 items-center laptop:bg-transparent bg-white p-2 rounded-r-md">
                    <img src="{{asset('/img/flags/pt.jpg')}}" alt="Portugal Flag" height="24" width="32" class="object-cover rounded">
                </a>

            </div>
    
        </div>

        <div class="sidebar-toggle"></div>

    </div>

</nav>
