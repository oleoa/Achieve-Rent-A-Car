@extends('layouts.client')
@section('main')

    <!-- Banner -->
    <div style="background-image: url('/img/titles/faq-min.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
      <h2 class="text-white text-center font-black hidden xl:block text-4xl">@lang('FAQ-Banner-Subtitle')</h2>
      <h1 class="text-white text-center font-black text-6xl">@lang('FAQ-Banner-Title')</h1>
    </div>

    <!-- Help -->
    <div class="flex flex-col justify-center items-center py-8 xl:px-margin px-4 gap-8">
      <h2 class="xl:text-5xl">@lang('FAQ-Section.1-Title')</h2>
      <div class="w-4/5 xl:w-1/3">
        <x-separator/>
      </div>
      <p class="text-lg text-center">
        @lang('FAQ-Section.1-Paragraph.1')
        <br>
        @lang('FAQ-Section.1-Paragraph.2')
      </p>
    </div>

    <!-- Questions -->
    <div class="xl:px-margin px-4 text-white flex flex-col gap-2 pb-4">

      @foreach ($faq as $f)
        <div class="faq flex flex-col gap-1">

          <button class="w-full bg-flagBlue p-4 rounded-lg shadow flex items-center justify-between">
            <span class="text-lg font-semibold">@lang($locale=='en'?$f['question']:$f['pergunta'])</span>
            <span class="">+</span>
          </button>

          <div class="bg-flagYellow p-4 rounded hidden">
            <p class="text-black">@lang($locale=='en'?$f['answer']:$f['resposta'])</p>
          </div>
          
        </div>
      @endforeach

    </div>

@endsection
