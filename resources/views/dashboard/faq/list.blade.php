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
                        <button type="submit" id="faq-{{$f['id']}}" class="px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed delete">Delete</button>

                    </div>

                    <!-- Alert component -->
                    <div class="hidden" id="delete-warning-faq-{{$f['id']}}">

                        <!-- Alert -->
                        <div class="fixed top-0 left-0 w-screen h-screen bg-neutral-900/75 z-50 grid grid-cols-3 p-16 grid-rows-3">

                            <!-- Holder -->
                            <div></div>
                            
                            <!-- Alert -->
                            <div class="bg-flagYellow text-black font-medium text-center p-4 rounded-xl flex flex-col justify-between gap-4">

                                <!-- Title -->
                                <h1>Warning</h1>

                                <!-- Message -->
                                <h2>Do you really wanna delete it?</h2>

                                <!-- Buttons -->
                                <div class="h-full flex gap-4 justify-center items-start pt-4">

                                    <button id="faq-{{$f['id']}}" class="cancel text-3xl px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:text-white hover:bg-green-500">No</button>

                                    <!-- Delete form -->
                                    <form action="{{route('dashboard.faq.delete')}}" method="post">
                                        @csrf @method('delete')
                                        
                                        <!-- Hidden input with the discount id -->
                                        <input type="hidden" name="id" value="{{$f['id']}}">
                                        
                                        <!-- Delete button -->
                                        <button class="load text-3xl px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed">Yes</button>
                                        
                                    </form>

                                </div>

                            </div>

                            <!-- Holder -->
                            <div></div>

                        </div>

                    </div>

                    <!-- Answer Box -->
                    <div class="bg-flagYellow p-4 rounded hidden answer">

                        <!-- Answer -->
                        <p class="text-black font-medium">@lang($language=='en'?$f['answer']:$f['resposta'])</p>
                        
                    </div>

                </div>

            @endforeach

        </div>
    
    </div>

@endsection
