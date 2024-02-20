@extends('layouts.dashboard')
@section('main')

    <div class="p-4 space-y-4">

        <!-- Title -->
        <h1 class="text-white">FAQ</h1>
        
        <!-- FAQ's -->
        <div class="flex flex-col space-y-4">
            @foreach ($faqs as $faq)
                <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4 pr-28">
                <h4>@lang($faq['question'])</h4>
                <p>@lang($faq['answer'])</p>
                <h4>@lang($faq['pergunta'])</h4>
                <p>@lang($faq['resposta'])</p>
                <form class="absolute h-full flex items-center top-0 right-0 px-6 py-2" action="{{route('dashboard.faq.delete')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{$faq['id']}}">
                    <button type="submit" class=" px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed">Delete</button>
                </form>
                </div>
            @endforeach
        </div>
    
    </div>

@endsection
