@if ($reviews)

    <span class="hidden" id="home-page"></span>

    <!-- Reviews Computer -->
    <div class="relative z-10 w-full overflow-x-hidden xl:block hidden">
    
    <!-- Carousel Slide -->
    <div id="carousel-slide-reviews" class="grid transition-transform duration-500 w-full px-4 pb-8" style="grid-template-columns: @for($i = 1; $i <= count($reviews); $i++) calc(100%/3) @endfor">
        
        @foreach ($reviews as $review)
        
        <!-- Carousel Item -->
        <div class="reviews-item w-full p-4" id="{{$review['order']}}-reviews" style="order: {{$review['order']}};">
    
            <div class="flex flex-col justify-start items-center h-full p-6 gap-4 rounded-lg bg-white">

            <div class="flex w-full gap-8 items-center">
                
                <img src="{{$review['image']}}" alt="Valentina Vucicic" class="h-20 w-20">
                
                <div class="flex flex-col">

                <h2 class="font-bold">{{$review['name']}}</h2>
                
                <a href="{{$review['url']}}" target="_blank" class="w-fit">
                    <img src="{{asset('/img/pages/home/reviews.webp')}}" alt="Google Reviews" height="64" width="114" class="object-cover">
                </a>

                </div>

            </div>

            <p class="font-semibold text-start w-full">

                @if ($language == 'pt')

                {{$review['comentario']}}  

                @elseif ($language == 'en')

                {{$review['comment']}}

                @endif

            </p>
    
            </div>
    
        </div>
        
        @endforeach
    
    </div>
    
    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 md:z-auto z-40" id="carousel-indicators-div-reviews">
    
        <input type="hidden" id="carousel-selected-indicator-color-reviews" value="bg-white">
    
        @for ($i = 0; $i <= count($reviews)-1; $i++)
        
        <div class="w-4 h-4 rounded-full cursor-pointer border-2 border-white" id="carousel-{{$i}}-indicator-reviews"></div>
    
        @endfor
    
    </div>
        
    </div>
    
    <!-- Reviews Mobile -->
    <div class="relative z-10 w-full overflow-x-hidden xl:hidden bg-red">
    
    <!-- Carousel Slide -->
    <div id="carousel-slide-reviews-mobile" class="grid transition-transform duration-500 w-full xl:py-8 pb-8" style="grid-template-columns: @for($i = 1; $i <= count($reviews); $i++) 100% @endfor">
    
        @foreach ($reviews as $review)
            
        <!-- Carousel Item -->
        <div class="reviews-mobile-item w-full p-4" id="{{$review['order']}}-reviews-mobile" style="order: {{$review['order']}};">
    
            <div class="flex flex-col justify-start items-center h-full p-6 gap-4 rounded-md bg-white">
    
            <img src="{{$review['image']}}" alt="Valentina Vucicic" height="80" width="80" class="h-20 w-20">
    
            <h2 class="font-bold">{{$review['name']}}</h2>

            <a href="{{$review['url']}}" target="_blank" class="w-fit">
                <img src="{{asset('/img/pages/home/reviews.webp')}}" alt="Google Reviews" height="64" width="114" class="object-cover">
            </a>
            
            <p>
                @if ($language == 'pt')
                {{$review['comentario']}}  
                @elseif ($language == 'en')
                {{$review['comment']}}
                @endif
            </p>
    
            </div>
    
        </div>
        
        @endforeach
    
    </div>
    
    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full py-2 xl:hidden flex justify-between items-center gap-2 px-4 z-40" id="carousel-indicators-div-reviews-mobile">
    
        <input type="hidden" id="carousel-selected-indicator-color-reviews-mobile" value="bg-white">

        <!-- Previous Button -->
        <button title="@lang('home.reviews.previous.title')" class="cursor-pointer w-8 h-8 bg-white text-black rounded-full flex items-center justify-center" id="prevBtn-reviews-mobile">
        <i class="fas fa-arrow-left text-lg"></i>
        </button>

        <div class="flex gap-2 items-center">

        @for ($i = 0; $i <= count($reviews)-1; $i++)
        
            <div class="w-4 h-4 rounded-full cursor-pointer border-2 border-white" id="carousel-{{$i}}-indicator-reviews-mobile"></div>
    
        @endfor

        </div>
    
        <!-- Next Button -->
        <button title="@lang('home.reviews.next.title')" class="cursor-pointer w-8 h-8 bg-white text-black rounded-full flex items-center justify-center" id="nextBtn-reviews-mobile">
        <i class="fas fa-arrow-right text-lg"></i>
        </button>
    
    </div>
        
    </div>

@endif
