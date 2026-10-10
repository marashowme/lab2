<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Магазин комп\'ютерної техніки')</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        nav a { margin-right: 15px; }
        .error { color: red; font-size: 0.9em; }
        .success { color: green; }
    </style>
</head>
<body>
<nav>
    <a href="{{ route('site.about') }}">Про застосунок</a>
    <a href="{{ route('site.contact') }}">Контакти</a>
    <a href="{{ route('store.landing') }}">Лендінг / Консультація ПК</a>
</nav>
<hr>
<main>
    @yield('content')
</main>
<hr>
<footer>
    <p>&copy; 2026 Магазин комп'ютерної техніки</p>
</footer>
</body>
</html>
