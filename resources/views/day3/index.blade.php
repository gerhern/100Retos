@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="{{ $data->id }}" challengeName="{{ $data->tittle }}"></x-page-header>
        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            <form class="flex flex-col text-2xl p-1 mb-6">
                <div class="flex justify-evenly my-6">
                    <label for="base">Horas</label>
                    <input type="number" class="border-b-2 px-2 mx-4 border-ebony bg-ash-gray" id="hours" step="0.01"
                        name="hours">
                </div>

                <div class="flex justify-evenly my-6">
                    <label for="height" class="">Minutos</label>
                    <input type="number" class="border-b-2 px-2 mx-4 border-ebony bg-ash-gray" id="minutes" step="0.01"
                        name="minutes">
                </div>

                <x-simple-button text="Calcular" event="calculate()"></x-simple-button>
            </form>
            <h2 class="text-center p-8" id="result"></h2>
            <x-return-button></x-return-button>
        </section>
    </main>
    <script src="{{ asset('js/clock.js') }}"></script>
@endsection
