<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function saludo(){
        $nombre = "Invitado";
        return view('saludo',['nombre'=>$nombre]);
    }

    function saludoExterior($nombre){
        return view('saludo',['nombre'=>$nombre]);
    }

    function saludoColor($nombre,$color){
        return view('saludo',['nombre'=>$nombre,'color'=>$color]);
    }
}
