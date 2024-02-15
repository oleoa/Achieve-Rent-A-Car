@extends('layouts.client')
@section('main')

    <!-- Banner -->
    <div style="background-image: url('/img/seats/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
        <h1 class="text-white text-center font-black text-6xl">@lang('Seats-Banner-Title')</h1>
    </div>

    <!-- 1 -->
    <div class="py-4 flex flex-col gap-8">
    
        <!-- Content -->
        <div class="w-full xl:px-margin px-4 grid xl:grid-cols-2 grid-cols-1 gap-4">

            <!-- Text -->
            <div class="flex flex-col xl:items-start items-center justify-center gap-4 xl:order-1 order-2">

                <!-- Title -->
                <h2 class="text-center xl:text-start py-0 xl:text-4xl text-xl font-bold">@lang('Seats-1-Title')</h2>

                <!-- Paragraph -->
                <p class="text-justify xl:text-start">@lang('Seats-1-Paragraph')</p>

            </div>

            <!-- Image -->
            <img src="{{asset('/img/seats/b.jpg')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-lg xl:order-2 order-1 w-full">

        </div>

        
        <!-- Separator -->
        <div class="flex items-center justify-center xl:px-margin px-4">
            <div class="xl:w-1/3 w-full">
                <x-separator/>
            </div>
        </div>

    </div>

    <!-- 2 -->
    <div class="py-4 flex flex-col gap-8">
            
        <!-- Title -->
        <h2 class="py-4 text-center font-bold text-4xl">@lang('Seats-2-Title')</h2>

        <!-- Cards -->
        <div class="grid xl:grid-cols-4 w-full xl:px-margin px-4 gap-4">    
    
            <!-- Cards -->
            @for($i = 1; $i <= 4; $i++)

                <!-- Card -->
                <div class="rounded-lg shadow-lg">

                    <!-- Image -->
                    <img src="{{asset('/img/seats/'.$i.'.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg">

                    <div class="p-4">

                        <!-- Title -->
                        <h3 class="text-2xl font-bold">@lang('Seats-2-Card.'.$i.'-Title')</h3>

                        <!-- Paragraph -->
                        <p class="py-2">
                            @lang('Seats-2-Card.'.$i.'-Paragraph')
                        </p>

                    </div>

                </div>

            @endfor
    
        </div>

    </div>

@endsection
