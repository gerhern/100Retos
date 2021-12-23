@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="{{ $data->id }}" challengeName="{{ $data->title }}"></x-page-header>

        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            <div class="w-2/3 flex justify-evenly flex-wrap text-3xl mb-2">
                @for ($i = 0; $i <= 20; $i++)
                    <button class="bg-ash-gray  hover:bg-artichoke  w-1/6 m-6 h-full border-2 border-black rounded-full outline-black"
                        id="{{ $i }}" onclick="selectNumber({{ $i }})">{{ $i }}</button>
                @endfor
            </div>

            <div class="text-center my-2">
                <h2 id="result" class="text-5xl">?</h2>
                <p class="text-3xl">Numero de intentos <span id="cont">0</span></p>
            </div>
            <div class="flex items-center">
                <x-simple-button text="Reiniciar" event="location.reload()"></x-simple-button>
                <x-return-button />
            </div>
        </section>
    </main>
    <script src="{{ asset('js/secret.js') }}"></script>
@endsection