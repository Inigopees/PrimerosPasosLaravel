<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <?php 
            if(!isset($idiomas)){
        ?>
        <form action="{{route('SaludoIdiomas2')}}" method="post">
        <label>Nombre: </label>
            <input type="text" name="nombre">
            <br><br>
            <label>Apellido: </label>
            <input type="apellido" name="apellido">
            <br><br>
            <input type="submit" name="boton" value="Enviar">
        </form>
        <?php
            }
            else
            {
                foreach ($idiomas as $traduccion) {
                    echo $traduccion['idioma']." : ".$traduccion['saludo']." ".$nombre."<br><br>";
                }
            }
        ?>
    </body>
</html>