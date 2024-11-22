@extends('simplelayout')
@section('main')

    <iframe src="{{asset('/files/insurances/'.$vehicle.'.pdf')}}" class="w-full h-full" allow="autoplay"></iframe>
  
@endsection
