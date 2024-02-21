@extends('layouts.dashboard')
@section('main')

    <div class="p-4 space-y-4">

        <!-- Title -->
        <div class="flex justify-between">
            <h1 class="text-white">@lang('Add Discount')</h1>
            <a href="{{route('dashboard.discount.list')}}" class="px-4 py-2 border-2 border-blue-500 text-blue-500 rounded-lg hover:text-white hover:bg-blue-500">List</a>
        </div>
        
        <!-- Add Discount -->
        <form action="{{route('dashboard.discount.add')}}" method="POST" class="flex flex-col gap-4 p-4 bg-zinc-700 relative rounded shadow">
            @csrf

            <!-- Text in english -->
            <textarea name="text" id="text" placeholder="@lang('Text in english')"></textarea>

            <!-- Text in portuguese -->
            <textarea name="texto" id="texto" placeholder="@lang('Texto em português')"></textarea>

            <!-- Row of both colors -->
            <div class="grid grid-cols-2 gap-4">

                <!-- Box of the background color -->
                <div class="p-4 bg-zinc-600 rounded shadow grid xl:grid-cols-2 items-center gap-4">
    
                    <!-- Title -->
                    <label class="text-start w-full" for="color">@lang('Wall Color')</label>

                    <!-- Row of the buttons -->
                    <div class="w-full xl:flex flex-row grid grid-cols-2 xl:justify-end justify-items-center gap-4">
                        <button id="setColorBlack" class="rounded px-2 py-1 bg-black w-10 h-10"></button>
                        <button id="setColorWhite" class="rounded px-2 py-1 bg-white w-10 h-10"></button>
                        <button id="setColorBlue" class="rounded px-2 py-1 bg-flagBlue w-10 h-10"></button>
                        <button id="setColorYellow" class="rounded px-2 py-1 bg-flagYellow w-10 h-10"></button>
                        <button id="setColorRed" class="rounded px-2 py-1 bg-flagRed w-10 h-10"></button>
                    </div>
    
                    <!-- Input of the background color -->
                    <input type="color" name="color" id="color" class="px-2 py-1 bg-zinc-500 rounded shadow w-full xl:col-span-2" value="#ffffff">
    
                </div>
    
                <!-- Box of the text color -->
                <div class="p-4 bg-zinc-600 rounded shadow grid xl:grid-cols-2 items-center gap-4">

                    <!-- Title -->
                    <label class="text-start w-full" for="text_color">@lang('Text Color')</label>

                    <!-- Row of the buttons -->
                    <div class="w-full xl:flex flex-row grid grid-cols-2 xl:justify-end justify-items-center gap-4">
                        <button id="setTextColorBlack" class="rounded px-2 py-1 bg-black w-10 h-10"></button>
                        <button id="setTextColorWhite" class="rounded px-2 py-1 bg-white w-10 h-10"></button>
                        <button id="setTextColorBlue" class="rounded px-2 py-1 bg-flagBlue w-10 h-10"></button>
                        <button id="setTextColorYellow" class="rounded px-2 py-1 bg-flagYellow w-10 h-10"></button>
                        <button id="setTextColorRed" class="rounded px-2 py-1 bg-flagRed w-10 h-10"></button>
                    </div>
    
                    <!-- Input of the text color -->
                    <input type="color" name="text_color" id="text_color" class="px-2 py-1 bg-zinc-500 rounded shadow w-full xl:col-span-2">
    
                </div>

            </div>

            <!-- Submit button -->
            <input type="submit" class="bg-green-700 hover:bg-green-600 text-white load cursor-pointer" value="@lang('Add')">

            <!-- Messages -->
            <x-messages/>

        </form>
        
        <!-- Sample -->
        <div class="text-sm text-black xl:text-xl w-full min-h-navbar py-4 xl:px-margin px-4 bg-white" id="div-sample">
            <p id="text-sample"></p>
            <p id="texto-sample"></p>
        </div>
        
    </div>

@endsection
