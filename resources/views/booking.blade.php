@extends('layout')
@php $title = 'New Booking'; @endphp
@section('main')

  <form action="{{route('booking', $locale)}}" method="post" class="w-full h-full flex flex-col gap-4 items-center justify-center">
    @csrf

    <h2>Add new reservation to Notion</h2>
    <input name="id" type="text" class="bg-blue text-white selection:bg-transparent" placeholder="Reservation ID">
    <input type="submit" value="New Booking" class="bg-blue text-white cursor-pointer">

    @if(session('success'))
      <div class="alert alert-success text-green-600">
        @lang(session('success'))
      </div>
    @endif

  </form>

@endsection
