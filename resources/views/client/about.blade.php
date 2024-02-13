@extends('layouts.client')
@section('main')

    <!-- Banner -->
    <div style="background-image: url('/img/about/2.jpeg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
        <h1 class="text-white text-center font-black text-6xl">@lang('About-Banner-Title')</h1>
    </div>

    <!-- Content -->
    <div class="w-full xl:px-margin px-4 grid xl:grid-cols-5 py-4 gap-4">

        <!-- Text -->
        <div class="flex flex-col gap-4 xl:col-span-3">

            <h2>@lang('About-1-Title')</h2>
            <p>@lang('About-1-Paragraph')</p>

        </div>

        <!-- Image -->
        <img src="{{url('/img/about/3.jpeg')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-xl xl:col-span-2">

    </div>

@endsection
