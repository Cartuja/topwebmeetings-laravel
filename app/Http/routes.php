<?php

use App\Http\Controllers\ControllerUsuario;

/* Ruta Inicio */
Route::get('/', ['as' => 'inicio', 'uses' => 'ControllerPageIndex@route']);

/* Ruta Inicio con ranking para recoger las webs */
Route::get('/ranking', 'ControllerPageIndex@AllWebs');

//El primer meetic es el que se ve en la url
//Route::get('meetic', ['as' => 'meetic', 'uses' => 'ControllerPageMeetic@route']);

//Así se le pasa una variable por la ruta
//Si queremos que no sea obligatorio, añadimos después del nombre una "?" y añadir valor por defecto
// $nombre = "Isaac"
Route::get('/web/{nombre?}', ['as' => 'web', 'uses' => 'ControllerPageAllWeb@route']);//->where('nombre', 'meetic');

Route::post('/ajax/login', function ()
{
	return response()->json(ControllerUsuario::Login(Input::All()));
});

Route::match(['get','post'],'/ajax/registro', function ()
{
	return response()->json(ControllerUsuario::Registro(Input::All()));
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
