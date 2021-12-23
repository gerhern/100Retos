@extends('layout')
@section('content')

    <main class="container mx-auto px-6 ">
        <header class="flex flex-col justify-evenly items-center">
            <h1 class="text-5xl my-8">Retos de programación</h1>
            @if (session('status'))
                <div class="border border-black rounded-md shadow-lg text-white bg-red-500 p-16">
                    {{ session('status') }}
                </div>
            @endif
        </header>

        <section>
            @foreach ($data as $day)
                <x-challenge-card :title="$day->title" :description="$day->description" :url="$day->url_img"
                    :alt="$day->pointer" />
            @endforeach
        </section>
        <section class="py-4">
            {{ $data->links() }}
        </section>
    </main>
@endsection
