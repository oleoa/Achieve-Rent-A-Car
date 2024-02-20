@extends('layouts.dashboard')
@section('main')
  <div class="py-4 space-y-4">

    <!-- Title -->
    <div class="flex items-center justify-between gap-4">
        <h1 class="">@lang('Views')</h1>
        <form action="{{route('view.delete')}}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" class="hover:text-white cursor-pointer text-red-500 hover:bg-red-500 px-4 py-2 rounded-lg border-2  border-red-500" value="Delete All">
        </form>
    </div>

    <!-- Messages -->
    <x-messages/>
    
    <!-- Range -->
    <div class="p-4 bg-zinc-700 xl:flex xl:flex-row gap-4 xl:items-center rounded-lg grid grid-cols-2 w-full">
        <h3 class="col-span-2">@lang('Range')</h3>
        <a class="hover:text-white hover:bg-zinc-400 px-4 py-2 rounded-lg border-2  border-zinc-500 @if($range == 'day') bg-zinc-500 @endif" href="{{route('views', ['range' => 'day'])}}">@lang('Last 24 hours')</a>
        <a class="hover:text-white hover:bg-zinc-400 px-4 py-2 rounded-lg border-2  border-zinc-500 @if($range == 'week') bg-zinc-500 @endif" href="{{route('views', ['range' => 'week'])}}">@lang('Last 7 days')</a>
        <a class="hover:text-white hover:bg-zinc-400 px-4 py-2 rounded-lg border-2  border-zinc-500 @if($range == 'month') bg-zinc-500 @endif" href="{{route('views', ['range' => 'month'])}}">@lang('Last 30 days')</a>
        <a class="hover:text-white hover:bg-zinc-400 px-4 py-2 rounded-lg border-2  border-zinc-500 @if($range == 'quarter') bg-zinc-500 @endif" href="{{route('views', ['range' => 'quarter'])}}">@lang('Last 90 days')</a>
        <a class="hover:text-white hover:bg-zinc-400 px-4 py-2 rounded-lg border-2  border-zinc-500 @if($range == 'year') bg-zinc-500 @endif" href="{{route('views', ['range' => 'year'])}}">@lang('Last 365 days')</a>
        <a class="hover:text-white hover:bg-zinc-400 px-4 py-2 rounded-lg border-2  border-zinc-500 @if($range == 'all') bg-zinc-500 @endif" href="{{route('views', ['range' => 'all'])}}">@lang('All time')</a>
    </div>

    <!-- Description -->
    <div class="w-full rounded-lg p-4 hidden xl:grid grid-cols-7 gap-4">
        <h3 class="flex items-center">@lang('Description')</h3>
        <h3 class="flex items-center bg-zinc-700 px-4 py-2 rounded-lg">@lang('Total')</h3>
        <h3 class="flex items-center bg-zinc-700 px-4 py-2 rounded-lg">@lang('Porcentage')</h3>
        <h3 class="flex items-center bg-zinc-700 px-4 py-2 rounded-lg col-span-4">@lang('Language')</h3>
    </div>

    <!-- Total -->
    <div class="w-full bg-zinc-800 rounded-lg p-4 grid xl:grid-cols-7 grid-cols-2 gap-4">
      <h3 class="flex items-center col-span-2 xl:col-span-1">@lang('Total')</h3>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['total']['total']}}</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['porcentage']['total']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('English')</h3>
        <h3>{{$views['locale']['en']['total']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['en']['total']['porcentage']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('Portuguese')</h3>
        <h3>{{$views['locale']['pt']['total']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['pt']['total']['porcentage']}}%</h3>
      </div>
    </div>

    <!-- Desktop -->
    <div class="w-full bg-zinc-800 rounded-lg p-4 grid xl:grid-cols-7 grid-cols-2 gap-4">
      <h3 class="flex items-center col-span-2 xl:col-span-1">@lang('Desktop')</h3>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['total']['desktop']}}</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['porcentage']['desktop']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('English')</h3>
        <h3>{{$views['locale']['en']['desktop']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['en']['desktop']['porcentage']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('Portuguese')</h3>
        <h3>{{$views['locale']['pt']['desktop']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['pt']['desktop']['porcentage']}}%</h3>
      </div>
    </div>

    <!-- Mobile -->
    <div class="w-full bg-zinc-800 rounded-lg p-4 grid xl:grid-cols-7 grid-cols-2 gap-4">
      <h3 class="flex items-center col-span-2 xl:col-span-1">@lang('Mobile')</h3>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['total']['mobile']}}</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['porcentage']['mobile']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('English')</h3>
        <h3>{{$views['locale']['en']['mobile']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['en']['mobile']['porcentage']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('Portuguese')</h3>
        <h3>{{$views['locale']['pt']['mobile']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['pt']['mobile']['porcentage']}}%</h3>
      </div>
    </div>

    <!-- Home -->
    <div class="w-full bg-zinc-800 rounded-lg p-4 grid xl:grid-cols-7 grid-cols-2 gap-4">
      <h3 class="flex items-center col-span-2 xl:col-span-1">@lang('Home')</h3>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['total']['home']}}</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['porcentage']['home']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('English')</h3>
        <h3>{{$views['locale']['en']['home']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['en']['home']['porcentage']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('Portuguese')</h3>
        <h3>{{$views['locale']['pt']['home']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['pt']['home']['porcentage']}}%</h3>
      </div>
    </div>

    <!-- About -->
    <div class="w-full bg-zinc-800 rounded-lg p-4 grid xl:grid-cols-7 grid-cols-2 gap-4">
      <h3 class="flex items-center col-span-2 xl:col-span-1">@lang('About')</h3>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['total']['about']}}</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['porcentage']['about']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('English')</h3>
        <h3>{{$views['locale']['en']['about']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['en']['about']['porcentage']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('Portuguese')</h3>
        <h3>{{$views['locale']['pt']['about']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['pt']['about']['porcentage']}}%</h3>
      </div>
    </div>

    <!-- FAQ -->
    <div class="w-full bg-zinc-800 rounded-lg p-4 grid xl:grid-cols-7 grid-cols-2 gap-4">
      <h3 class="flex items-center col-span-2 xl:col-span-1">@lang('FAQ')</h3>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['total']['faq']}}</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['porcentage']['faq']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('English')</h3>
        <h3>{{$views['locale']['en']['faq']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['en']['faq']['porcentage']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('Portuguese')</h3>
        <h3>{{$views['locale']['pt']['faq']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['pt']['faq']['porcentage']}}%</h3>
      </div>
    </div>

    <!-- Contact -->
    <div class="w-full bg-zinc-800 rounded-lg p-4 grid xl:grid-cols-7 grid-cols-2 gap-4">
      <h3 class="flex items-center col-span-2 xl:col-span-1">@lang('Contact Us')</h3>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['total']['contact']}}</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg">
        <h3>{{$views['porcentage']['contact']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('English')</h3>
        <h3>{{$views['locale']['en']['contact']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['en']['contact']['porcentage']}}%</h3>
      </div>
      <div class="bg-zinc-700 flex gap-4 px-4 py-2 rounded-lg col-span-2">
        <h3>@lang('Portuguese')</h3>
        <h3>{{$views['locale']['pt']['contact']['count']}}</h3>
        <h3> | </h3>
        <h3>{{$views['locale']['pt']['contact']['porcentage']}}%</h3>
      </div>
    </div>

  </div>
@endsection
