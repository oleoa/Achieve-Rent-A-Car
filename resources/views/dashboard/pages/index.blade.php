@extends('layouts.dashboard')
@section('main')

    <div class="p-4 flex flex-col gap-4 h-full">

        <!-- Title -->
        <h1>Pages</h1>

        <!-- Row to select the page -->
        <div class="bg-neutral-800 flex flex-row gap-4 rounded p-4">
            <a class="px-4 py-2 rounded bg-neutral-700 border-2" href="">Home</a>
            <a class="px-4 py-2 rounded bg-neutral-700 border-2" href="">About Us</a>
        </div>

        <!-- Row to select the language -->
        <div class="bg-neutral-800 flex flex-row gap-4 rounded p-4">
            <a class="px-4 py-2 rounded bg-neutral-700 border-2" href="">Portuguese</a>
            <a class="px-4 py-2 rounded bg-neutral-700 border-2" href="">English</a>
        </div>

        <!-- Content -->
        <div class="grid grid-cols-2 h-full">
            
            <!-- Form with translations -->
            <form action="" method="post">

            </form>
            
            <!-- Page -->
            <div class="flex items-center justify-center">
                <iframe src="https://achieverentacar.com" frameborder="0" class="w-full h-full bg-white"></iframe>
            </div>

        </div>


    </div>

@endsection
