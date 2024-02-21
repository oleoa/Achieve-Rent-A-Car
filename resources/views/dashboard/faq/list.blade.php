@extends('layouts.dashboard')
@section('main')

    <div class="p-4 space-y-4">

        <!-- Title -->
        <div class="flex xl:flex-row flex-col justify-between gap-4">

            <!-- Title And Language -->
            <div class="flex xl:flex-row flex-col gap-4">

                <!-- Title -->
                <h1 class="text-white">FAQ</h1>

                <!-- Language -->
                <a class="px-4 py-2 {{$language == 'en' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.faq.list', array('language' => 'en'))}}">English</a>
                <a class="px-4 py-2 {{$language == 'pt' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.faq.list', array('language' => 'pt'))}}">Portuguese</a>

            </div>

            <!-- Add FAQ Button -->
            <a href="{{route('dashboard.faq.add')}}" class="px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:text-white hover:bg-green-500">Add</a>

        </div>
        
        <!-- FAQ's -->
        <div class="flex flex-col space-y-4">

            @foreach ($faqs as $f)

                <!-- FAQ -->
                <div class="faq flex flex-col gap-1">

                    <!-- Question Box -->
                    <div id="question_box" class="cursor-pointer select-none w-full bg-flagBlue p-4 rounded-lg shadow flex items-center justify-between relative">

                        <!-- Question -->
                        <span class="xl:text-lg xl:pr-0 pr-20 font-semibold">@lang($language=='en'?$f['question']:$f['pergunta'])</span>

                        <!-- Delete Button -->
                        <form class="absolute h-full flex items-center top-0 right-0 px-2 py-2" action="{{route('dashboard.faq.delete')}}" method="post">
                            @csrf @method('delete')

                            <!-- ID -->
                            <input type="hidden" name="id" value="{{$f['id']}}">

                            <!-- Delete Button -->
                            <button type="submit" class="px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed">Delete</button>

                        </form>

                    </div>

                    <!-- Answer Box -->
                    <div class="bg-flagYellow p-4 rounded hidden">

                        <!-- Answer -->
                        <p class="text-black font-medium">@lang($language=='en'?$f['answer']:$f['resposta'])</p>
                        
                    </div>

                </div>

            @endforeach

        </div>
    
    </div>

@endsection
