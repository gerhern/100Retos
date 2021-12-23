@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="{{ $data->id }}" challengeName="{{ $data->title }}"></x-page-header>

        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            <form class="flex flex-col text-2xl px-4 mb-6 w-2/3">
                @csrf
                <div class="flex justify-evenly my-6">
                    <label for="lenght">Numero de Caracteres</label>
                    <input type="number" class="border-b-2 px-2 mx-4 border-ebony bg-ash-gray" id="lenght" name="lenght" max="100" min="1">
                </div>

                <div class="flex justify-evenly">
                    <label for="specialChars" class="w-1/4">Caracteres especiales</label>
                    <input type="checkbox" class="my-auto mx-12" id="specialChars" name="special" value="true">
                </div>

                <div class="flex justify-evenly">
                    <label for="upLowerChars" class="w-1/4">Mayusculas/Minusculas</label>
                    <input type="checkbox" class="my-auto mx-12" id="upLowerChars" name="upp" value="true">
                </div>

                <div class="flex flex-row justify-evenly">
                    <label for="numbers" class="w-1/4">Numeros</label>
                    <input type="checkbox" class="my-auto mx-12" id="numbers" name="numbers" value="true">
                </div>

                <x-submit-button text="Generar"></x-submit-button>

            </form>
            <h2 class="text-center px-8 py-4">{{ $result }}</h2>
            <x-return-button />
        </section>
    </main>
@endsection
