@extends('layouts.dashboard')
@section('main')

    <div class="p-4 space-y-4">

        <!-- Title -->
        <div class="flex justify-between">
            <h1 class="text-white">FAQ</h1>
            <a href="{{route('dashboard.faq.add')}}" class="px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:text-white hover:bg-green-500">Add</a>
        </div>
        
        <!-- FAQ's -->
        <div class="flex flex-col space-y-4">
            @foreach ($faqs as $faq)
                <div class="relative shadow flex flex-col">
                    <h4 class="bg-neutral-800 p-4 rounded-t-xl">@lang($faq['question'])</h4>
                    <p class="bg-neutral-700 p-4">@lang($faq['answer'])</p>
                    <h4 class="bg-neutral-800 p-4">@lang($faq['pergunta'])</h4>
                    <p class="bg-neutral-700 p-4 rounded-b-xl">@lang($faq['resposta'])</p>
                    <form class="absolute h-full flex items-center top-0 right-0 px-6 py-2" action="{{route('dashboard.faq.delete')}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$faq['id']}}">
                        <button type="submit" class="px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    
    </div>

@endsection
