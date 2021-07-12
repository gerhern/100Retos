<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dia 13</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container flex flex-col">
        <main class="mx-auto border border-black p-5 w-9/12">
            <h2 class="text-center font-bold text-6xl mb-6">Reto 13</h2>
            <h2 class="text-center font-bold text-5xl mb-6">Calculadora de Propinas</h2>
            <h2 class="text-center text-2xl" id="result">La cuenta es de $1200, la propina recomendada es de $120</h2>
            <div class="flex flex-col text-2xl px-4 mb-6">
                <div class="flex justify-evenly my-6" id="dish0">
                    <label for="dish">Platillo</label>
                    <input type="number" class="border-2 rounded-lg px-4 border-black" id="dish">
                </div>

                <button
                    class="my-4 px-6 py-2 bg-green-500 text-white rounded-md max-w-max shadow-xl hover:bg-green-700 font-bold"
                    onclick="addDish()">Agregar Platillo</button>

                <button
                    class="mx-auto px-6 py-2 bg-blue-500 text-white rounded-md max-w-max shadow-xl hover:bg-blue-700 font-bold">Calcular</button>

            </div>

            <x-return-button />
        </main>

    </div>
</body>
<script src="{{ asset('js/tipCalculator.js') }}"></script>

</html>
