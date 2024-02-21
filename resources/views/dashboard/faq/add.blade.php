@extends('layouts.dashboard')
@section('main')

    <div class="p-4 space-y-4">

        <!-- Title -->
        <div class="flex justify-between">
            <h1 class="text-white">Add FAQ</h1>
            <a href="{{route('dashboard.faq.list')}}" class="px-4 py-2 border-2 border-blue-500 text-blue-500 rounded-lg hover:text-white hover:bg-blue-500">List</a>
        </div>
        
        <!-- Add FAQ -->
        <div class="p-4 bg-zinc-700 rounded shadow flex flex-col gap-4">

            <!-- Title -->
            <h4>@lang('Add FAQ')</h4>

            <!-- Form -->
            <form action="{{route('dashboard.faq.add')}}" method="POST" class="flex flex-col gap-4">
                @csrf

                <!-- Question -->
                <input type="text" name="question" placeholder="@lang('Question in english')">

                <!-- Answer -->
                <textarea name="answer" placeholder="@lang('Answer in english')"></textarea>

                <!-- Pergunta -->
                <input type="text" name="pergunta" placeholder="@lang('Pergunta em português')">

                <!-- Resposta -->
                <textarea name="resposta" placeholder="@lang('Resposta em português')"></textarea>

                <!-- Submit -->
                <input type="submit" class="bg-green-700 hover:bg-green-600 text-white load cursor-pointer" value="@lang('Add')">

                <!-- Messages -->
                <x-messages/>

            </form>

        </div>
    
    </div>

@endsection
