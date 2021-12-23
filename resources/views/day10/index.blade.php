@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="{{ $data->id }}" challengeName="{{ $data->title }}"></x-page-header>

        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">
            <form class="flex flex-col text-2xl p-1 mb-6">
                @csrf
                <div class="flex justify-evenly my-6">
                    <label for="text">Traductor</label>
                    <textarea name="text" id="text" cols="80" rows="10"
                        class="border px-2 mx-4 border-ebony bg-artichoke"></textarea>
                </div>
                <x-submit-button text="Iniciar"></x-submit-button>
            </form>
            <p class="text-center text-4xl my-6" id="result">{{ $text }}</p>
            <x-return-button />
        </section>
    </main>
@endsection
