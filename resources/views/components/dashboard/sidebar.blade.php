<!-- The Fixed Sidebar For (OK) Computer -->
<aside class="fixed top-0 left-0 w-64 h-screen bg-neutral-800 xl:flex flex-col gap-2 hidden">

    <!-- Logo -->
    <a href="{{route('dashboard.home')}}" class="p-4 flex items-center justify-center"><img src="{{asset('/img/logos/logo2.png')}}" alt=""></a>

    <!-- User -->
    <div class="grid grid-cols-3 gap-4 p-4">
        <img src="{{asset('/img/users/ex.png')}}" alt="" class="rounded-full">
        <div class="col-span-2">
            <h3>Welcome</h3>
            <p>Leonardo Abreu</p>
        </div>
    </div>

    <a href="{{route('dashboard.views.list')}}" class="p-4 {{$current == 'views' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer">
        <p class="">Views</p>
    </a>
    <a href="{{route('dashboard.faq.list')}}" class="p-4 {{$current == 'faq' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer">
        <p class="">FAQ</p>
    </a>
    <a href="{{route('dashboard.discount.list')}}" class="p-4 {{$current == 'discount' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer">
        <p class="">Discounts</p>
    </a>
    <a href="{{route('dashboard.user.list')}}" class="p-4 {{$current == 'user' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer">
        <p class="">Users</p>
    </a>
    <a href="{{route('dashboard.sign.out')}}" class="p-4 {{$current == 'sign.out' ? 'bg-neutral-700' : ''}} hover:bg-neutral-700 hover:text-white cursor-pointer">
        <p class="">Logout</p>
    </a>

</aside>

<!-- The Fixed Sidebar For Phone -->
<aside class="fixed top-0 right-0 w-20 h-screen bg-neutral-800 flex flex-col gap-2 xl:hidden">

</aside>
