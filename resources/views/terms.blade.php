@extends('layout')
@php $title = 'title.terms'; @endphp
@section('main')

  <main class="h-full">

    <iframe src="{{"https://docs.google.com/viewer?srcid=".($locale=="pt"?"1NdPRs2LDqNGCGEr97lOuaMWDZGd0A8KHgLklXZEuJA0":"17T8IM_Mf5q5SfdNoZ9pZGiF-o6ErhGBnHT1zQ0le6qw")."&pid=explorer&efh=false&a=v&chrome=false&embedded=true"}}" class="w-full h-screen"></iframe>

  </main>

@endsection
