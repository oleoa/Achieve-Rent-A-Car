@if($discount)
  <div class="text-sm xl:text-xl w-full min-h-navbar py-4 xl:px-margin px-4 flex justify-center items-center" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}};">
    <p class="w-full h-full text-center">
      @if ($locale=='en')
        {{$discount['text']}}
      @elseif ($locale=='pt')
        {{$discount['texto']}}
      @endif
    </p>
  </div>
@endif
