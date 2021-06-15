<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Challenges</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </head>
    <body>
        <div class="container vh-100 border border-1 ">
            <main class="d-flex flex-column justify-content-center">
                <h1 class="text-center">100 Retos de programacion</h1>
                <section>
                    @foreach ($days as $day)
                    <x-challenge-card :title="$day['title']" :description="$day['description']" :url="$day['url']" :alt="$day['alt']" />
                    @endforeach
                   
                </section>
            </main>
        </div>
    </body>
</html>
