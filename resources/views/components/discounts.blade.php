@if($discount)
  <div class="text-sm xl:text-xl w-full min-h-navbar py-4 xl:px-margin px-4 flex justify-center items-center" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}};">
    <p class="w-full h-full text-center xl:block hidden">
      @if ($locale=='en')
        @lang($discount['text'])
      @elseif ($locale=='pt')
        @lang($discount['texto'])
      @endif
    </p>
    <p class="w-full h-full text-center xl:hidden block">
      @if ($locale=='en')
        @lang($discount['text_mobile'])
      @elseif ($locale=='pt')
        @lang($discount['texto_mobile'])
      @endif
    </p>
  </div>
@endif
