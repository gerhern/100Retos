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
                <h2 class="text-center">Reto 3</h2>
                <h2 class="text-center">Calculadora de segundos</h2>
                <form>
                    <div class="mb-3">
                      <label for="hours" class="form-label">Horas</label>
                      <input type="number" class="form-control" id="hours" name="hours">
                    </div>

                    <div class="mb-3">
                      <label for="minutes" class="form-label">Minutos</label>
                      <input type="number" class="form-control" id="minutes" name="minutes">
                    </div>

                    <button type="button" class="btn btn-primary" onclick="calculate()">Calcular</button>
                </form>
                  <h2 class="text-center" id="result"></h2>

                  <a href="/" class="btn btn-primary">Regresar</a>
            </main>

        </div>
    </body>
    <script src="{{ asset('js/clock.js') }}"></script>
</html>
