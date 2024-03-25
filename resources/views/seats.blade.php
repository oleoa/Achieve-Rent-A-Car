@extends('layouts.main')
@section('main')

  <!-- Banner -->
  <div style="background-image: url('/img/seats/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('Seats-Banner-Title')</h1>
  </div>

  <!-- Intro -->
  <div class="py-4 flex flex-col gap-8">
  
    <!-- Content -->
    <div class="w-full xl:px-margin px-4 grid md:grid-cols-2 grid-cols-1 gap-4">

      <!-- Text -->
      <div class="flex flex-col md:items-start items-center justify-center gap-4 order-1">

        <!-- Title -->
        <h2 class="text-center md:text-start py-0 md:text-4xl text-xl font-bold">@lang('Seats-1-Title')</h2>

        <!-- Paragraph -->
        <p class="text-justify md:text-start">@lang('Seats-1-Paragraph')</p>

      </div>

      <!-- Image -->
      <img src="{{asset('/img/seats/main.jpg')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-lg order-2 w-full">

    </div>

      
    <!-- Separator -->
    <div class="flex items-center justify-center md:px-margin px-4">
      <div class="md:w-1/3 w-full">
        <x-separator/>
      </div>
    </div>

  </div>

  <!-- Seats -->
  <div class="py-4 flex flex-col gap-8">
          
    <!-- Title -->
    <h2 class="py-4 text-center font-bold text-4xl">@lang('Seats-2-Title')</h2>

    <!-- Cards -->
    <div class="grid md:grid-cols-2 w-full xl:px-margin px-4 gap-8 justify-items-center">

      <!-- Cards -->
      @for($i = 1; $i <= 2; $i++)

        <!-- Card -->
        <div class="rounded-lg flex flex-col items-center w-96 text-center">

          <!-- Image -->
          <img src="{{asset('/img/seats/'.$i.'.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg w-96">

          <div class="p-4 flex flex-col gap-4">

            <!-- Title -->
            <h3 class="text-xl font-bold">@lang('Seats-2-Card.'.$i.'-Title')</h3>

            <!-- Paragraph -->
            <p class="py-2 text-base text-center">
              @lang('Seats-2-Card.'.$i.'-Paragraph')
            </p>

            <a class="px-4 py-2 rounded-md border-2 border-black bg-black text-white hover:bg-white hover:text-black" target="_blank" href="{{asset('/manuals/'.$i.'.pdf')}}">
              @lang('Seats-2-Button')
            </a>

          </div>

        </div>

      @endfor

    </div>

  </div>

@endsection
