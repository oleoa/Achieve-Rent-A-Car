@extends('layout')
@section('main')

  <div class="py-4 space-y-4">

    <!-- Title -->
    <h1 class="text-white">@lang('Discounts')</h1>

    <!-- Messages -->
    <x-messages/>
    
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
              <a href="{{route('discount.disable', ['id' => $discount['id']])}}" class="loaderActivator px-4 py-2 border-2 border-orange-500 text-orange-500 hover:text-white hover:bg-orange-500 rounded-lg">Disable</a>
            @else
              <a href="{{route('discount.enable', ['id' => $discount['id']])}}" class="loaderActivator px-4 py-2 border-2 border-green-500 text-green-500 hover:text-white hover:bg-green-500 rounded-lg">Enable</a>
            @endif
            <form action="{{route('discount.delete')}}" method="post">
              @csrf
              @method('delete')
              <input type="hidden" name="id" value="{{$discount['id']}}">
              <button type="submit" class="loaderActivator px-4 py-2 border-2 border-flagRed text-flagRed rounded-lg hover:text-white hover:bg-flagRed">Delete</button>
            </form>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Add Discount -->
    <div class="p-4 bg-zinc-700 relative rounded shadow flex flex-col gap-4">
      <h4>@lang('Add Discount')</h4>
      <form action="{{route('discount.add')}}" method="POST" class="flex flex-col gap-4">
        @csrf
        <textarea name="text" placeholder="@lang('Text in english')" class="p-4 bg-zinc-600 rounded shadow"></textarea>
        <textarea name="texto" placeholder="@lang('Texto em português')" class="p-4 bg-zinc-600 rounded shadow"></textarea>
        <div class="p-4 bg-zinc-600 rounded shadow flex flex-col items-center gap-4">
          <div class="flex flex-row justify-between w-full">
            <label class="text-start w-full" for="color">@lang('Color')</label>
            <div class="w-full flex justify-end gap-4">
              <button id="setColorWhite" class="rounded px-2 py-1 bg-white w-10 h-10"></button>
              <button id="setColorBlue" class="rounded px-2 py-1 bg-flagBlue w-10 h-10"></button>
              <button id="setColorYellow" class="rounded px-2 py-1 bg-flagYellow w-10 h-10"></button>
              <button id="setColorRed" class="rounded px-2 py-1 bg-flagRed w-10 h-10"></button>
            </div>
          </div>
          <input type="color" name="color" id="color" class="px-2 py-1 bg-zinc-500 rounded shadow w-full">
        </div>
        <div class="p-4 bg-zinc-600 rounded shadow flex flex-col items-center gap-4">
          <div class="flex flex-row justify-between w-full">
            <label class="text-start w-full" for="text_color">@lang('Text Color')</label>
            <div class="w-full flex justify-end gap-4">
              <button id="setTextColorWhite" class="rounded px-2 py-1 bg-white w-10 h-10"></button>
              <button id="setTextColorBlue" class="rounded px-2 py-1 bg-flagBlue w-10 h-10"></button>
              <button id="setTextColorYellow" class="rounded px-2 py-1 bg-flagYellow w-10 h-10"></button>
              <button id="setTextColorRed" class="rounded px-2 py-1 bg-flagRed w-10 h-10"></button>
            </div>
          </div>
          <input type="color" name="text_color" id="text_color" class="px-2 py-1 bg-zinc-500 rounded shadow w-full">
        </div>
        <button type="submit" class="loaderActivator px-4 py-2 border-2 border-zinc-600 text-white rounded-lg hover:bg-zinc-600">@lang('Add')</button>
      </form>
    </div>

    <!-- Messages -->
    <x-messages/>
    
  </div>

@endsection
