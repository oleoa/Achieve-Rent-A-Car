@extends('layout')
@php $title = 'title.fleet'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/fleet/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('fleet.title')</h1>
  </div>

  <article class="grid grid-cols-3 px-default gap-12 py-4">

    @foreach ($fleet as $vehicle)

      <div class="flex flex-col p-4 gap-2">
        <img src="{{asset('/img/pages/fleet/'.$vehicle['image'])}}" alt="@lang('fleet.alt')" class="rounded-md">
        <h2 class="font-bold">{{$vehicle['group'][$locale]}}</h2>
        <div class="flex">
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-car-side"></i>{{$vehicle['infos']['year']}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-gas-pump"></i>{{$vehicle['infos']['fuel'][$locale]}}<span>|</span></span>
          <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-gears"></i>{{$vehicle['infos']['cluth']}}</span>
        </div>
        <a target="_blank" href="{{"https://wa.me/+351938342970?text=".$text.$vehicle['group'][$locale]}}" class="px-4 py-2 rounded-lg bg-green-600 hover:bg-green-400 w-fit text-white">Quero alugar esse carro</a>
      </div>

    @endforeach

  </article>
  
@endsection
