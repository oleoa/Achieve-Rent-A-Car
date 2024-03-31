@extends('layouts.main')
@php $title = 'title.about'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/about/2.jpeg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('about.banner')</h1>
  </div>

  <div class="w-full md:px-64 px-4 flex flex-col gap-4 pb-12">

    @for ($i = 1; $i <= 3; $i++)
        
      <div class="grid md:grid-cols-5 py-4 gap-8">
        <div @class([
          "flex flex-col gap-4 md:col-span-3",
          "order-2" => ($i % 2 == 0),
        ])>
          <h2 class="font-semibold">@lang('about.item.'.$i.'.title')</h2>
          <p>@lang('about.item.'.$i.'.paragraph')</p>
        </div>
        <img src="{{url('/img/pages/about/'.$i.'.jpg')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-md h-full object-cover md:col-span-2">
      </div>

    @endfor
    
@endsection
