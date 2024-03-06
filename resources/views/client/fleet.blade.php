@extends('layouts.client')
@section('main')

  <!-- Banner -->
  <div style="background-image: url('/img/fleet/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('Fleet-Banner-Title')</h1>
  </div>

  <!-- Fleet -->
  <div class="xl:px-margin">
    <div class="relative overflow-hidden w-full" style="padding-top: 100%;">
      <iframe src="https://reservas.achieverentacar.com/{{$locale=='local'?'pt':$locale}}/frota?iframe" frameborder="0" class="absolute top-0 left-0 bottom-0 right-0 w-full h-full"></iframe>
    </div>
  </div>

@endsection

<!--

  <div class="w-full xl:px-margin px-4 h-full">
    <iframe src="https://reservas.achieverentacar.com/{{$locale=='local'?'pt':$locale}}/frota?iframe" class="h-full" scrolling="no" id="anyrentBookingsIframe" style="width: 1px; min-width: 100%; border: 0px; overflow: hidden;"></iframe>
  </div>

-->
