<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="{{route('saludoPersonal')}}" method="get">
            <input type="text" name="nombre">
            <input type="apellido" name="apellido">
            <input type="submit" value="enviar">
        </form>
    </body>
</html>