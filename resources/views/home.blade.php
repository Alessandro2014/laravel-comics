@extends('layouts.main');

@section('title', 'Home')
{{-- MESSAGGIO DI BENVENUTO ALLA HOME --}}
@section('content')
    <div class="container">
        <h1 class=" my-3">
            Welcome to DC
        </h1>
    </div>

    {{-- <div class="container">
        <div id="comics" class="row">
            <div class="prova my-3">
                <div>
                    <h2>action comics #1000: the deluxe edition</h2>
                    <div>u.s. price $19.90</div>
                </div>

                <div></div>
            </div>
            <figure>
                <img src="{{ asset('images/adv.jpg') }}" alt="dc-adv">
            </figure>
        </div>

    </div> --}}
@endsection
