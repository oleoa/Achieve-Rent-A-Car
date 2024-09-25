@extends('layout')
@php $title = 'title.about'; @endphp
@section('main')

    <main class="flex justify-center items-center w-full">

        <video controls src="{{asset('/files/'.$video.".mp4")}}"></video>

    </main>
    
@endsection
