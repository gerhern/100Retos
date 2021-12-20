<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Challenges</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <main class="w-screen h-screen flex justify-items-center items-center">
            <form class="w-3/5 p-4 border border-black mx-auto flex flex-col items-center" action="{{ route('store')}}">
                <label for="title">
                    Titulo
                </label>
                <input class="h-8 w-4/5 border border-black px-2 rounded-md" type="text" name="title" id="title" placeholder="Ingrese titulo">

                <label for="description">
                    Descripcion
                </label>
                <textarea class="w-4/5 border border-black px-2 rounded-md overflow-scroll" name="description" id="description" placeholder="Ingrese descripcion"></textarea>

                <label for="img">
                    Imagen
                </label>
                <input class="h-8 w-4/5 border border-black px-2 rounded-md" type="text" name="url_img" id="img" placeholder="Ingrese url de imagen">

                <label for="pointer">
                    Alt
                </label>
                <input class="h-8 w-4/5 border border-black px-2 rounded-md" type="text" name="pointer" id="pointer" placeholder="Ingrese puntero">

                <input class="border border-black p-2 m-4 rounded-md" type="submit" value="Agregar">
            </form>
        </main>
    </body>
</html>
