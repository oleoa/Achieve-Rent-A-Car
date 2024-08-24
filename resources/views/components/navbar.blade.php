<nav class="w-full h-20 bg-white/50 backdrop-blur items-center gap-4 px-default hidden laptop:flex">

    <img src="{{asset('/img/navbar/computer.webp')}}" alt="Achieve Rent a Car Log" height="48" width="306" class="max-h-12 object-cover mr-auto">
   
    <a title="@lang('menu.home.title')" href="{{route('home', ['locale' => $locale])}}" @class([
        "flex justify-center items-center gap-2 text-red hover:underline",
        "underline" => $current == 'home',
    ])>
        <i class="fa-solid fa-house laptop:min-w-min min-w-8 flex items-center justify-start"></i>
        @lang('menu.home')
    </a>

    <a title="@lang('menu.fleet.title')" href="{{route('fleet', ['locale' => $locale])}}" @class([
        "justify-center items-center gap-2 text-red hover:underline hidden",
        "underline" => $current == 'fleet',
    ])>
        <i class="fa-solid fa-car laptop:min-w-min min-w-8 flex items-center justify-start"></i>
        @lang('menu.fleet')
    </a>
    
    <a title="@lang('menu.seats.title')" href="{{route('seats', ['locale' => $locale])}}" @class([
        "flex justify-center items-center gap-2 text-red hover:underline",
        "underline" => $current == 'seats',
    ])>
        <i class="fa-solid fa-baby laptop:min-w-min min-w-8 flex items-center justify-start"></i>
        @lang('menu.seats')
    </a>
    
    <a title="@lang('menu.stays.title')" href="{{route('stays', ['locale' => $locale])}}" @class([
        "flex justify-center items-center gap-2 text-red hover:underline",
        "underline" => $current == 'stays',
    ])>
        <i class="fa-solid fa-bed laptop:min-w-min min-w-8 flex items-center justify-start"></i>
        @lang('menu.stays')
    </a>
    
    <a title="@lang('menu.about.title')" href="{{route('about', ['locale' => $locale])}}" @class([
        "flex justify-center items-center gap-2 text-red hover:underline",
        "underline" => $current == 'about',
    ])>
        <i class="fa-solid fa-people-group laptop:min-w-min min-w-8 flex items-center justify-start"></i>
        @lang('menu.about')
    </a>
    
    <a title="@lang('menu.contact.title')" href="{{route('contact', ['locale' => $locale])}}" @class([
        "flex justify-center items-center gap-2 text-red hover:underline",
        "underline" => $current == 'contact',
    ])>
        <i class="fa-solid fa-envelope-open-text laptop:min-w-min min-w-8 flex items-center justify-start"></i>
        @lang('menu.contact')
    </a>

    <div class="flex justify-start">

        <a title="@lang('menu.en.title')" href="{{route($current['url'], ['locale' => 'en']+$current['data'])}}" class="flex gap-2 items-center laptop:bg-transparent bg-white p-2 rounded-l-md">
            <img src="{{asset('/img/flags/en.jpg')}}" alt="England Flag" height="24" width="32" class="object-cover rounded">
        </a>
    
        <a title="@lang('menu.pt.title')" href="{{route($current['url'], ['locale' => 'pt']+$current['data'])}}" class="flex gap-2 items-center laptop:bg-transparent bg-white p-2 rounded-r-md">
            <img src="{{asset('/img/flags/pt.jpg')}}" alt="Portugal Flag" height="24" width="32" class="object-cover rounded">
        </a>

    </div>

</nav>