<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asssets/css/style.css') }}">
    {{-- Sección de espera para llamar en cualquier vista, por ejemplo sino que solo en services preciso un estilo, lo llamo desde ahí como una sección --}}
    @yield('styles')
    <title>
        @yield('title')
    </title>
</head>

<body>
    @include('layouts._partials.menu')
    <main class="card">
    @yield('content')
    {{-- Mismo caso que el styles para cualquier script --}}
    @yield('scripts')
</main>
</body>

</html>
