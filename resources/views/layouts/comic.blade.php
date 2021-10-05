@extends('layouts.main');

@section('title', 'Home')
{{-- SINGOLO FUMETTO --}}
@section('content')
    <section id="comics">
        <div class="container">
            <div class="row">
                <div class="col-7 section-price">
                    <h2 class="my-1">
                        {{ $comic['title'] }}
                    </h2>
                    <div class="price">
                        <div class="border-gray">U.S. Price: {{ $comic['price'] }}
                            <span>
                                AVAILABLE
                            </span>
                        </div>
                        <span class="border-gray">
                            Check Availability
                        </span>
                    </div>
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>
                <figure class="col-5">
                    <img src={{ $comic['thumb'] }} alt="{{ $comic['series'] }}">
                </figure>
            </div>
        </div>
    </section>

@endsection
