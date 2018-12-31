<?php

use App\Http\Controllers\ControllerUsuario;
use App\Http\Controllers\ControllerPageIndex;

/* Ruta Inicio */
Route::get('/', ['as' => 'inicio', 'uses' => 'ControllerPageIndex@route']);

/* Mandamos a la ruta '/' que es el inicio con la informacion de las webs */
Route::get('/', 'ControllerPageIndex@Webs');

Route::get('{nombre}', ['as' => ' oneweb', 'uses' => 'ControllerPageIndex@OneWeb']);
//Route::get('/web/{nombre}/comentarios', ['as' => ' comentarios', 'uses' => 'ControllerPageComentarios@Comentarios']);

//El primer meetic es el que se ve en la url
//Route::get('meetic', ['as' => 'meetic', 'uses' => 'ControllerPageMeetic@route']);

Route::get('/allweb', ['as' => 'allweb', 'uses' => 'ControllerPageAllWeb@route'])->where('nombre', 'allweb');

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
