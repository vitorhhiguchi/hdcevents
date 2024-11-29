<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{-- Fonte do Google--}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- Css do Bootstrap --}}
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-pzjw8f+ua7Kw1TIq8TV56Wj6JtZyI8yXKAwwcPwnVf0nk7qStn6N9Ydz1mG8TiF"
        crossorigin="anonymous">

        <script src="//unpkg.com/alpinejs" defer></script>
        {{-- Css da Aplicação --}}
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2024</p>
        </footer>
    </body>
</html>
