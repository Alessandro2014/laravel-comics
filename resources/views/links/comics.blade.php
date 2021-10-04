@extends('layouts.main');

@section('title', 'Comics')



@section('content')
    <section class="series">
        <!-- CONTENITORE CARDS -->
        <div class="container">
            <div class="current-series">
                {{-- STAMPA SINGOLA CARD CON CICLO FOREACH --}}
                @foreach ($comics as $comic)
                    <div class="card">
                        <a href="{{ url('comic') }}">
                            <img src={{ $comic['thumb'] }} :alt="{{ $comic['series'] }}">
                        </a>
                        <figcaption>{{ $comic['series'] }}</figcaption>
                    </div>
                @endforeach
            </div>
            <h3 class="button">load moore</h3>
        </div>

    </section>
@endsection
