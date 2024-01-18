@extends('layout')
@section('main')

  <main class="">

    <!-- Image -->
    <div style="background-image: url('/img/titles/about-min.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
      <h1 class="text-white text-center font-black text-6xl">@lang('About Us')</h1>
    </div>

    <!-- Content -->
    <div class="w-full xl:px-margin px-4 grid xl:grid-cols-2 grid-cols-2 py-4 gap-4">
      <div class="flex flex-col gap-4">
        <h1 class="font-bold">Welcome to Madeira Island, your gateway to adventure!</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam unde quibusdam ut accusantium expedita error nulla dolorem minima. Praesentium aspernatur a dolore fuga commodi expedita magnam cum ipsum non. Id!</p>
      </div>
      <img src="{{url('/img/cards/about.jpeg')}}" alt="" class="rounded-xl">
    </div>

  </main>

@endsection
