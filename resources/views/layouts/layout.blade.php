<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex - Proyek Alpiii</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white antialiased">

    <nav class="bg-gray-800 shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <a href="{{ route('pokemon.index') }}" class="text-2xl font-bold text-yellow-400">
                Pokedex
            </a>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-6">
        @yield('content')
    </main>

</body>
</html>
