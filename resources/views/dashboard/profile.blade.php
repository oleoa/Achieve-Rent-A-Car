@extends('layouts.dashboard')
@section('main')

    <div class="p-4 space-y-4">

        <!-- Title -->
        <h1 class="text-white">@lang('Profile')</h1>
        
        <!-- Profile -->
        <form action="{{route('dashboard.profile.update')}}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
            @csrf

            <!-- Id -->
            <input type="hidden" name="id" value="{{$id}}">

            <!-- Image -->
            <!--
                <img src="{{asset($image)}}" alt="Profile Image" id="profileImage">
                <input type="file" name="image" id="inputImage">
            -->

            <!-- Name -->
            <label for="nameInput">Name</label>
            <input class="bg-neutral-700 p-4 rounded shadow" type="text" name="name" id="nameInput" value="{{$name}}">

            <!-- Email -->
            <label for="emailInput">Email</label>
            <input class="bg-neutral-700 p-4 rounded shadow" type="email" name="email" id="emailInput" value="{{$email}}">

            <!-- Password -->
            <label for="passwordInput">Password to confirm</label>
            <input type="password" name="password" id="passwordInput" class="bg-neutral-700 p-4 rounded shadow">

            <!-- Submit -->
            <button type="submit" class="bg-green-700 hover:bg-green-600 text-white p-4 rounded shadow">@lang('Save')</button>

            <!-- Error -->
            <x-messages/>

        </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.min.js"></script>
        
    </div>

@endsection
