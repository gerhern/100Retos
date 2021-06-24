<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Dia 6</title>

    </head>
    <body>
        <div class="container flex flex-col items-center">
            <div class="">
                <h2 class="text-center my-6 font-bold text-6xl">Reto 6</h2>
                <h2 class="text-center my-6 font-bold text-5xl">Calculadora</h2>
            </div>
            <div class="w-1/3 border-2 border-black border-collapse text-4xl flex flex-row flex-wrap my-6">
                <input type="text" class="border-2 border-black w-full" id="numberBox">

                <button class="bg-blue-300 w-1/4 h-full border-2 border-black"
                    onclick="getNumber(1)">1</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber(2)">2</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber(3)">3</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getOperator('/')">/</button>

                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber(4)">4</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber(5)">5</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber(6)">6</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getOperator('*')">*</button>

                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber(7)">7</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber(8)">8</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber(9)">9</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getOperator('+')">+</button>

                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber('.')">.</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getNumber(0)">0</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="deleteAll()">C</button>
                <button class="bg-blue-300 w-1/4 h-full border-2 border-black" 
                    onclick="getOperator('-')">-</button>

                <button class="bg-blue-300 w-full h-full border-2 border-black"
                    onclick="calculate()">=</button>

            </div>
            <x-return-button />
        </div>
    </body>
    <script src="{{ asset('js/calculator.js') }}"></script>
</html>
