@extends('layout')
@php $title = 'title.about'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/about/2.jpeg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('about.banner')</h1>
  </div>

  <div class="w-full px-default flex flex-col gap-4 pb-12">

    @for ($i = 1; $i <= 3; $i++)
        
      <div class="grid lg:grid-cols-2 py-12 gap-12 justify-center">
        <div @class([
          "flex flex-col gap-8",
          "lg:order-2" => ($i % 2 == 0),
        ])>
          <h2 class="font-semibold">
            @lang('about.item.'.$i.'.title')
            <span class="w-full h-0.5 my-2 bg-flagRed/50 rounded-full flex"></span>
          </h2>
          <p>@lang('about.item.'.$i.'.paragraph')</p>
        </div>
        <img src="{{url('/img/pages/about/'.$i.'.jpg')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-xl w-full h-full object-cover">
      </div>

    @endfor
    
@endsection
