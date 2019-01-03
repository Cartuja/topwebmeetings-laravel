<?php

use App\Http\Controllers\ControllerUsuario;
use App\Http\Controllers\ControllerPageIndex;
use App\Http\Controllers\ControllerValoraciones;
use App\Http\Controllers\ControllerPageAllWeb;
use App\Http\Controllers\ControllerPageOneWeb;
use App\Http\Controllers\ControllerContact;

/* Ruta Inicio */
Route::get('/', ['as' => 'inicio', 'uses' => 'ControllerPageIndex@route']);

//Ruta para desconectar usuarios
Route::post('/desconectar', ['as' => 'desconectar', 'uses' => 'ControllerUsuario@desconectar']);

/* Mandamos a la ruta '/' que es el inicio con la informacion de las webs */
Route::get('/', 'ControllerPageIndex@Webs');

Route::get('/allweb', ['as' => 'allweb', 'uses' => 'ControllerPageAllWeb@route']);

Route::get('/{nombre}', 'ControllerPageOneWeb@Web');
//Route::post('{nombre}/comentarios', 'ControllerPageOneWeb@Web');

//Eliminar comentario
Route::match(['get','post'], '/ajax/deleteComent', function(){
	return response()->json(ControllerPageOneWeb::deleteComent(Input::All()));
});
//-Eliminar comentario

//Añadir comentario
Route::match(['get','post'],'/ajax/addComent', function(){
	return response()->json(ControllerPageOneWeb::addComent(Input::All()));
});
//-Añadir comentario

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
Route::post('/ajax/registro', function ()
{
	return response()->json(ControllerUsuario::Registro(Input::All()));
});
//-Registro de usuarios

//Registro de usuarios
Route::match(['get','post'],'/ajax/contact', function ()
{
	return response()->json(ControllerContact::contact(Input::All()));
});
//-Registro de usuarios

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
