@extends('layouts.main')
@php $title = 'title.about'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/about/2.jpeg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('about.banner')</h1>
  </div>

  <!-- Content -->
  <div class="w-full md:px-64 px-4 grid md:grid-cols-5 py-4 gap-4">

    <!-- Text -->
    <div class="flex flex-col gap-4 md:col-span-2">

      <!-- Title -->
      <h2>@lang('about.title')</h2>

      <!-- Paragraph -->
      <p>@lang('about.paragraph')</p>

    </div>

    <!-- Image -->
    <img src="{{url('/img/pages/about/1.jpg')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-xl md:col-span-3">

  </div>

@endsection
