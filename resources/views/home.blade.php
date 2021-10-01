<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Home</title>
</head>

<body>
    {{-- <header class="container">
        <div class="row">
            <figure>
                <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
            </figure>
            <!-- STAMPA LINK DI NAVIGAZIONE -->
            <ul>
                <li>
                    <a href="#">Characters</a>
                </li>
                <li>
                    <a href="#">Comics</a>
                </li>
                <li>
                    <a href="#">Movies</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>
                <li>
                    <a href="#">Games</a>
                </li>
                <li>
                    <a href="#">Collectibles</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Fans</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                </li>
            </ul>
        </div>
    </header> --}}
    @include('header')
    <section>
        <div class="jumbotron">
            <h3 class="placeholder">current series</h3>
        </div>
    </section>
    <section class="series">
        <!-- CONTENITORE CARDS -->
        <div class="current-series container">
            <div class="cards">
                @foreach ($comics as $comic)
                    <img src={{ $comic['thumb'] }} :alt="{{ $comic['series'] }}">
                    <figcaption>{{ $comic['series'] }}</figcaption>
                @endforeach
            </div>
        </div>
        <h3 class="button">load moore</h3>

    </section>        
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
