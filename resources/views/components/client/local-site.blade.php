@if($locale == 'local')
    <div class="text-xl w-full py-4 xl:px-margin px-4 bg-flagYellow text-black">
        <p>
            Você está no site local. <a href="{{ route('home', 'en') }}" class="underline">Clique aqui</a> para ir para o site internacional.
        </p>
    </div>
@endif
