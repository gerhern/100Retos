<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>day8</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container flex flex-col">
            <main class="mx-auto border border-black p-5 w-9/12" >
                <h2 class="text-center font-bold text-6xl mb-6">Reto 8</h2>
                <h2 class="text-center font-bold text-5xl mb-6">Volumen de un Cilindro</h2>
                <form class="flex flex-col text-2xl px-4 mb-6" method="get" action="">
                  @csrf
                    <div class="flex justify-evenly my-6">
                      <label for="base">Radio</label>
                      <input type="number" class="border-b-2 rounded-br-lg w-9/12 px-4 border-black" id="radius" step="0.1" name="radius">
                    </div>

                    <div class="flex justify-evenly my-6">
                      <label for="height" class="">Altura</label>
                      <input type="number" class="border-b-2 rounded-br-lg w-9/12 px-4 border-black" id="height" step="0.1" name="height">
                    </div>

                    <input type="submit" value="Calcular" class="mx-auto px-6 py-2 bg-blue-500 text-white rounded-md max-w-max shadow-xl hover:bg-blue-700 font-bold">

                </form>

                  <h2 class="text-center text-2xl" id="result">{{ "$result " }}</h2>

                <x-return-button />
            </main>

        </div>
    </body>
</html>
