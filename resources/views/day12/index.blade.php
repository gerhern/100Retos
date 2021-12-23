@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="{{ $data->id }}" challengeName="{{ $data->title }}"></x-page-header>
        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            <form class="flex flex-col text-2xl px-4 mb-6">
                <div class="flex justify-evenly my-6">
                    <label for="schedule">Fecha de Nacimiento</label>
                    <input type="date" class="border-2 rounded-lg px-4 border-black" id="schedule" name="date">
                </div>

                <x-submit-button text="Calcular"></x-submit-button>

            </form>
            @empty(!$result)
            <h2 class="text-center text-2xl py-8" id="result">Faltan {{ $result }} dias para tu proximo cumpleaños</h2>
            @endempty
            <x-return-button />
        </section>
    </main>
@endsection