<?php

use App\Http\Controllers\ControllerUsuario;
use App\Http\Controllers\ControllerPageIndex;
use App\Http\Controllers\ControllerValoraciones;

/* Ruta Inicio */
Route::get('/', ['as' => 'inicio', 'uses' => 'ControllerPageIndex@route']);

/* Mandamos a la ruta '/' que es el inicio con la informacion de las webs */
Route::get('/', 'ControllerPageIndex@Webs');

Route::get('{nombre}', 'ControllerPageOneWeb@Web');
//Route::post('{nombre}/comentarios', 'ControllerPageOneWeb@Web');

//El primer meetic es el que se ve en la url
//Route::get('meetic', ['as' => 'meetic', 'uses' => 'ControllerPageMeetic@route']);

Route::get('/allweb', ['as' => 'allweb', 'uses' => 'ControllerPageAllWeb@route'])->where('nombre', 'allweb');

//Login de la web
Route::post('/ajax/login', function ()
{
	return response()->json(ControllerUsuario::Login(Input::All()));
});
//-login de la web

//Votaciones usuarios
Route::match(['get','post'],'/ajax/votar', function ()
{
	return response()->json(ControllerValoraciones::Votar(Input::All()));
});
//-Votaciones usuarios

//Registro de usuarios
Route::match(['get','post'],'/ajax/registro', function ()
{
	return response()->json(ControllerUsuario::Registro(Input::All()));
});
//-Registro de usuarios

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
