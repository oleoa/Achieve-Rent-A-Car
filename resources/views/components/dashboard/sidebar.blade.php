<!-- The Fixed Sidebar For (OK) Computer -->
<aside class="fixed top-0 left-0 xl:w-64 w-20 h-screen bg-neutral-800 flex flex-col gap-2">

    <!-- Logo -->
    <a href="{{route('dashboard.home')}}" class="p-4 hidden xl:flex items-center justify-center"><img src="{{asset('/img/logos/logo2.png')}}" alt="Achieve Rent A Car Logo"></a>

    <!-- Logo for smartphone -->
    <a href="{{route('dashboard.home')}}" class="p-4 xl:hidden flex items-center justify-center"><img src="{{asset('/img/logos/logo.png')}}" alt="Achieve Rent A Car Logo"></a>

    @if($is['logged'])

        <!-- User -->
        <a class="hidden xl:grid grid-cols-3 gap-4 p-4 hover:text-white hover:bg-neutral-700 {{$current == 'profile' ? 'bg-neutral-700' : ''}}" href="{{route('dashboard.profile.editor')}}">

            <div class="flex justify-center items-center">
                <img src="{{asset($logged['image'])}}" alt="Profile Picture" class="rounded-full w-16 h-16 object-cover object-center">
            </div>

            <div class="col-span-2">
                <h3>Welcome</h3>
                <p>{{$logged['name']}}</p>
            </div>

        </a>

        <!-- User for smartphone -->
        <a class="xl:hidden py-2 flex items-center justify-center hover:bg-neutral-700 {{$current == 'profile' ? 'bg-neutral-700' : ''}}" href="{{route('dashboard.profile.editor')}}">

            <img src="{{asset($logged['image'])}}" alt="Profile Picture" class="rounded-full w-16 h-16 object-cover object-center">

        </a>

    @else

        <!-- Welcome -->
        <h3 class="xl:px-4 xl:text-2xl text-base text-center">Welcome,<br>please sign in</h3>

    @endif

    <!-- Links -->
    @if($is['logged'])

        <!-- For Logged Users -->

        <!-- Views -->
        <a href="{{route('dashboard.views.list')}}" class="p-4 {{$current == 'views' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer flex xl:justify-between justify-center items-center">
            <p class="xl:flex hidden">Views</p>
            <div class="xl:w-6 w-8">
                <x-font-awesome.views/>
            </div>
        </a>

        <!-- FAQ -->
        <a href="{{route('dashboard.faq.list')}}" class="p-4 {{$current == 'faq' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer flex xl:justify-between justify-center items-center">
            <p class="xl:flex hidden">FAQ</p>
            <div class="xl:w-6 w-8">
                <x-font-awesome.f-a-q/>
            </div>
        </a>

        <!-- Discounts -->
        <a href="{{route('dashboard.discount.list')}}" class="p-4 {{$current == 'discounts' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer flex xl:justify-between justify-center items-center">
            <p class="xl:flex hidden">Discounts</p>
            <div class="xl:w-6 w-8">
                <x-font-awesome.discounts/>
            </div>
        </a>

        <!-- Users -->
        <a href="{{route('dashboard.user.list')}}" class="p-4 {{$current == 'users' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer flex xl:justify-between justify-center items-center">
            <p class="xl:flex hidden">Users</p>
            <div class="xl:w-6 w-8">
                <x-font-awesome.users/>
            </div>
        </a>

        <!-- Logout -->
        <a href="{{route('dashboard.sign.out')}}" class="p-4 {{$current == 'signout' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer flex xl:justify-between justify-center items-center">
            <p class="xl:flex hidden">Logout</p>
            <div class="xl:w-6 w-8">
                <x-font-awesome.logout/>
            </div>
        </a>

    @else

        <!-- For Not Logged Users -->

        <!-- Login -->
        <a href="{{route('dashboard.sign.in')}}" class="p-4 {{$current == 'signin' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer">
            <p>Login</p>
        </a>

    @endif

</aside>
