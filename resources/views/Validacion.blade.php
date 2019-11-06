<html>
    <head>
        <title>Validacion</title>
    </head>
    <body>
        <form action="{{route('validacion')}}" method="get">
            <label>Nombre: </label>
            <input type="text" name="nombre">
            <br><br>
            <label>Apellido: </label>
            <input type="apellido" name="apellido">
            <br><br>
            <label>Email</label>
            <input type="texto" name="email">
            <br><br>
            <label>Telefono: </label>
            <input type="texto" name="telefono">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>