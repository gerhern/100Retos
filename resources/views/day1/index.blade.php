@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <header>
            <h2 class="text-center my-6 font-bold text-5xl">Reto 1</h2>
        </header>
        <section class="w-full mx-auto bg-bold-blue rounded-xl shadow-lg flex flex-col items-center py-10">
            <h2 class="text-center my-6 mx-auto font-bold text-5xl border border-black bg-dark-blue p-16 rounded-md shadow-lg">Hola Mundo</h2>
            <x-return-button />
        </section>
    </main>
@endsection
