@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="{{ $data->id }}" challengeName="{{ $data->title }}"></x-page-header>
        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            <x-simple-button text="Agregar platillo" event="addDish()"></x-simple-button>
            <form class="flex flex-col text-2xl p-1 mb-6" id="list">
                <div class="flex justify-evenly my-6" >
                    <label for="dish0">Platillo</label>
                    <input type="number" class="border-b-2 px-2 mx-4 border-ebony bg-ash-gray" id="dish0" name="dish0">
                </div>

                <input type="hidden" name="list">
            </form>
            <div class="my-4">
                <x-simple-button text="Calcular" event="calculate()"></x-simple-button>
            </div>
            <x-return-button />
        </section>
    </main>
    <script src="{{ asset('js/tipCalculator.js') }}"></script>
@endsection