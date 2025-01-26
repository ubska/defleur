<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Defleur</title>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="#catalog">Каталог</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Defleur</p>
    </footer>
</body>

</html>
