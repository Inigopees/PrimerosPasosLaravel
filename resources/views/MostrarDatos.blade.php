<!DOCTYPE html>
<html>
    <head>
        <title>Mostrar Datos</title>
    </head>
    <body>
        <p>Nombre : {{$nombre}}</p>
        <p>Apellido : {{$apellido}}</p>
        <p>Email : {{$email}}</p>
        <p>Telefono : {{$telefono}}</p>
        @ifisset({{$dni}})
            <p>{{$dni}}</p>
        @endif
    </body>

</html>