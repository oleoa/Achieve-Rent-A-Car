@extends('layouts.client')
@section('main')

  <!-- Banner -->
  <div style="background-image: url('/img/fleet/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('Fleet-Banner-Title')</h1>
  </div>

  @if($locale != 'translations')

    <!-- Fleet -->
    <div class="w-full" style="height: 28rem">
      <iframe src="https://reservas.achieverentacar.com/{{$locale=='local'?'pt':$locale}}/frota?iframe" class="h-full" scrolling="no" id="anyrentBookingsIframe" style="width: 1px; min-width: 100%; border: 0px; overflow: hidden;"></iframe>
    </div>

  @endif    

@endsection
