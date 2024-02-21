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
            <div class="relative rounded shadow flex flex-row justify-between" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}}">
            <div class="flex flex-col">
                <p class="p-4">@lang($discount['text'])</p>
                <p class="p-4">@lang($discount['texto'])</p>
            </div>
            <div class="bg-zinc-700 rounded-r-sm flex flex-col gap-4 items-center px-6 py-4 w-32">
                @if($discount['active'])
                    <a href="{{route('dashboard.discount.disable', ['id' => $discount['id']])}}" class=" px-4 py-2 border-2 border-orange-500 text-orange-500 hover:text-white hover:bg-orange-500 rounded-lg">Disable</a>
                @else
                <a href="{{route('dashboard.discount.enable', ['id' => $discount['id']])}}" class=" px-4 py-2 border-2 border-green-500 text-green-500 hover:text-white hover:bg-green-500 rounded-lg">Enable</a>
                @endif
                <form action="{{route('dashboard.discount.delete')}}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="id" value="{{$discount['id']}}">
                <button type="submit" class=" px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed">Delete</button>
                </form>
            </div>
            </div>
        @endforeach
        </div>
        
    </div>

@endsection
