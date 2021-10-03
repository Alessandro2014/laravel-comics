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
    @include('header')

    <section>
        <div class="jumbotron">
            <h3 class="placeholder">current series</h3>
        </div>
    </section>

    @yield('content')

    @include('footer')

</body>

</html>