<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC | @yield('title')</title>
</head>

<body>
    {{-- INCLUDO HEADER E PASSO ARRAY ASSOCIATIVO TRAMITE FILE MENU --}}
    @include('header', ['links' => config('menu')])

    <section>
        <div class="jumbotron">
            <h3 class="placeholder">current series</h3>
        </div>
    </section>
    {{-- INCLUDO MAIN CHE CAMBIA PER OGNI LINK DEL MENU --}}
    @yield('content')
    {{-- INCLUDO FOOTER --}}
    @include('footer')

</body>

</html>
