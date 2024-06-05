@extends('layout')
@php $title = 'title.fleet'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/fleet/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('fleet.title')</h1>
  </div>

  <article class="grid px-default gap-4 py-4">

    @foreach ($fleet as $vehicle)

      <div class="flex p-4 gap-24">
        <img src="{{asset('/img/pages/fleet/'.$vehicle['image'])}}" alt="@lang('fleet.alt')" class="rounded-md">
        <div class="flex flex-col gap-4">
          <h2 class="font-bold">{{$vehicle['group'][$locale]}}</h2>
          <h3 class="text-green-500">{{$vehicle['price'][$locale]}}</h3>
          <p>{{$vehicle['description'][$locale]}}</p>
          <div class="flex">
            <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-car-side"></i>{{$vehicle['infos']['year']}}<span>|</span></span>
            <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-gas-pump"></i>{{$vehicle['infos']['fuel'][$locale]}}<span>|</span></span>
            <span class="flex gap-2 items-center justify-center pr-2"><i class="fa-solid fa-gears"></i>{{$vehicle['infos']['cluth']}}</span>
          </div>
        </div>
      </div>

    @endforeach

  </article>
  
@endsection
