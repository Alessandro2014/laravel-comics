@extends('layouts.main');

@section('title', 'Home')

@section('content')
    <section class="series">
        <!-- CONTENITORE CARDS -->
        <div class="container">
            <div class="current-series">
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src={{ $comic['thumb'] }} :alt="{{ $comic['series'] }}">
                        <figcaption>{{ $comic['series'] }}</figcaption>
                    </div>
                @endforeach
            </div>
            <h3 class="button">load moore</h3>
        </div>

    </section>
@endsection
