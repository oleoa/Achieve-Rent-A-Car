@extends('layout')
@php $title = 'title.terms'; @endphp
@section('main')

  <main>
    
    <embed src="{{asset('/files/terms'.strtoupper($locale).'.pdf')}}?#toolbar=0" type="application/pdf" width="100%" class="h-screen"/>

  </main>

@endsection
