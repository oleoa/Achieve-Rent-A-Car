@extends('layout')
@section('main')

  <main>

    <!-- Image -->
    <div style="background-image: url('/img/faq.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
      <h2 class="text-white text-center font-bold hidden xl:block text-4xl">@lang('Frequently Asked Question')</h2>
      <h1 class="text-white text-center font-bold text-6xl">@lang('FAQ')</h1>
    </div>

    <!-- Help -->
    <div class="flex flex-col justify-center items-center py-8 xl:px-margin px-4 gap-8">
      <h1 class="xl:text-5xl">@lang('Let us help you')</h1>
      <div class="h-1 w-4/5 xl:w-1/3 grid grid-cols-3">
        <span class="h-full w-full bg-flagBlue rounded-l-lg"></span>
        <div class="w-full h-full bg-flagYellow flex items-center justify-center">
          <span class="h-full w-2 bg-flagRed"></span>
        </div>
        <span class="h-full w-full bg-flagBlue rounded-r-lg"></span>
      </div>
      <p class="text-lg text-center">
        @lang('Here you will find helpful information about our booking process and can learn more about the details you may need to complete your reservation.')
        <br>
        @lang('Feel free to reach out to us or use the WhatsApp button if you have any other questions.')
      </p>
    </div>

    <!-- Questions -->
    <div class="xl:px-margin px-4 text-white flex flex-col gap-2">

      @foreach ($faq as $f)
        <div class="faq flex flex-col gap-1">

          <button class="w-full bg-flagBlue p-4 rounded-lg shadow flex items-center justify-between">
            <span class="text-lg font-semibold">@lang($f['question'])</span>
            <span class="">+</span>
          </button>

          <div class="bg-flagYellow p-4 rounded hidden">
            <p class="text-black">@lang($f['answer'])</p>
          </div>
          
        </div>
      @endforeach

    </div>

  </main>

@endsection
