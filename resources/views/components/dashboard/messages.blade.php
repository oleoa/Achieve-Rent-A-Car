<!-- Laravel default errors messages -->
@if ($errors->any())
  <div class="text-red-500">
    @foreach ($errors->all() as $error)
      @lang($error)
    @endforeach
  </div>
@endif

<!-- Messages -->
@if(session('error') || session('success'))
  @if(session('error'))
    <div class="text-red-500">
      @lang(session('error'))
    </div>
  @elseif(session('success'))
    <div class="text-green-500">
      @lang(session('success'))
    </div>
  @endif
@endif
