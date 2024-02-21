<!-- Laravel default errors messages -->
@if ($errors->any())
    <p class="text-red-500">
        @foreach ($errors->all() as $error)
            @lang($error)<br>
        @endforeach
    </p>
@endif

<!-- Messages -->
@if(session('error') || session('success') || session('info'))
    @if(session('error'))
        <div class="text-red-500">
            @lang(session('error'))
        </div>
    @elseif(session('success'))
        <div class="text-green-500">
            @lang(session('success'))
        </div>
    @elseif(session('info'))
        <div class="text-blue-500">
            @lang(session('info'))
        </div>
    @endif
@endif
