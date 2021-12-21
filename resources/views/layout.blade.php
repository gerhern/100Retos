<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Retos de programación</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-light-blue">

    @yield('content')

</body>

</html>
