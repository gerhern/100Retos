<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dia 11</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container flex flex-col">
            <main class="mx-auto border border-black p-5 w-9/12" >
                <h2 class="text-center font-bold text-6xl mb-6">Reto 11</h2>
                <h2 class="text-center font-bold text-5xl mb-6">Generador de Contraseñas</h2>
                <form class="flex flex-col text-2xl px-4 mb-6" method="GET" action="">
                  @csrf
                    <div class="flex my-6">
                      <label for="lenght">Numero de Caracteres</label>
                      <input type="number" class="border-b-2 rounded-br-lg w-9/12 px-4 border-black" id="lenght" name="lenght">
                    </div>

                    <div class="flex flex-row justify-start">
                      <label for="specialChars" class="w-1/4">Caracteres especiales</label>
                      <input type="checkbox" class="my-auto mx-12" id="specialChars" name="special" value="true">
                    </div>

                    <div class="flex flex-row justify-start">
                      <label for="upLowerChars" class="w-1/4">Mayusculas/Minusculas</label>
                      <input type="checkbox" class="my-auto mx-12" id="upLowerChars" name="upp" value="true">
                    </div>

                    <div class="flex flex-row justify-start">
                      <label for="numbers" class="w-1/4">Numeros</label>
                      <input type="checkbox" class="my-auto mx-12" id="numbers" name="numbers" value="true">
                    </div>

                    <button type="submit" class="mx-auto px-6 py-2 bg-blue-500 text-white rounded-md max-w-max shadow-xl hover:bg-blue-700 font-bold">Generar</button>
                </form>

                  <h2 class="text-center text-2xl">{{$result}}</h2>

                <x-return-button />
            </main>

        </div>
    </body>
</html>
