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
});

Route::get('/blog/{identificador}',function($identificador){
    return view('blog',['identificador'=>$identificador]);
});

Route::get('/blog/{nombre}/{identificador}',function($nombre,$identificador){
    return view('blog2',['identificador'=>$identificador,'nombre'=>$nombre]);
})->where(array('nombre' => '[a-zA-Z]+','identificador' => '[0-9]+'));
