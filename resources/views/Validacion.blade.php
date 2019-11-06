<html>
    <head>
        <title>Validacion</title>
    </head>
    <body>
        <form action="{{route('SaludoIdiomas')}}" method="post">
        <label>Nombre: </label>
            <input type="text" name="nombre">
            <br><br>
            <label>Apellido: </label>
            <input type="apellido" name="apellido">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>