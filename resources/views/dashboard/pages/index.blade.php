@extends('layouts.dashboard')
@section('main')

    <div class="p-4 flex flex-col gap-4 h-full">

        <!-- Title -->
        <h1>Pages</h1>

        <!-- Row to select the page -->
        <div class="bg-neutral-800 flex flex-row gap-4 rounded p-4">
            <a class="px-4 py-2 rounded bg-neutral-700 hover:text-white hover:bg-neutral-600 {{$page=='home'?'border-blue-500 border-2':'';}}" href="{{route('dashboard.pages.index', ['page' => 'home'])}}">Home</a>
            <a class="px-4 py-2 rounded bg-neutral-700 hover:text-white hover:bg-neutral-600 {{$page=='about'?'border-blue-500 border-2':'';}}" href="{{route('dashboard.pages.index', ['page' => 'about'])}}">About Us</a>
        </div>

        <!-- Row to select the language -->
        <div class="bg-neutral-800 flex flex-row gap-4 rounded p-4">
            <a class="px-4 py-2 rounded bg-neutral-700 border-2" href="">Portuguese</a>
            <a class="px-4 py-2 rounded bg-neutral-700 border-2" href="">English</a>
        </div>

        <!-- Content -->
        <div class="grid grid-cols-2 h-full">
            
            <!-- Form with translations -->
            <form action="" method="post" class="flex flex-col p-4 gap-4">
                <h2>Translations</h2>
                <label for="Home-Banner-Title">Home-Banner-Title</label>
                <input type="text" id="Home-Banner-Title" name="Home-Banner-Title" placeholder="Home-Banner-Title">
                <input type="submit" value="Update" class="bg-green-700 hover:bg-green-600 text-white load cursor-pointer">
            </form>
            
            <!-- Page -->
            <div class="flex items-center justify-center">
                <iframe src="{{route($page, 'translations')}}" frameborder="0" class="w-full h-full bg-white"></iframe>
            </div>

        </div>


    </div>

@endsection
