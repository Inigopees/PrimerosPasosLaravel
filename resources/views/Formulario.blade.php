<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="{{route('saludoPersonal')}}" method="get">
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