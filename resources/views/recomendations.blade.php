@extends('layouts.main')
@php $title = 'title.recomendations'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/recomendations/1.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('recomendations.banner')</h1>
  </div>
  
  <article class="grid grid-cols-3 gap-4 py-4 2xl:px-64 lg:px-20 px-4">

    @foreach ($recomendations as $r)
    
      <div class="rounded-md shadow-2xl w-full flex flex-col gap-4 pb-4 items-start">
        <img src="{{asset($r['img'])}}" alt="{{$r['name']}} Image" class="rounded-t-md w-full h-32 object-cover">
        <div class="flex flex-col gap-4 justify-between h-full px-4">
          <h2>{{$r['name']}}</h2>
          <p class="text-start">{{$r['description']}}</p>
          <div class="flex gap-4">
            <a class="px-4 py-2 rounded-md bg-flagRed/70 text-white w-fit hover:text-white hover:bg-flagRed cursor-pointer">Saiba Mais</a>
            <a class="px-4 py-2 rounded-md bg-flagRed/70 text-white w-fit hover:text-white hover:bg-flagRed cursor-pointer">Achar no mapa</a>
          </div>
        </div>
      </div>

    @endforeach

  </article>

@endsection
