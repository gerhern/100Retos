@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="4" challengeName="Repite la palabra"></x-page-header>
        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            <form class="flex flex-col text-2xl p-1 mb-6">
                <div class="flex justify-evenly my-6">
                    <label for="word">Palabra</label>
                    <input type="text" class="border-b-2 px-2 border-ebony bg-ash-gray" id="word" name="word">
                </div>

                <div class="flex justify-evenly my-6">
                    <label for="count" class=""># de repeticiones</label>
                    <input type="number" class="border-b-2 px-2 border-ebony bg-ash-gray" id="count" name="count">
                </div>

                <x-simple-button text="Repetir" event="startRecursive()"></x-simple-button>
            </form>

            <h2 class="text-center px-16 py-4" id="result"></h2>
            <x-return-button />
        </section>

    </main>
    <script src="{{ asset('js/recursive.js') }}"></script>
@endsection
