<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dia 9</title>

</head>

<body>
    <div class="container flex flex-col items-center">
        <div class=" w-2/3">
            <h2 class="text-center my-6 font-bold text-6xl">Reto 9</h2>
            <h2 class="text-center my-6 font-bold text-5xl">Numero Secreto</h2>
        </div>
        <div class="w-2/3 flex justify-evenly flex-wrap text-4xl mb-6">
            @for ($i = 0; $i <= 20; $i++)
                <button class="bg-blue-300 w-1/6 m-6 h-full border-2 border-black rounded-full outline-white"
                id="{{  $i  }}"
                 onclick="selectNumber({{ $i }})">{{ $i }}</button>
            @endfor
        </div>
        <div class=" my-6 text-center">
            <h2 id="result" class="text-6xl">?</h2>
            <p class="text-4xl" >Numero de intentos <span id="cont">0</span></p>
        </div>
        <x-return-button />
    </div>
</body>
<script src="{{ asset('js/secret.js') }}"></script>

</html>
