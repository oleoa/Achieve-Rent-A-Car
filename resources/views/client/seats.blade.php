@extends('layouts.client')
@section('main')

    <!-- Banner -->
    <div style="background-image: url('/img/titles/seats.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
        <h1 class="text-white text-center font-black text-6xl">@lang('Seats-Banner-Title')</h1>
    </div>

    <!-- 1 -->
    <div class="py-8 flex flex-col gap-8">

        <!-- Separator -->
        <div class="flex items-center justify-center xl:px-margin px-4">
          <div class="xl:w-1/3 w-full">
            <x-separator/>
          </div>
        </div>
    
        <!-- Content -->
        <div class="w-full xl:px-margin px-4 grid xl:grid-cols-2 grid-cols-1 gap-4">
          <div class="flex flex-col xl:items-start items-center justify-center gap-4 xl:order-1 order-2">
            <h2 class="text-center xl:text-start py-0 xl:text-4xl text-xl">@lang('Seats-1-Title')</h2>
            <p class="text-center xl:text-start">@lang('Seats-1-Paragraph')</p>
          </div>
          <img src="{{asset('/img/tests/b.jpg')}}" alt="Madeira Island Image" class="rounded-lg xl:order-2 order-1 w-full">
        </div>

    </div>

    <!-- 2 -->
    <div class="py-8 flex flex-col gap-8">
            
        <!-- Cards -->
        <div class="grid xl:grid-cols-4 w-full xl:px-margin px-4 gap-4">
    
            <h2 class="xl:col-span-4 py-4 text-center font-bold text-4xl">@lang('Seats-2-Title')</h2>
    
            @for($i = 1; $i <= 4; $i++)
                <div class="rounded-lg shadow-lg">
                    <img src="{{asset('/img/tests/'.$i.'.png')}}" alt="Madeira Island Image" class="rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-2xl font-bold text-gray-800">@lang('Seats-2-Card.'.$i.'-Title')</h3>
                        <p class="mt-2 text-gray-600">
                            @lang('Seats-2-Card.'.$i.'-Paragraph')
                        </p>
                    </div>
                </div>
            @endfor
    
        </div>

    </div>

@endsection
