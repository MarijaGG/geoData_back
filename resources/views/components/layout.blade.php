<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'GeoData' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: sans-serif; margin: 0; }
        .container { width: 80%; margin: 2rem auto; }
        nav a { margin-right: 1rem; text-decoration: none; }
    </style>
</head>
<body>
    <x-navigation />

    <div class="container">
        @if (session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif

        {{ $slot }}
    </div>
</body>
</html>
