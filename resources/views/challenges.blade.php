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
        <div class="container">
            <main class="mx-auto">
                <form action="{{ route('challenges.store') }}" method="POST">
                @csrf
                    <h2 class="text-center">Agregar Retos</h2>
                    <div class="mb-3">
                      <label for="titleChallenge" class="form-label">Titulo del reto</label>
                      <input type="text" class="form-control" id="titleChallenge" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="descChallenge" class="form-label">Descripcion del reto</label>
                        <input type="text" class="form-control" id="descChallenge" name="description">
                    </div>
                    
                    <div class="mb-3">
                        <label for="urlImgChallenge" class="form-label">Url de imagen</label>
                        <input type="text" class="form-control" id="urlImgChallenge" name="url">
                    </div>

                    <div class="mb-3">
                        <label for="altImgChallenge" class="form-label">Alt de imagen</label>
                        <input type="text" class="form-control" id="altImgChallenge" name="alt">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </main>
        </div>
    </body>
</html>
