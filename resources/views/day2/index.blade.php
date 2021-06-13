<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>day2</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <main class="mx-auto border border-primary p-5" >
                <h2 class="text-center">Reto 2</h2>
                <form>
                    <div class="mb-3">
                      <label for="base" class="form-label">Base</label>
                      <input type="number" class="form-control" id="base" step="0.01" name="base">
                    </div>

                    <div class="mb-3">
                      <label for="height" class="form-label">Altura</label>
                      <input type="number" class="form-control" id="height" step="0.01" name="height">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="calculateArea()">Calcular</button>
                </form>
                  <h2 class="text-center" id="result"></h2>
                  <br>
                  <h2 class="text-center" id="triangle"></h2>

                  <a href="/" class="btn btn-primary">Regresar</a>
            </main>

        </div>
    </body>
    <script src="{{ asset('js/triangle.js') }}"></script>
</html>
