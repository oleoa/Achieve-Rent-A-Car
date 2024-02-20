@extends('layouts.dashboard')
@section('main')

    <div class="py-4 space-y-4">

        <!-- Title -->
        <h1 class="text-white">@lang('Signin')</h1>

        <!-- Form -->
        <form action="{{route('dashboard.sign.ing-in')}}" method="post" class="py-4 flex flex-col gap-4">
            @csrf
            <input name="email" type="email" placeholder="Email" class="px-4 py-2 rounded-lg bg-zinc-700">
            <input name="password" type="password" placeholder="Password" class="px-4 py-2 rounded-lg bg-zinc-700">
            <button type="submit" class="px-4 py-2 bg-flagBlue hover:bg-blue-500 rounded-lg text-white">@lang('Signin')</button>
        </form>

        <!-- Messages -->
        <x-messages/>
        
    </div>

@endsection
