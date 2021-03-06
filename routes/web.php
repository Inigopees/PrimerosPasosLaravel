<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto',function(){
    return view('contacto');
})->name('contacto');

Route::get('/blog/{identificador}',function($identificador){
    return view('blog',['identificador'=>$identificador]);
})->name('identificador');

Route::get('/blog/{nombre}/{identificador}',function($nombre,$identificador){
    return view('blog2',['identificador'=>$identificador,'nombre'=>$nombre]);
})->where(array('nombre' => '[a-zA-Z]+','identificador' => '[0-9]+'))->name('identidos');

Route::get('saludo','SaludoController@saludo')->name('saludo');

Route::get('saludo/{nombre}','SaludoController@saludoExterior')->name('saludoNombre');

Route::get('saludo/{color}/{nombre}','SaludoController@saludoColor')->name('saludoNombreColor');

Route::get('/formulario',function(){
    return view('Formulario');
})->name('formulario');

Route::get('saludoPersonalizado','SaludoController@ejer43')->name('saludoPersonal');

Route::get('/formulario2',function(){
    return view('Formulario2');
})->name('formulario2');

Route::post('SaludoMultidiomas','SaludoController@ejer43b')->name('SaludoIdiomas');

Route::get('/formulario3',function(){
    return view('Formulario3');
})->name('formulario3');

Route::post('SaludoMultidiomas2','SaludoController@ejer43c')->name('SaludoIdiomas2');

Route::get('/validacion',function(){
    return view('Validacion');
})->name('validacionForm');

Route::get('validar','SaludoController@validacion')->name('validacion');

Route::get('/validacion2',function(){
    return view('Validacion');
})->name('validacionForm2');

Route::get('validar2','SaludoController@validacion')->name('validacion2');