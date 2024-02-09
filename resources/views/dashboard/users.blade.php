@extends('layouts.dashboard')
@section('main')

  <div class="py-4 space-y-4">

    <!-- Title -->
    <h1 class="pb-4 text-white">@lang('Users')</h1>
    
    <!-- Users -->
    <div class="flex flex-col space-y-4">
      @foreach ($users as $user)
        <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4 pr-28">
          <h4>@lang($user['name'])</h4>
          <p>@lang($user['email'])</p>
          @if(!$user['setted_up'])
            <p class="text-flagRed">@lang('Not setted up')</p>
          @endif
          @if($user['admin'])
            <p class="text-green-500">@lang('Admin')</p>
          @endif
          @if($isAdmin)
            <form class="absolute h-full flex items-center top-0 right-0 px-6 py-2" action="{{route('user.delete')}}" method="post">
              @csrf
              @method('delete')
              <input type="hidden" name="id" value="{{$user['id']}}">
              <button type="submit" class=" px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed">Delete</button>
            </form>
          @endif
        </div>
      @endforeach
    </div>

    <!-- Add User -->
    <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4">
      <h4>@lang('Add User')</h4>
      <form action="{{route('user.add')}}" method="POST" class="flex flex-col gap-4">
        @csrf
        <input type="email" name="email" placeholder="@lang('Email')" class="p-4 bg-zinc-600 rounded shadow">
        <label for="admin" class="select-none p-4 bg-zinc-600 rounded shadow flex gap-4">
          @lang('Is Admin')
          <input id="admin" type="checkbox" name="admin">
        </label>
        <button type="submit" class=" px-4 py-2 border-2 border-zinc-600 text-white rounded-lg hover:bg-zinc-600">@lang('Add')</button>
      </form>
    </div>

    <!-- Messages -->
    <x-messages/>
    
  </div>

@endsection
