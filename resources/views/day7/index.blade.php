<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dia7</title>

</head>

<body>
    <div class="container flex flex-col items-center min-h-screen">
        <div class=" mb-6">
            <h2 class="text-center my-6 font-bold text-5xl">Reto 7</h2>
            <h2 class="text-center my-6 font-bold text-4xl">Piedra Papel o Tijera</h2>
            <h2 class="text-center text-4xl font-bold"><span id="scoreP1">0</span> : <span id="scoreP2">0</span></h2>
        </div>

        {{-- Board --}}
        <div class="border-t-2 border-b-2 border-black flex flex-row w-3/4 py-6">

            {{-- player left --}}
            <div class="w-1/5 h-96 my-6 box-content flex flex-col justify-evenly items-center">
                {{-- img board --}}
                <div class="">
                    <img src="./rock.png"
                        class="rounded-full border-2 hover:border-black"
                        onclick="playGame('rock')">
                </div>
                <div class="">
                    <img src="./paper.png"
                        class="rounded-full border-2 hover:border-black"
                        onclick="playGame('paper')">
                </div>
                <div class="">
                    <img src="./scissors.png"
                        class="rounded-full border-2 hover:border-black"
                        onclick="playGame('scissors')">
                </div>
            </div>
            <!--fin de player left-->

            {{-- borderCenter --}}
            <div class="flex flex-row items-center justify-evenly w-3/5">
                <div class="">
                    <img src="./rock.png"
                        class="w-28 rounded-full"
                        id="versusImagePlayer">
                </div>
                <div class="">
                    <img src="./vs.jpg"
                        class="w-64">
                </div>
                <div class="">
                    <img src="./rock.png"
                        class="w-28 rounded-full"
                        id="versusImageRival">
                </div>
            </div>

            {{-- player right --}}
            <div class="w-1/5 h-96 my-6 box-content flex flex-col justify-evenly items-center">
                {{-- img board --}}
                <div class="hover:border-2 hover:border-black rounded-md">
                    <img
                        src="./rock.png">
                </div>
                <div class="">
                    <img
                        src="./paper.png">
                </div>
                <div class="">
                    <img
                        src="scissors.png">
                </div>
            </div>
            <!--fin de player right-->

        </div>
        <!--fin de border-->
        <div id="resultGame" class="text-3xl font-bold py-10">
            
        </div>
        <x-return-button />
    </div>
</body>
<script src="{{ asset("js/game.js") }}"></script>

</html>
