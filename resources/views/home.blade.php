@extends('layout')
@section('main')

  <main class="min-h-screen">

    <!-- Image -->
    <div style="background-image: url('/img/titles/home.jpeg')" class="xl:h-homeTitleXL h-homeTitle flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
      <h1 class="text-white text-center font-black text-6xl px-4">@lang('Achieve Rent A Car')</h1>
    </div>

    <!-- Separator -->
    <div class="pt-4 flex items-center justify-center xl:px-margin px-4">
      <div class="xl:w-1/3 w-full">
        <x-separator/>
      </div>
    </div>

    <!-- Cards -->
    <div class="grid xl:grid-cols-3 grid-cols-1 w-full xl:px-margin px-4 py-4 gap-4">

      <h1 class="xl:col-span-3 text-center font-bold">Title</h1>
      <h2 class="xl:col-span-3 text-center font-bold">Subtitle</h2>

      @for ($i = 0; $i < 3; $i++)
        <div class="rounded-lg shadow-lg">
          <img src="https://media.wired.com/photos/5fb70f2ce7b75db783b7012c/master/pass/Gear-Photos-597589287.jpg" alt="" class="rounded-t-lg">
          <div class="p-4">
            <h2 class="text-2xl font-bold text-gray-800">@lang('Title')</h2>
            <p class="mt-2 text-gray-600">
              @lang('Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque natus nisi libero tempore, sed quaerat iusto quia? Minus architecto iure, et dignissimos dolore praesentium reiciendis, ipsa optio quo non incidunt.')
            </p>
          </div>
          <div class="flex justify-end items-center w-full p-4">
            <a href="" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700 hover:text-white">@lang('Button')</a>
          </div>
        </div>
      @endfor

    </div>

  </main>

@endsection
