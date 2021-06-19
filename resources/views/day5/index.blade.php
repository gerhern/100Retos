<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Dia5</title>

    </head>
    <body>
        <div class="container flex flex-col">
            <main class="mx-auto border border-black p-5 w-9/12" >
                <h2 class="text-center font-bold text-6xl mb-6">Reto 5</h2>
                <form class="flex flex-col text-2xl px-4 mb-6">
                    @csrf
                    <div class="flex justify-evenly my-6">
                      <label for="text">Parrafo</label>
                      <textarea name="text" id="text" cols="30" rows="10" class="border-2 rounded-br-lg w-9/12 px-4 border-black"></textarea>
                    </div>

                    <input type="submit" value="Comenzar" class="mx-auto px-6 py-2 bg-blue-500 text-white rounded-md max-w-max shadow-xl hover:bg-blue-700 font-bold">
                </form>

                <p class="text-center text-2xl" id="result">{{ $text }}</p>
                
                <x-return-button />
            </main>

        </div>
    </body>
</html>
