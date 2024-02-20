<!-- Laravel default errors messages -->
@if ($errors->any())
    <p class="text-red-500">
        @foreach ($errors->all() as $error)
            @lang($error)<br>
        @endforeach
    </p>
@endif
