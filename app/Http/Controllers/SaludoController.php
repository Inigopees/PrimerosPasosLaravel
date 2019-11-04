<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    ///////////////////////////////////////////////////////////////////////
    //////////////////////////// 4.2  ////////////////////////////////////
    function saludo(){
        $nombre = "Invitado";
        return view('saludoDos',['nombre'=>$nombre]);
    }

    function saludoExterior($nombre){
        return view('saludoDos',['nombre'=>$nombre]);
    }

    function saludoColor($color,$nombre='Anonimo'){
        return view('saludo',['nombre'=>$nombre,'color'=>$color]);
    }
    ///////////////////////////////////////////////////////////////////////
    //////////////////////////// 4.3  ////////////////////////////////////
    
    function ejer43(request $request){
        $nombre = $request->get('nombre');
        $apellido = $request->get('apellido');
        $nombreCompleto = $nombre." ".$apellido;
        return view('saludoDos',['nombre'=>$nombreCompleto]);
    }

    function ejer43b(request $request){
        $nombre = $request->get('nombre');
        $apellido = $request->get('apellido');
        $nombreCompleto = $nombre." ".$apellido;
        return view('SaludoIdiomas',['nombre'=>$nombreCompleto]);
    }

 
}
