<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Dia1</title>

    </head>
    <body>
        <div class="container flex flex-col items-center">
            <div class="">
                <h2 class="text-center my-6 font-bold text-6xl">Reto 1</h2>
                <h2 class="text-center my-6 font-bold text-6xl">Hola, Mundo</h2>
            </div>
            <x-return-button />
        </div>
    </body>
</html>
