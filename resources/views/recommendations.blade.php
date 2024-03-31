@extends('layouts.main')
@php $title = 'title.recommendations'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/recommendations/1.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('recommendations.banner')</h1>
  </div>
  
  <article class="grid grid-cols-3 gap-4 py-4 2xl:px-64 lg:px-20 px-4">

    @foreach ($recommendations as $r)
      @if ($r['active'])
        <div class="rounded-md shadow-2xl w-full flex flex-col gap-4 pb-4 items-start">
          <img src="{{asset($r['img'])}}" alt="{{$r['name']}} Image" class="rounded-t-md w-full h-32 object-cover">
          <div class="flex flex-col gap-4 justify-between h-full px-4">
            <h2>{{$r['name']}}</h2>
            <p class="text-start">{{$r['description']}}</p>
            <a target="_blank" href="{{$r['local']}}" class="px-4 py-2 flex items-center gap-2 transition-all duration-300 rounded-md bg-flagBlue text-white w-fit hover:text-flagBlue hover:bg-white border-2 border-flagBlue cursor-pointer"><i class="fa-solid fa-map-location-dot"></i>Achar no mapa</a>
            <a target="_blank" href="{{$r['website']}}" class="px-4 py-2 flex items-center gap-2 transition-all duration-300 rounded-md bg-flagRed text-white w-fit hover:text-flagRed hover:bg-white border-2 border-flagRed cursor-pointer"><i class="fa-solid fa-circle-info"></i>Saiba Mais</a>
          </div>
        </div>
      @endif
    @endforeach

  </article>

@endsection
