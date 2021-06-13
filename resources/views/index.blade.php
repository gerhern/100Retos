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

                    @foreach ($challenges as $challenge)
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $challenge->img_challenge }}" alt="{{ $challenge->imgAlt_challenge }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $challenge->title_challenge }}</h5>
                                        <p class="card-text">{{ $challenge->description_challenge }}</p>
                                        <a href="{{ route("$challenge->imgAlt_challenge") }}" class="btn btn-primary">Ir</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach            
                    
                </section>
            </main>
        </div>
    </body>
</html>
