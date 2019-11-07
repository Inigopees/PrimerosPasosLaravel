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
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $datos= file_get_contents("/home/ubuntu/LaravelBasic/database/data/saludos.json");
        $idiomas = json_decode($datos, true);
        $nombreCompleto = $nombre." ".$apellido;
        return view('multidiomas',['nombre'=>$nombreCompleto,'idiomas'=>$idiomas]);
    }

    function ejer43c(request $request){
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $datos= file_get_contents("/home/ubuntu/LaravelBasic/database/data/saludos.json");
        $idiomas = json_decode($datos, true);
        $nombreCompleto = $nombre." ".$apellido;
        return view('Formulario3',['nombre'=>$nombreCompleto,'idiomas'=>$idiomas]);
    }
    
    ///////////////////////////////////////////////////////////////////////
    //////////////////////////// 4.4  ////////////////////////////////////
 
    function validacion(request $request){
        $validatedData = $request->validate([
            'nombre'=>'required|min:2|max:15',
            'apellido'=>'required|min:2|max:15',
            'email'=>'required|email',
            'telefono'=>'regex:/^[679][0-9]{8}$/'
        ]);
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        return view('MostrarDatos',['nombre'=>$nombre,'apellido'=>$apellido, 'email'=>$email, 'telefono'=>$telefono]);
    }

    function validacion2(ContactoRequest $request){
        
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        return view('MostrarDatos',['nombre'=>$nombre,'apellido'=>$apellido, 'email'=>$email, 'telefono'=>$telefono]);
    }

}
