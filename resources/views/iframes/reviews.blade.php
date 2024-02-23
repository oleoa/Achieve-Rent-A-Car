@extends('layouts.iframe')
@section('main')

    <!-- Carousel Div For Carsousel And Buttons -->
    <div class="relative z-10 w-full overflow-hidden">

        <!-- Carousel Slide -->
        <div id="carousel-slide" class="grid transition-transform duration-500 h-full bg-black" style="grid-template-columns: @for($i = 1; $i <= 3; $i++) 100% @endfor">
        
            <!-- Carousel Item -->
            <div class="w-full bg-red-500 px-32 py-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, maiores repellat quis velit unde aliquam, dicta ab praesentium laborum labore voluptates. Iusto adipisci labore tenetur laborum atque laboriosam hic dolore!</p>
                <p>Author</p>
            </div>
        
            <!-- Carousel Item -->
            <div class="w-full bg-blue-500 px-32 py-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, maiores repellat quis velit unde aliquam, dicta ab praesentium laborum labore voluptates. Iusto adipisci labore tenetur laborum atque laboriosam hic dolore!</p>
                <p>Author</p>
            </div>
        
            <!-- Carousel Item -->
            <div class="w-full bg-yellow-500 px-32 py-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, maiores repellat quis velit unde aliquam, dicta ab praesentium laborum labore voluptates. Iusto adipisci labore tenetur laborum atque laboriosam hic dolore!</p>
                <p>Author</p>
            </div>
        
        </div>
        
        <!-- Carousel Buttons -->
        <div class="absolute top-0 p-4 w-full h-full flex justify-between items-center">
        
            <!-- Previous Button -->
            <button class="bg-neutral-800 text-white px-4 py-2 cursor-pointer rounded" id="prevBtn">Previous</button>
        
            <!-- Next Button -->
            <button class="bg-neutral-800 text-white px-4 py-2 cursor-pointer rounded" id="nextBtn">Next</button>
        
        </div>
        
    </div>

@endsection