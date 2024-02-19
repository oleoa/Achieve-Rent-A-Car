@extends('layouts.client')
@section('main')

    <!-- Banner -->
    <div style="background-image: url('/img/fleet/banner.png')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
        <h1 class="text-white text-center font-black text-6xl">@lang('Fleet-Banner-Title')</h1>
    </div>

    <!-- Fleet -->
    <div class="w-full py-4 xl:p-4">
        <input type="hidden" value="{{count($fleet)}}" id="fleetLength">
        <iframe src="https://reservas.achieverentacar.com/pt/frota?iframe" scrolling="no" id="anyrentBookingsIframe" style="width: 1px; min-width: 100%; border: 0px; overflow: hidden;"></iframe>
    </div>

@endsection
