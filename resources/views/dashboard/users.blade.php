@extends('layouts.dashboard')
@section('main')

    <div class="p-4 space-y-4">

        <!-- Title -->
        <h1 class="text-white">@lang('Users')</h1>
        
        <!-- Users -->
        <div class="flex flex-col space-y-4">

            @foreach ($users as $user)

                <!-- User -->
                <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4 xl:pr-28">

                    <!-- Name -->
                    <h4>@lang($user['name'])</h4>

                    <!-- Email -->
                    <p class="xl:text-base text-xs">@lang($user['email'])</p>

                    <!-- Setted Up -->
                    @if(!$user['setted_up'])
                        <p class="text-flagRed">@lang('Not setted up')</p>
                    @endif

                    <!-- Is Admin -->
                    @if($user['admin'])
                        <p class="text-green-500">@lang('Admin')</p>
                    @endif

                    <!-- Current Admin Logged -->
                    @if($is['admin'])

                        <!-- Delete For Computer -->
                        <form class="absolute h-full xl:flex hidden items-center top-0 right-0 px-6 py-2" action="{{route('dashboard.user.delete')}}" method="post">
                            @csrf @method('delete')

                            <!-- ID -->
                            <input type="hidden" name="id" value="{{$user['id']}}">

                            <!-- Submit -->
                            <button type="submit" class=" px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed load">Delete</button>

                        </form>

                        <!-- Delete For Smartphone -->
                        <form class="xl:hidden" action="{{route('dashboard.user.delete')}}" method="post">
                            @csrf @method('delete')

                            <!-- ID -->
                            <input type="hidden" name="id" value="{{$user['id']}}">

                            <!-- Submit -->
                            <button type="submit" class=" px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed load">Delete</button>

                        </form>
                        
                    @endif

                </div>

            @endforeach

        </div>

        <!-- Add User -->
        <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4">

            <!-- Title -->
            <h4>@lang('Add User')</h4>

            <form action="{{route('dashboard.user.add')}}" method="POST" class="flex flex-col gap-4">
                @csrf

                <!-- Email -->
                <input type="email" name="email" placeholder="@lang('Email')" class="px-4 py-2 bg-zinc-600 rounded shadow">

                <!-- Is Admin -->
                <label for="admin" class="select-none px-4 py-2 bg-zinc-600 rounded shadow flex gap-4">
                    @lang('Is Admin')
                    <input id="admin" type="checkbox" name="admin">
                </label>

                <!-- Submit -->
                <input type="submit" class="bg-green-700 hover:bg-green-600 text-white load cursor-pointer" value="@lang('Add')">

                <!-- Messages -->
                <x-messages/>
                
            </form>

        </div>
        
    </div>

@endsection
