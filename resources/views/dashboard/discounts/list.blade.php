@extends('layouts.dashboard')
@section('main')

    <div class="p-4 space-y-4">

        <!-- Title -->
        <div class="flex justify-between">
            <h1 class="text-white">@lang('Discounts')</h1>
            <a href="{{route('dashboard.discount.add')}}" class="px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:text-white hover:bg-green-500">Add</a>
        </div>
        
        <!-- Discounts -->
        <div class="flex flex-col space-y-4">

            @foreach ($discounts as $discount)

                <!-- Discount -->
                <div class="relative rounded shadow flex xl:flex-row flex-col justify-between" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}}">

                    <!-- Texts -->
                    <div class="flex flex-col">
                        <p class="p-4">@lang($discount['text'])</p>
                        <p class="p-4">@lang($discount['texto'])</p>
                    </div>

                    <!-- Actions -->
                    <div class="bg-zinc-700 rounded-r-sm flex xl:flex-col justify-center gap-4 items-center px-6 py-4 xl:w-32 w-full">

                        @if($discount['active'])

                            <!-- Disable button -->
                            <a href="{{route('dashboard.discount.disable', ['id' => $discount['id']])}}" class=" px-4 py-2 border-2 border-orange-500 text-orange-500 hover:text-white hover:bg-orange-500 rounded-lg">Disable</a>

                        @else

                            <!-- Enable button -->
                            <a href="{{route('dashboard.discount.enable', ['id' => $discount['id']])}}" class=" px-4 py-2 border-2 border-green-500 text-green-500 hover:text-white hover:bg-green-500 rounded-lg">Enable</a>

                        @endif

                        <form action="{{route('dashboard.discount.delete')}}" method="post">
                            @csrf @method('delete')

                            <!-- Hidden input with the discount id -->
                            <input type="hidden" name="id" value="{{$discount['id']}}">

                            <!-- Delete button -->
                            <button type="submit" class=" px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed">Delete</button>

                        </form>
                    </div>

                </div>

            @endforeach

        </div>
        
    </div>

@endsection
