@if($discount)
    <div class="text-sm xl:text-xl w-full min-h-navbar py-4 xl:px-margin px-4" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}};">
        <p>
            @if ($locale=='en')
                {{$discount['text']}}
            @elseif ($locale=='pt')
                {{$discount['texto']}}
            @endif
        </p>
    </div>
@endif
