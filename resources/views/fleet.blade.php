@extends('layouts.main')
@php
  $title = 'fleet.title';
@endphp
@section('main')

  <!-- Banner -->
  <div style="background-image: url('/img/fleet/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('Fleet-Banner-Title')</h1>
  </div>

  <!-- Fleet -->
  <div class="2xl:px-margin">
    <div class="relative overflow-hidden w-full" style="padding-top: 100%;">
      <iframe src="https://reservas.achieverentacar.com/{{$language}}/frota?iframe" frameborder="0" class="absolute top-0 left-0 bottom-0 right-0 w-full h-full"></iframe>
    </div>
  </div>

@endsection
