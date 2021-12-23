@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <header>
            <h2 class="text-center font-bold text-6xl mb-6">Reto 2</h2>
            <h2 class="text-center font-bold text-5xl mb-6">Area de un Triangulo</h2>
        </header>
        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            <form class="flex flex-col text-2xl p-1 mb-6">
                <div class="flex justify-evenly my-6">
                    <label for="base">Base</label>
                    <input type="number" class="border-b-2 px-2 border-ebony bg-ash-gray" id="base" step="0.01"
                        name="base">
                </div>

                <div class="flex justify-evenly my-6">
                    <label for="height">Altura</label>
                    <input type="number" class="border-b-2 px-2 mx-4 border-ebony bg-ash-gray" id="height" step="0.01"
                        name="height">
                </div>

                <x-simple-button text="Calcular" event="calculateArea()">
                </x-simple-button>
            </form>

                <article class="p-8">
                    <h2 id="area"></h2>
                    <br>
                    <h2 id="type_of_triangle"></h2>
                </article>

                <x-return-button></x-return-button>
        </section>
    </main>
    <script src="{{ asset('js/triangle.js') }}"></script>
@endsection
