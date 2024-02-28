<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-core="elegant" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Tanahku') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css'])

    <link href="https://cdn.jsdelivr.net/npm/halfmoon@2.0.1/css/cores/halfmoon.cores.css" rel="stylesheet" integrity="sha256-MAzAVJMU/ze52ZHcA8CeqRrCOVndMZlHwNeS2c73vP4=" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@2.0.1/css/halfmoon.min.css" rel="stylesheet" integrity="sha256-SsJizWSIG9JT9Qxbiy8xnYJfjCAkhEQ0hihxRn7jt2M=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ config('app.url') }}/favicon.png" type="image/x-icon">

</head>

<body class="ps-md-sbwidth">

    <x-app.sidebar />
    {{ $slot }}
</body>

</html>
