<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Challenges</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container mx-auto px-6 ">
            <main class="flex flex-col justify-evenly items-center">
                <h1 class="text-5xl my-6">100 Retos de programacion</h1>
                <section>
                    @foreach ($days as $day)
                    <x-challenge-card :title="$day['title']" :description="$day['description']" :url="$day['url']" :alt="$day['alt']" />
                    @endforeach
                   
                </section>
            </main>
        </div>
    </body>
</html>
