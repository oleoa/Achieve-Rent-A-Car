@extends('layout')
@php $title = 'title.about'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/about/2.jpeg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('about.banner')</h1>
  </div>

  <div class="w-full px-default flex flex-col gap-4 pb-12">

    <div class="grid lg:grid-cols-2 py-12 gap-12 justify-center">
      <div class="flex flex-col">
        <h2 class="font-semibold">
          @lang('about.item.1.title')
          <span class="w-full h-0.5 my-2 bg-red/50 rounded-full flex"></span>
        </h2>
        <p class="pb-8">@lang('about.item.1.paragraph')</p>
        <h2 class="font-semibold">
          @lang('about.item.2.title')
          <span class="w-full h-0.5 my-2 bg-red/50 rounded-full flex"></span>
        </h2>
        <p>@lang('about.item.2.paragraph')</p>
      </div>
      <img src="{{url('/img/pages/about/1.jpg')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-xl w-full h-full object-cover">
    </div>
    
@endsection
