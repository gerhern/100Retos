<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dia 3</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container flex flex-col">
            <main class="mx-auto border border-black p-5 w-9/12" >
                <h2 class="text-center font-bold text-6xl mb-6">Reto 3</h2>
                <h2 class="text-center font-bold text-5xl mb-6">Reloj</h2>
                <form class="flex flex-col text-2xl px-4 mb-6">
                    <div class="flex justify-evenly my-6">
                      <label for="base">Horas</label>
                      <input type="number" class="border-b-2 rounded-br-lg w-9/12 px-4 border-black" id="hours" step="0.01" name="hours">
                    </div>

                    <div class="flex justify-evenly my-6">
                      <label for="height" class="">Minutos</label>
                      <input type="number" class="border-b-2 rounded-br-lg w-9/12 px-4 border-black" id="minutes" step="0.01" name="minutes">
                    </div>

                    <button type="button" class="mx-auto px-6 py-2 bg-blue-500 text-white rounded-md max-w-max shadow-xl hover:bg-blue-700 font-bold" onclick="calculate()">Calcular</button>
                </form>

                  <h2 class="text-center text-2xl" id="result"></h2>

                <x-return-button />
            </main>

        </div>
    </body>
    <script src="{{ asset('js/clock.js') }}"></script>
</html>
