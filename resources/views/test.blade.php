@extends('layouts.main')
@section('main')

  <div class="w-full h-full">

    <div class="w-full h-full justify-center items-center text-9xl text-white xl:flex md:hidden hidden bg-red-500">Xl: Computer</div>
    <div class="w-full h-full justify-center items-center text-9xl text-white xl:hidden md:flex hidden bg-green-500">Md: Tablet</div>
    <div class="w-full h-full justify-center items-center text-9xl text-white xl:hidden md:hidden flex bg-blue-500">Phone</div>

  </div>

@endsection
