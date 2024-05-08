@extends('layout')
@php $title = 'title.faq'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/faq/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h2 class="text-white text-center font-black hidden md:block text-4xl">@lang('faq.banner.subtitle')</h2>
    <h1 class="text-white text-center font-black text-6xl">@lang('faq.banner.title')</h1>
  </div>

  <div class="flex flex-col justify-center items-center py-8 xl:px-64 px-4 gap-8">

    <h2 class="md:text-5xl">@lang('faq.title')</h2>

    <div class="w-4/5 xl:w-1/3">
      <x-separator/>
    </div>

    <p class="text-lg text-center">
      @lang('faq.paragraph.1')
      <br>
      @lang('faq.paragraph.2')
    </p>

  </div>

    <!-- Questions -->
    <div class="px-default text-white flex flex-col gap-2 pb-4">

      @foreach ($faq as $f)

        <!-- FAQ -->
        <div class="faq flex flex-col gap-1">

          <!-- Question -->
          <div id="question_box" class="select-none cursor-pointer w-full bg-red/70 p-4 rounded-lg shadow flex items-center justify-between">
            <span class="text-lg font-semibold">@lang($locale=='en'?$f['question']:$f['pergunta'])</span>
            <span class="">+</span>
          </div>

          <!-- Answer -->
          <div class="bg-yellow/70 p-4 rounded hidden answer">
            <p class="text-black font-medium">@lang($locale=='en'?$f['answer']:$f['resposta'])</p>
          </div>

        </div>

      @endforeach

    </div>

@endsection
