<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelComentario;

//Intermediario entre el modelo y las vistas

class ControllerPageComentarios extends Controller {

	public static function Comentarios()
	{
		$comentarios = ModelComentario::all();
		return view('oneweb', compact('comentarios'));
	}

}
