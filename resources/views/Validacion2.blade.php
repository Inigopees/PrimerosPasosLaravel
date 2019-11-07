<html>
    <head>
        <title>Validacion</title>

        <style>
            .error{
                color:red;
            }
            input{
                width:200px;
            }
        </style>
    </head>
    <body>
        <form action="{{route('validacion2')}}" method="get">
            <label>Nombre: </label>
            <input type="text" name="nombre" value="{{old('nombre')}}">
            @if ($errors->has('nombre'))
                <a class="error">{{ $errors->first('nombre') }}</a>
            @endif
            <br><br>
            <label>Apellido: </label>
            <input type="apellido" name="apellido" value="{{old('apellido')}}">
            @if ($errors->has('apellido'))
                <a class="error">{{ $errors->first('apellido') }}</a>
            @endif
            <br><br>
            <label>Email: </label>
            <input type="texto" name="email"value="{{old('email')}}">
            @if ($errors->has('email'))
                <a class="error">{{ $errors->first('email') }}</a>
            @endif
            <br><br>
            <label>Telefono: </label>
            <input type="texto" name="telefono" value="{{old('telefono')}}">
            @if ($errors->has('email'))
                <a class="error">{{ $errors->first('telefono') }}</a>
            @endif
            <br><br>
            <input type="submit" value="Enviar">

          <!--  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->
        </form>
    </body>
</html>