@extends('layout')
@section('main')

    <!-- Banner -->
    <div style="background-image: url('/img/titles/about-min.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
      <h1 class="text-white text-center font-black text-6xl">@lang('About-Banner-Title')</h1>
    </div>

    <!-- Content -->
    <div class="w-full xl:px-margin px-4 grid xl:grid-cols-2 py-4 gap-4">
        <div class="flex flex-col gap-4">
            <h2>@lang('About-1-Title')</h2>
            <p>@lang('About-1-Paragraph')</p>
        </div>
        <img src="{{url('/img/about/1.png')}}" alt="Madeira Island Image" class="rounded-xl">
    </div>

@endsection
