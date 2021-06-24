<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dia 10</title>

</head>

<body>
    <div class="container flex flex-col items-center">
        <div class=" w-2/3">
            <h2 class="text-center my-6 font-bold text-6xl">Reto 10</h2>
            <h2 class="text-center my-6 font-bold text-5xl">Pig Latin</h2>
        </div>
        <form class="flex flex-col text-2xl px-4 mb-6 w-2/3">
            @csrf
            <div class="flex justify-evenly my-6">
              <label for="text">Traductor</label>
              <textarea name="text" id="text" cols="30" rows="10" class="border-2 rounded-br-lg w-9/12 px-4 border-black"></textarea>
            </div>

            <input type="submit" value="Comenzar" class="mx-auto px-6 py-2 bg-blue-500 text-white rounded-md max-w-max shadow-xl hover:bg-blue-700 font-bold">
        </form>

        <p class="text-center text-4xl my-6" id="result">{{ $text }}</p>
        
        <x-return-button />
    </div>
</body>

</html>
