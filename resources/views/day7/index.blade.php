@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="{{ $data->id }}" challengeName="{{ $data->title }}"></x-page-header>
        <h2 class="text-center text-4xl font-bold"><span id="scoreP1">0</span> : <span id="scoreP2">0</span></h2>
        
        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            {{-- Board --}}
            <div class="border-t-2 border-b-2 border-black flex flex-row w-3/4 py-6">

                {{-- player left --}}
                <div class="w-1/5 h-96 my-6 box-content flex flex-col justify-evenly items-center">
                    {{-- img board --}}
                    <div class="">
                        <img src="./rock.png" class="rounded-full border-2 hover:border-black" onclick="playGame('rock')">
                    </div>
                    <div class="">
                        <img src="./paper.png" class="rounded-full border-2 hover:border-black" onclick="playGame('paper')">
                    </div>
                    <div class="">
                        <img src="./scissors.png" class="rounded-full border-2 hover:border-black"
                            onclick="playGame('scissors')">
                    </div>
                </div>
                <!--fin de player left-->

                {{-- borderCenter --}}
                <div class="flex flex-row items-center justify-evenly w-3/5">
                    <div class="">
                        <img src="./rock.png" class="w-28 rounded-full" id="versusImagePlayer">
                    </div>
                    <div class="">
                        <img src="./vs.jpg" class="w-64">
                    </div>
                    <div class="">
                        <img src="./rock.png" class="w-28 rounded-full" id="versusImageRival">
                    </div>
                </div>

                {{-- player right --}}
                <div class="w-1/5 h-96 my-6 box-content flex flex-col justify-evenly items-center">
                    {{-- img board --}}
                    <div class="hover:border-2 hover:border-black rounded-md">
                        <img src="./rock.png" class="rounded-full">
                    </div>
                    <div class="">
                        <img src="./paper.png" class="rounded-full">
                    </div>
                    <div class="">
                        <img src="scissors.png" class="rounded-full">
                    </div>
                </div>
                <!--fin de player right-->

            </div>
            <!--fin de border-->
        </section>
        <div id="resultGame" class="text-3xl font-bold py-10">
        </div>
        <x-return-button />
    </main>
    <script src="{{ asset('js/game.js') }}"></script>
@endsection
