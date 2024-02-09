@extends('layouts.dashboard')
@section('main')

  <div class="py-4 space-y-4">

    <!-- Title -->
    <h1 class="pb-4 text-white">@lang('Setup')</h1>

    <!-- Setup -->
    <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4">
      <h4>@lang('Set your data')</h4>
      <form action="{{route('user.settingup')}}" method="POST" class="flex flex-col gap-4">
        @csrf
        <input type="hidden" name="token" value="{{$token}}">
        <input type="hidden" name="id" value="{{$id}}">
        <input type="email" name="email" class="p-4 bg-zinc-600 rounded shadow" value="{{$email}}" disabled>
        <input type="text" name="name" placeholder="@lang('Name')" class="p-4 bg-zinc-500 rounded shadow">
        <input type="password" name="password" placeholder="@lang('Password')" class="p-4 bg-zinc-500 rounded shadow">
        <input type="password" name="password_confirmation" placeholder="@lang('Password Confirmation')" class="p-4 bg-zinc-500 rounded shadow">
        <button type="submit" class=" px-4 py-2 border-2 border-zinc-600 text-white rounded-lg hover:bg-zinc-600">@lang('Setup')</button>
      </form>
    </div>

    <!-- Messages -->
    <x-messages/>
    
  </div>

@endsection
