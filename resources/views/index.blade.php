<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Retos de programación</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-light-blue">
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
    </main>
    {{ $data->links() }}
</body>

</html>
