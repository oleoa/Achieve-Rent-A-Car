@extends('layouts.client')
@section('main')

    <!-- Banner -->
    <div style="background-image: url('/img/fleet/banner.webp')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
        <h1 class="text-white text-center font-black text-6xl">@lang('Fleet-Banner-Title')</h1>
    </div>

    <main class="xl:px-margin px-4">

        <div class="grid xl:grid-cols-3 gap-4 py-4">

            @foreach ($fleet as $unit)

                <div class="shadow-2xl rounded-xl p-4 flex flex-col gap-4">

                    <h2 class="text-center">{{ $unit['brand'] }} {{ $unit['model'] }}</h2>
                    <img src="{{ $unit['image_url'] }}" alt="Fleet Image">

                </div>
    
            @endforeach

        </div>

    </main>

@endsection
