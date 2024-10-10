@extends('layout')
@php $title = 'title.fleet'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/fleet/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('fleet.title')</h1>
  </div>

  <article class="grid laptop:grid-cols-3 tablet:grid-cols-2 px-default gap-12 py-4">

    @foreach ($fleet as $vehicle)

      <div class="flex flex-col p-4 gap-2">

        <img src="{{asset('/img/pages/fleet/'.$vehicle['image'])}}" alt="@lang('fleet.alt')" class="rounded-md">

        <h2 class="font-bold">{{$vehicle['group'][$locale]}}</h2>

        <div class="laptop:flex hidden">
          <span class="flex gap-2 items-center justify-center pr-2"><img src="{{asset('/img/pages/fleet/door.svg')}}" alt="CC" class="h-4"></i>{{$vehicle['infos']['doors']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><img src="{{asset('/img/pages/fleet/cluth.svg')}}" alt="CC" class="h-4">{{$vehicle['infos']['cluth']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><img src="{{asset('/img/pages/fleet/cc.svg')}}" alt="CC" class="h-4">{{$vehicle['infos']['cc']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-snowflake"></i>{{$vehicle['infos']['cond']}}</span>
        </div>
        <div class="laptop:flex hidden">
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-users"></i>{{$vehicle['infos']['people']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-gas-pump"></i>{{$vehicle['infos']['fuel'][$locale]}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-horse-head"></i>{{$vehicle['infos']['horse']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><img src="{{asset('/img/pages/fleet/steering.svg')}}" alt="CC" class="h-4"></i>{{$vehicle['infos']['steering']}}</span>
        </div>

        <div class="laptop:hidden flex">
          <span class="flex gap-2 items-center justify-center pr-2"><img src="{{asset('/img/pages/fleet/door.svg')}}" alt="CC" class="h-4"></i>{{$vehicle['infos']['doors']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><img src="{{asset('/img/pages/fleet/cluth.svg')}}" alt="CC" class="h-4">{{$vehicle['infos']['cluth']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><img src="{{asset('/img/pages/fleet/cc.svg')}}" alt="CC" class="h-4">{{$vehicle['infos']['cc']}}<span>|</span></span>
        </div>
        <div class="laptop:hidden flex">
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-snowflake"></i>{{$vehicle['infos']['cond']}}</span>
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-users"></i>{{$vehicle['infos']['people']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-gas-pump"></i>{{$vehicle['infos']['fuel'][$locale]}}<span>|</span></span>
        </div>
        <div class="laptop:hidden flex">
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-horse-head"></i>{{$vehicle['infos']['horse']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><img src="{{asset('/img/pages/fleet/steering.svg')}}" alt="CC" class="h-4"></i>{{$vehicle['infos']['steering']}}</span>
        </div>

        <a target="_blank" href="{{"https://wa.me/+351938342970?text=".$text.$vehicle['group'][$locale]}}" class="px-4 py-2 rounded-lg bg-green-600 hover:bg-green-400 w-fit text-white">@lang('fleet.button')</a>

      </div>

    @endforeach

  </article>
  
@endsection
