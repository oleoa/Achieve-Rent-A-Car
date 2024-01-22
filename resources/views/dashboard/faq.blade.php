@extends('layout')
@section('main')

  <div class="py-4 space-y-4">

    <!-- Title -->
    <h1 class="pb-4 text-white">@lang('FAQ')</h1>
    
    <!-- FAQ's -->
    <div class="flex flex-col space-y-4">
      @foreach ($faqs as $faq)
        <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4 pr-28">
          <h4>@lang($faq['question'])</h4>
          <p>@lang($faq['answer'])</p>
          <h4>@lang($faq['pergunta'])</h4>
          <p>@lang($faq['resposta'])</p>
          <form class="absolute h-full flex items-center top-0 right-0 px-6 py-2" action="{{route('faq.delete')}}" method="post">
            @csrf
            @method('delete')
            <input type="hidden" name="id" value="{{$faq['id']}}">
            <button type="submit" class="loaderActivator px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed">Delete</button>
          </form>
        </div>
      @endforeach
    </div>

    <!-- Add FAQ -->
    <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4">
      <h4>@lang('Add FAQ')</h4>
      <form action="{{route('faq.add')}}" method="POST" class="flex flex-col gap-4">
        @csrf
        <input type="text" name="question" placeholder="@lang('Question in english')" class="p-4 bg-zinc-600 rounded shadow">
        <textarea name="answer" placeholder="@lang('Answer in english')" class="p-4 bg-zinc-600 rounded shadow"></textarea>
        <input type="text" name="pergunta" placeholder="@lang('Pergunta em português')" class="p-4 bg-zinc-600 rounded shadow">
        <textarea name="resposta" placeholder="@lang('Resposta em português')" class="p-4 bg-zinc-600 rounded shadow"></textarea>
        <button type="submit" class="loaderActivator px-4 py-2 border-2 border-zinc-600 text-white rounded-lg hover:bg-zinc-600">@lang('Add')</button>
      </form>
    </div>

    <!-- Messages -->
    <x-messages/>
    
  </div>

@endsection
