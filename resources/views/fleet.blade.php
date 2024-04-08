@extends('layout')
@php $title = 'title.fleet'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/fleet/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('fleet.title')</h1>
  </div>

  <article class="grid xl:grid-cols-3 px-default gap-4 py-4">

    @for ($i = 1; $i <= 7; $i++)

      <img src="{{asset('/img/pages/fleet/'.$i.'.png')}}" alt="@lang('fleet.alt')" class="rounded-md shadow-2xl">

    @endfor

  </article>
  
@endsection
