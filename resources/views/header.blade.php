<header class="container">
    <div class="row">
        <figure>
            {{-- logo  con link per reindirizzare alla home --}}
            <a href="{{ url('/') }}"><img src="{{ asset('images/dc-logo.png') }}" alt="logo"></a>
        </figure>
        <!-- STAMPA LINK DI NAVIGAZIONE -->
        <ul>
            @foreach ($links as $link)
                <li> 
                    {{-- aggiunta classe active --}}
                    <a class="{{ request()->routeIs($link['route']) ? 'active' : ''}}"
                    href="{{ route($link['route']) }}">{{ $link['title'] }}</a>
                </li>
            @endforeach

        </ul>
    </div>
</header>
