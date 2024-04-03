@extends('layout')
@php $title = 'title.fleet'; @endphp
@section('main')

<div class="min-h-screen">
  
    <div style="background-image: url('/img/pages/fleet/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-no-repeat bg-center">
      <h1 class="text-white text-center font-black text-6xl">@lang('fleet.title')</h1>
    </div>

    <iframe id="fleet" src="https://reservas.achieverentacar.com/{{$language}}/frota?iframe" frameborder="0" class="absolute top-0 left-0 bottom-0 right-0 w-full h-full pt-52"></iframe>
    
  </div>
  
@endsection
