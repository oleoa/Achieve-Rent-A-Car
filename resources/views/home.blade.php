@extends('layout')
@section('main')

  <main class="min-h-screen">

    <!-- Banner -->
    <div itemscope itemtype="https://schema.org/AutoRental" style="background-image: url('/img/titles/home-min.jpeg')" class="xl:h-homeTitleXL h-homeTitle flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
      <h2 class="text-white text-center font-black px-4">@lang('Home-Banner-Subtitle')</h2>
      <h1 itemprop="https://schema.org/name" class="text-white text-center font-black text-6xl px-4 pb-24">@lang('Home-Banner-Title')</h1>
    </div>

    <!-- Separator -->
    <div class="pt-4 flex items-center justify-center xl:px-margin px-4">
      <div class="xl:w-1/3 w-full">
        <x-separator/>
      </div>
    </div>

    <!-- Cards -->
    <div class="grid xl:grid-cols-3 grid-cols-1 w-full xl:px-margin px-4 py-4 gap-4">

        <h2 class="xl:col-span-3 text-center font-bold text-4xl">@lang('Home-Section.1-Title')</h2>

        @for($i = 1; $i <= 3; $i++)
            <div class="rounded-lg shadow-lg">
                <img src="{{asset('/img/cards/'.$i.'.png')}}" alt="" class="rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-2xl font-bold text-gray-800">@lang('Home-Section.1-Card.'.$i.'-Title')</h3>
                    <p class="mt-2 text-gray-600">
                        @lang('Home-Section.1-Card.'.$i.'-Paragraph')
                    </p>
                </div>
            </div>
        @endfor

    </div>

    <!-- Separator -->
    <div class="py-8 flex items-center justify-center xl:px-margin px-4">
      <div class="xl:w-1/3 w-full">
        <x-separator/>
      </div>
    </div>

    <!-- Slide -->
    <div class="w-full xl:px-margin px-4 grid xl:grid-cols-2 grid-cols-1 gap-4 py-4">
      <div class="flex flex-col xl:items-start items-center justify-center gap-4 xl:order-1 order-2">
        <h2 class="py-0">@lang('Home-Section.2-Title')</h2>
        <p class="text-center xl:text-start">@lang('Home-Section.2-Paragraph')</p>
        <a href="" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700 hover:text-white">Button</a>
      </div>
      <img src="https://www.zagope.pt/wp-content/uploads/2018/08/Aeroporto-Internacional-do-Funchal-1.jpg" alt="Left Image" class="rounded-lg xl:order-2 order-1">
    </div>

  </main>

@endsection
