<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelComentario;
use App\Http\Models\ModelIndex;
use App\Http\Models\ModelUsuario;

//Intermediario entre el modelo y las vistas

class ControllerPageOneWeb extends Controller {

	public static function Web($nombre){
		$web = ModelIndex::Where('NombreWeb', $nombre)->get();
		$comentarios = ModelComentario::Where('Idweb', $web[0]['IdWeb'])->get();
		$usuarios = ModelUsuario::all();
		return view('oneweb', ['web' => $web,
													'comentarios' => $comentarios,
												 	'usuarios' => $usuarios ]);
	}

}
