@extends('simplelayout')
@section('main')

  <img src="{{asset('/img/verification/'.$status.'.png')}}" alt="Status" class="w-full">

  <script>

    setTimeout(() => {
        location.reload();
    }, 3600 * 1000); // 1 hour = 3600 seconds * 1000 milliseconds

  </script>

@endsection
