@extends('layout')
@section('main')

  <main class="">

    <!-- Image -->
    <div style="background-image: url('/img/titles/about-min.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
      <h1 class="text-white text-center font-black text-6xl">@lang('About.Us-Banner-Title')</h1>
    </div>

    <!-- Content -->
    <div class="w-full xl:px-margin px-4 grid xl:grid-cols-2 grid-cols-2 py-4 gap-4">
      <div class="flex flex-col gap-4">
        <p>@lang('About.Us-Paragraph')</p>
      </div>
      <img src="{{url('/img/about/1.png')}}" alt="Madeira Island Image" class="rounded-xl">
    </div>

  </main>

@endsection
