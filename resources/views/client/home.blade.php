@extends('layouts.client')
@section('main')

    <!-- Banner -->
    <div id="home-banner" itemscope itemtype="https://schema.org/AutoRental" style="background-image: url('/img/home/banner.jpg')" class="xl:h-homeTitleXL h-homeTitle xl:px-margin flex flex-col justify-center items-start bg-cover bg-no-repeat bg-center">
        <div class="w-full grid grid-cols-2 p-4">
            <h1 itemprop="https://schema.org/name" class="text-flagRed p-4 rounded-xl bg-white/75 font-black xl:text-4xl text-lg">@lang('home-Banner-Title')</h1>
        </div>
    </div>

    <!-- System -->
    @if($locale != 'translations')    
        <div class="xl:px-0 px-4">
            <anyrent-iframe data-locale="{{$locale=='local'?'pt':$locale}}"></anyrent-iframe>
            <script src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
        </div>
    @endif

    <!-- Why choose achieve -->
    <div class="xl:px-margin px-4 py-8 flex flex-col gap-8">

        <!-- Separator -->
        <div class="flex items-center justify-center">
            <div class="xl:w-1/3 w-full">
                <x-separator/>
            </div>
        </div>

        <h2 class="text-center">@lang('home-list-title')</h2>

        <p class="text-xl text-center">@lang('home-list-p')</p>

        <div class="grid grid-cols-3 gap-4">

            @for ($i = 1; $i <= 9; $i++)

                <div class="px-4 py-2 bg-flagBlue text-white rounded flex justify-between">

                    <p>
                        @lang('home-list-li.'.$i)
                    </p>

                    <div class="h-8">

                        @switch($i)

                            @case(1)
                                <x-font-awesome.hand-shake/>
                                @break
                            @case(2)
                                <x-font-awesome.hand-holding-car/>
                                @break
                            @case(3)
                                <x-font-awesome.file-shield/>
                                @break
                            @case(4)
                                <x-font-awesome.no-credit-card/>
                                @break
                            @case(5)
                                <x-font-awesome.free-aditional-driver/>
                                @break
                            @case(6)
                                <x-font-awesome.smile/>
                                @break
                            @case(7)
                                <x-font-awesome.double-check/>
                                @break
                            @case(8)
                                <x-font-awesome.location/>
                                @break
                            @case(9)
                                <x-font-awesome.plane/>
                                @break
                                
                        @endswitch

                    </div>

                </div>

            @endfor

        </div>

    </div>

    <!-- Reviews -->
    <div class="xl:px-margin px-4 py-8 w-screen flex flex-col gap-8 h-fit">

        <!-- Separator -->
        <div class="flex items-center justify-center">
            <div class="xl:w-1/3 w-full">
                <x-separator/>
            </div>
        </div>

        <h2 class="text-center">@lang('home-reviews-title')</h2>

        <!-- Carousel Div For Carsousel And Buttons -->
        <div class="relative z-10 w-full overflow-x-hidden">

            <!-- Carousel Slide -->
            <div id="carousel-slide" class="rounded grid transition-transform duration-500 h-full bg-black" style="grid-template-columns: @for($i = 1; $i <= 5; $i++) 100% @endfor">
            
                @for ($i = 1; $i <= 5; $i++)
                
                    <!-- Carousel Item -->
                    <div class="w-full bg-flagBlue flex flex-col justify-between px-32 rounded text-white py-4">

                        <p class="py-4">@lang('home-reviews-'.$i.'-paragraph')</p>

                        <div class="py-4 flex items-center justify-start gap-2">
                            <p>@lang('home-reviews-'.$i.'-author')</p>                            
                            <div class="h-4 flex gap-1">
                                <x-font-awesome.star/>
                                <x-font-awesome.star/>
                                <x-font-awesome.star/>
                                <x-font-awesome.star/>
                                <x-font-awesome.star/>
                            </div>
                        </div>

                    </div>

                @endfor

            </div>
            
            <!-- Carousel Buttons -->
            <div class="absolute top-0 w-full h-full flex justify-between items-center">
            
                <!-- Previous Button -->
                <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn">
                    <div class="p-4 w-16">
                        <x-font-awesome.arrow-left/>
                    </div>
                </button>
                
                <!-- Next Button -->
                <button class="cursor-pointer w-32 h-full flex items-center justify-center" id="nextBtn">
                    <div class="p-4 w-16">
                        <x-font-awesome.arrow-right/>
                    </div>
                </button>
            
            </div>

            <!-- Carousel Indicator -->
            <div class="absolute bottom-0 w-full flex justify-center items-center gap-2 p-4">
            
                @for ($i = 0; $i <= 4; $i++)
                    <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="review-{{$i}}-indicator"></div>
                @endfor

            </div>
            
        </div>


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
        <div class="w-full xl:px-margin px-4 grid xl:grid-cols-5 grid-cols-1 gap-4">

            <!-- Text -->
            <div class="flex flex-col xl:items-start items-center justify-between gap-4 xl:order-1 order-2 xl:col-span-3">

                <!-- Title -->
                <h2 class="text-center xl:text-start py-0 xl:text-4xl text-2xl">@lang('home-1-Title')</h2>

                <!-- Poem -->
                <div class="bg-zinc-200 rounded p-4 flex flex-col gap-4 w-full">
                    @if($locale != 'pt')
                        <h3 class="text-start py-0 xl:text-2xl text-xl">“A Madeira é um jardim, no mundo não há igual;<br>Seu encanto não tem fim, é filha de Portugal.”</h3>
                    @endif
                    <h3 class="text-start py-0 xl:text-2xl text-xl">@lang('home-1-Poem')</h3>
                    <h4 class="py-0 text-sm text-end w-full">@lang('home-1-Author')</h4>
                </div>

                <!-- Paragraph -->
                <p class="xl:text-start text-justify">@lang('home-1-Paragraph')</p>

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
    
            <h2 class="xl:col-span-2 py-4 text-center font-bold text-4xl">@lang('home-2-Title')</h2>
    
            <div class="rounded-lg shadow-lg">
                <img src="{{asset('/img/home/2.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg w-full">
                <div class="p-4">
                    <h3 class="text-2xl font-bold">@lang('home-2-Card.1-Title')</h3>
                    <p class="mt-2 text-justify">
                        @lang('home-2-Card.1-Paragraph')
                    </p>
                    @for($i = 1; $i <= 5; $i++)
                        <p class="py-1 flex gap-2">
                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#263e78" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                            @lang('home-2-Card.1-List.'.$i)
                        </p>
                    @endfor
                </div>
            </div>
    
            <div class="rounded-lg shadow-lg">
                <img src="{{asset('/img/home/3.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg w-full">
                <div class="p-4">
                    <h3 class="text-2xl font-bold">@lang('home-2-Card.2-Title')</h3>
                    <p class="mt-2 text-justify">
                        @lang('home-2-Card.2-Paragraph')
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

                <h3 class="text-center py-0">@lang('home-3-Subtitle')</h3>
                <h2 class="text-center py-0 font-bold">@lang('home-3-Title')</h2>
                <p class="text-center">@lang('home-3-Paragraph')</p>

            </div>

            <!-- Items -->
            <div class="grid xl:grid-cols-3 gap-4 w-full">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="xl:grid xl:grid-rows-3 flex flex-col gap-4 xl:gap-0 items-center justify-items-center rounded-lg shadow-lg xl:p-8 p-4">
                        <img src="{{asset('/img/home/3-items/'.$i.'.png')}}" alt="Item Image" class="rounded-lg h-12">
                        <h2 class="text-center">@lang('home-3-Card.'.$i.'-Title')</h2>
                        <p>@lang('home-3-Card.'.$i.'-Paragraph')</p>
                    </div>
                @endfor
            </div>

        </div>

    </div>

@endsection
