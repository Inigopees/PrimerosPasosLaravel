<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <h1>Tarea 4.1</h1>
        <ul>
            <li><a href="{{route('contacto')}}">Ejercicio A</a></li>
            <li><a href="{{route('identificador','3')}}">Ejercicio B</a></li>
            <li><a href="{{route('identidos',['nombre'=>'inigo','identificador'=>'2'])}}">Ejercicio C</a></li>
        </ul>
        <h1>Tarea 4.2</h1>
        <ul>
            <li><a href="{{route('saludo')}}">Ejercicio A</a></li>
            <li><a href="{{route('saludoNombre','inigo')}}">Ejercicio B</a></li>
            <li><a href="{{route('saludoNombreColor',['color'=>'b2ffff','nombre'=>'inigo'])}}">Ejercicio C</a></li>
        </ul>
        <h1>Tarea 4.3</h1>
        <ul>
            <li><a href="{{route('formulario')}}">Ejercicio A</a></li>
            <li><a href="{{route('formulario2')}}">Ejercicio B</a></li>
            <li><a href="{{route('formulario3')}}">Ejercicio C</a></li>
        </ul>
    </body>
</html>
