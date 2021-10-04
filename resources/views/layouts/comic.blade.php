@extends('layouts.main');

@section('title', 'Home')
{{-- SINGOLO FUMETTO --}}
@section('content')
<section id="comics">
    <div class="container">
        <div class="row">
            <div class="prova my-3">
                <h2>{{ $comic['title'] }}</h2>
                <div class="price">{{ $comic['price'] }}</div>
                <p>{{ $comic['description'] }}</p>
            </div>

            <figure>
                <img src={{ $comic['thumb'] }} alt="{{ $comic['series'] }}">
            </figure>
        </div>
    </div>
</section>
    
@endsection
