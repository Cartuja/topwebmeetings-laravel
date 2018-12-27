<?php

namespace App\Http\Controllers;

use App\Http\Models\ModelWeb;

//Intermediario entre el modelo y las vistas

class ControllerPageIndex extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function route()
	{
    //$usuario=new ModelUsuario();
    //$usuario->EmailUsuario='usuario_'.date('His').'@hotmail.com';
    //$usuario->save();

    //$usuario=ModelUsuario::Where('IdUsuario',2)->get();

    //$usuario->forceDelete();


    /*$usuarios=ModelUsuario::Where('IdUsuario',1)->get();

    foreach ($usuarios as $usuario)
    {
      $usuario->EmailUsuario='otro@gmail.com';
      //echo '<br />'.$usuario->IdUsuario.' : '.$usuario->EmailUsuario;
      $usuario->update();
    }*/
		return view('inicio');
	}

}
