<html>
    <head>
        <title>Saludo en multi idiomas</title>
    </head>
    <body>
        <?php 
        foreach ($idiomas as $traduccion) {
            echo $traduccion['idioma']." : ".$traduccion['saludo']." ".$nombre."<br><br>";
        }
        ?>
    </body>
</html>