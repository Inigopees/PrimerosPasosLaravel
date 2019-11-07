<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="{{route('SaludoIdiomas2')}}" method="post">
        @csrf
        <label>Nombre: </label>
            <input type="text" name="nombre">
            <br><br>
            <label>Apellido: </label>
            <input type="apellido" name="apellido">
            <br><br>
            <input type="submit" name="boton" value="Enviar">
        </form>
        @if (isset($nombre))
            @foreach ($idiomas as $idioma)
                <p>{{$idioma->saludo}} {{$nombre}}!!</p>
            @endforeach
        @endif
    </body>
</html>