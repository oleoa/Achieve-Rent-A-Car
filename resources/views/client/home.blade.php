@extends('layouts.client')
@section('main')

    <!-- Banner -->
    <div id="home-banner" itemscope itemtype="https://schema.org/AutoRental" style="background-image: url('/img/home/banner.jpg')" class="xl:h-homeTitleXL h-homeTitle xl:px-margin flex flex-col justify-center items-start bg-cover bg-no-repeat bg-center">
        <div class="w-full grid grid-cols-2 p-4">
            <h1 itemprop="https://schema.org/name" class="text-flagRed p-4 rounded-xl bg-white/75 font-black xl:text-4xl text-lg">@lang('Home-Banner-Title')</h1>
        </div>
    </div>

    @if($locale != 'translations')
    
        <!-- 0 -->
        <div class="xl:px-0 px-4">
            <anyrent-iframe data-locale="{{$locale=='local'?'pt':$locale}}"></anyrent-iframe>
            <script src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
        </div>

    @endif

    <!-- 1 -->
    <div class="py-8 flex flex-col gap-8">

        <!-- Separator -->
        <div class="flex items-center justify-center xl:px-margin px-4">
          <div class="xl:w-1/3 w-full">
            <x-separator/>
          </div>
        </div>
    
        <!-- Content -->
        <div class="w-full xl:px-margin px-4 grid xl:grid-cols-5 grid-cols-1 gap-4">

            <!-- Text -->
            <div class="flex flex-col xl:items-start items-center justify-between gap-4 xl:order-1 order-2 xl:col-span-3">

                <!-- Title -->
                <h2 class="text-center xl:text-start py-0 xl:text-4xl text-2xl">@lang('Home-1-Title')</h2>

                <!-- Poem -->
                <div class="bg-zinc-200 rounded p-4 flex flex-col gap-4 w-full">
                    @if($locale != 'pt')
                        <h3 class="text-start py-0 xl:text-2xl text-xl">“A Madeira é um jardim, no mundo não há igual;<br>Seu encanto não tem fim, é filha de Portugal.”</h3>
                    @endif
                    <h3 class="text-start py-0 xl:text-2xl text-xl">@lang('Home-1-Poem')</h3>
                    <h4 class="py-0 text-sm text-end w-full">@lang('Home-1-Author')</h4>
                </div>

                <!-- Paragraph -->
                <p class="xl:text-start text-justify">@lang('Home-1-Paragraph')</p>

            </div>

            <!-- Image -->
            <img src="{{asset('/img/home/1.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-lg xl:order-2 order-1 max-w-full h-auto w-full xl:col-span-2">

        </div>

    </div>

    <!-- 2 -->
    <div class="py-8 flex flex-col gap-8">
        
        <!-- Separator -->
        <div class="flex items-center justify-center xl:px-margin px-4">
          <div class="xl:w-1/3 w-full">
            <x-separator/>
          </div>
        </div>
    
        <!-- Cards -->
        <div class="grid xl:grid-cols-2 w-full xl:px-margin px-4 gap-4">
    
            <h2 class="xl:col-span-2 py-4 text-center font-bold text-4xl">@lang('Home-2-Title')</h2>
    
            <div class="rounded-lg shadow-lg">
                <img src="{{asset('/img/home/2.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg w-full">
                <div class="p-4">
                    <h3 class="text-2xl font-bold">@lang('Home-2-Card.1-Title')</h3>
                    <p class="mt-2 text-justify">
                        @lang('Home-2-Card.1-Paragraph')
                    </p>
                    @for($i = 1; $i <= 5; $i++)
                        <p class="py-1 flex gap-2">
                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#263e78" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                            @lang('Home-2-Card.1-List.'.$i)
                        </p>
                    @endfor
                </div>
            </div>
    
            <div class="rounded-lg shadow-lg">
                <img src="{{asset('/img/home/3.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg w-full">
                <div class="p-4">
                    <h3 class="text-2xl font-bold">@lang('Home-2-Card.2-Title')</h3>
                    <p class="mt-2 text-justify">
                        @lang('Home-2-Card.2-Paragraph')
                    </p>
                </div>
            </div>
    
        </div>

    </div>

    <!-- 3 -->
    <div class="py-8 flex flex-col gap-8 xl:px-margin px-4">

        <!-- Separator -->
        <div class="flex items-center justify-center">
          <div class="xl:w-1/3 w-full">
            <x-separator/>
          </div>
        </div>
    
        <!-- Content -->
        <div class="w-full flex flex-col items-center gap-8">

            <!-- Text -->            
            <div class="flex flex-col items-center justify-center gap-4 xl:w-1/2">

                <h3 class="text-center py-0">@lang('Home-3-Subtitle')</h3>
                <h2 class="text-center py-0 font-bold">@lang('Home-3-Title')</h2>
                <p class="text-center">@lang('Home-3-Paragraph')</p>

            </div>

            <!-- Items -->
            <div class="grid xl:grid-cols-3 gap-4 w-full">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="xl:grid xl:grid-rows-3 flex flex-col gap-4 xl:gap-0 items-center justify-items-center rounded-lg shadow-lg xl:p-8 p-4">
                        <img src="{{asset('/img/home/3-items/'.$i.'.png')}}" alt="Item Image" class="rounded-lg h-12">
                        <h2 class="text-center">@lang('Home-3-Card.'.$i.'-Title')</h2>
                        <p>@lang('Home-3-Card.'.$i.'-Paragraph')</p>
                    </div>
                @endfor
            </div>

        </div>

    </div>

@endsection
