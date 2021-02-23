<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <nav class="navbar">
            <a href="{{ route('home')}}">Home</a>
            <a href="{{ route('articles.index')}}">Article</a>
            <a href="">Contact</a>
            <a href="">Contact</a>
        </nav>
        <main>
            @yield('main')
        </main>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
