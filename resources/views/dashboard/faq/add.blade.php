@extends('layouts.dashboard')
@section('main')

    <div class="p-4 space-y-4">

        <!-- Title -->
        <div class="flex justify-between">
            <h1 class="text-white">Add FAQ</h1>
            <a href="{{route('dashboard.faq.list')}}" class="px-4 py-2 border-2 border-blue-500 text-blue-500 rounded-lg hover:text-white hover:bg-blue-500">List</a>
        </div>
        
        <!-- Add FAQ -->
        <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4">
            <h4>@lang('Add FAQ')</h4>
            <form action="{{route('dashboard.faq.add')}}" method="POST" class="flex flex-col gap-4">
                @csrf
                <input type="text" name="question" placeholder="@lang('Question in english')" class="p-4 bg-zinc-600 rounded shadow">
                <textarea name="answer" placeholder="@lang('Answer in english')" class="p-4 bg-zinc-600 rounded shadow"></textarea>
                <input type="text" name="pergunta" placeholder="@lang('Pergunta em português')" class="p-4 bg-zinc-600 rounded shadow">
                <textarea name="resposta" placeholder="@lang('Resposta em português')" class="p-4 bg-zinc-600 rounded shadow"></textarea>
                <button type="submit" class=" px-4 py-2 border-2 border-zinc-600 text-white rounded-lg hover:bg-zinc-600">@lang('Add')</button>
                <x-messages/>
            </form>
        </div>
    
    </div>

@endsection
