@extends('layout')
@section('main')

  <main class="min-h-screen">

    <!-- Banner -->
    <div itemscope itemtype="https://schema.org/AutoRental" style="background-image: url('/img/titles/seats.jpeg')" class="xl:h-homeTitleXL h-homeTitle flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
      <h2 class="text-white text-center font-black px-4">@lang('Home-Banner-Subtitle')</h2>
      <h1 itemprop="https://schema.org/name" class="text-white text-center font-black text-6xl px-4 pb-24">@lang('Home-Banner-Title')</h1>
    </div>

    <!-- Section -->
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
            <h2 class="text-center xl:text-start py-0 xl:text-3xl text-xl">@lang('Home-Section.Explore-Title')</h2>
            <h3 class="text-center xl:text-start py-0 xl:text-4xl text-3xl">@lang('Home-Section.Explore-Subtitle')</h3>
            <p class="text-center xl:text-start">@lang('Home-Section.Explore-Paragraph')</p>
            <div class="flex flex-row gap-4">
                <button class="scrollToTop shadow-lg px-4 py-2 bg-flagBlue text-white rounded-md hover:bg-blue-700 hover:shadow-xl" title="@lang('Home-Section.Explore-Button.Title')">@lang('Home-Section.Explore-Button')</button>
                <a class="shadow-lg px-4 py-2 bg-flagBlue text-white rounded-md hover:bg-blue-700 hover:shadow-xl cursor-pointer hover:text-white" href="{{route('about', $locale)}}" title="@lang('Home-Section.Explore-Button.LeanMore.Title')">@lang('Home-Section.Explore-Button.LeanMore')</a>
            </div>
          </div>
          <img src="{{asset('/img/tests/a.png')}}" alt="Madeira Island Image" class="rounded-lg xl:order-2 order-1 w-full">
        </div>

    </div>

    <!-- Cards Section -->
    <div class="py-8 flex flex-col gap-8">
        
        <!-- Separator -->
        <div class="flex items-center justify-center xl:px-margin px-4">
          <div class="xl:w-1/3 w-full">
            <x-separator/>
          </div>
        </div>
    
        <!-- Cards -->
        <div class="grid xl:grid-cols-3 w-full xl:px-margin px-4 gap-4">
    
            <h2 class="xl:col-span-3 py-4 text-center font-bold text-4xl">@lang('Home-Section.Cards-Title')</h2>
    
            @for($i = 1; $i <= 3; $i++)
                <div class="rounded-lg shadow-lg">
                    <img src="{{asset('/img/cards/'.$i.'.png')}}" alt="Madeira Island Image" class="rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-2xl font-bold text-gray-800">@lang('Home-Section.Cards-Card.'.$i.'-Title')</h3>
                        <p class="mt-2 text-gray-600">
                            @lang('Home-Section.Cards-Card.'.$i.'-Paragraph')
                        </p>
                    </div>
                </div>
            @endfor
    
        </div>

    </div>

    <!-- Section -->
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

                <h3 class="text-center py-0">@lang('Home-Section.2-Subtitle')</h3>
                <h2 class="text-center py-0 font-bold">@lang('Home-Section.2-Title')</h2>
                <p class="text-center">@lang('Home-Section.2-Paragraph')</p>

            </div>

            <!-- Items -->
            <div class="grid xl:grid-cols-3 gap-4 w-full">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="xl:grid xl:grid-rows-3 flex flex-col gap-4 xl:gap-0 items-center justify-items-center rounded-lg shadow-lg xl:p-8 p-4">
                        <img src="{{asset('/img/items/'.$i.'.png')}}" alt="Item Image" class="rounded-lg h-12">
                        <h2 class="text-center">@lang('Home-Section.2-Card.'.$i.'-Title')</h2>
                        <p class="text-center">@lang('Home-Section.2-Card.'.$i.'-Paragraph')</p>
                    </div>
                @endfor
            </div>

            <!-- Buttons -->
            <div class="flex flex-row items-center gap-4">
                <button class="scrollToTop shadow-lg px-4 py-2 bg-flagBlue text-white rounded-md hover:bg-blue-700 hover:shadow-xl" title="@lang('Home-Section.2-Button.Title')">@lang('Home-Section.2-Button')</button>
                <a class="shadow-lg px-4 py-2 bg-flagBlue text-white rounded-md hover:bg-blue-700 hover:shadow-xl cursor-pointer hover:text-white" href="{{route('contact', $locale)}}" title="@lang('Home-Section.2-Button.LeanMore.Title')">@lang('Home-Section.2-Button.LeanMore')</a>
            </div>

        </div>

    </div>

  </main>

@endsection
