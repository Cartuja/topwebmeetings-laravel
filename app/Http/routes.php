<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'inicio', 'uses' => 'ControllerPageIndex@route']);

//El primer meetic es el que se ve en la url
//Route::get('meetic', ['as' => 'meetic', 'uses' => 'ControllerPageMeetic@route']);

//Así se le pasa una variable por la ruta
//Si queremos que no sea obligatorio, añadimos después del nombre una "?" y añadir valor por defecto
// $nombre = "Isaac"
Route::get('web/{nombre?}', ['as' => 'web', 'uses' => 'ControllerPageAllWeb@route']);//->where('nombre', 'meetic');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
