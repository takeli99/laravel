<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Laravel con Vue</title>

        @vite('resource/css/app.css') <!-- Cargamos el archivo css -->
    </head>
    <body class="">
        <div id="app"> <!-- Creamos un div con el id app -->

        </div>
        @vite('resource/css/app.css') <!-- Cargamos el archivo js para que funcione la aplicación-->
    </body>
</html>
