@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="{{ $data->id }}" challengeName="{{ $data->title }}"></x-page-header>

        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            <form class="flex flex-col text-2xl px-4 mb-6" method="get" action="">
                @csrf
                <div class="flex justify-evenly my-6">
                    <label for="base">Radio</label>
                    <input type="number" class="border-b-2 px-2 mx-4 border-ebony bg-ash-gray" id="radius" step="0.1"
                        name="radius" value="{{ old('radius') }}">
                </div>

                <div class="flex justify-evenly my-6">
                    <label for="height" class="">Altura</label>
                    <input type="number" class="border-b-2 px-2 mx-4 border-ebony bg-ash-gray" id="height" step="0.1"
                        name="height">
                </div>

                <x-submit-button text="Calcular"></x-submit-button>
            </form>
            <h2 class="text-center py-8" id="result">{{ "$result " }}</h2>
            <x-return-button />
        </section>
    </main>
@endsection