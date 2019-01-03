<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelComentario;
use App\Http\Models\ModelIndex;
use App\Http\Models\ModelUsuario;
//Intermediario entre el modelo y las vistas

class ControllerPageOneWeb extends Controller {

	public static function Web($nombre)
	{
		$web = ModelIndex::Where('NombreWeb', $nombre)->get();
		$comentarios = ModelComentario::Where('Idweb', $web[0]['IdWeb'])->get();
		$usuarios = ModelUsuario::all();
		return view('oneweb', ['web' => $web,
													'comentarios' => $comentarios,
												 	'usuarios' => $usuarios ]);
	}

	static function deleteComent($input)
	{
		$delete_row = ModelComentario::Where('IdComentario', $input['id_comentario'])->delete();
		$devuelve['ok'] = 1;
		return $devuelve;
	}

	static function addComent($input)
	{
		$devuelve['ok']=0;
		if(isset($_SESSION['session_email']))
		{
			if(trim($input['nombre']) != '' && trim($input['email']) != '' && trim($input['coment']) != '')
			{
				$devuelve['ok']=2; //Devuelve que no existe en la bdd y se puede registrar
				$nuevo_comentario = new ModelComentario();
				$nuevo_comentario->Usuario=$input['nombre'];
				$nuevo_comentario->TextoComentario=$input['coment'];
				$nuevo_comentario->Email=$input['email'];
				$nuevo_comentario->Idweb=$input['id_web'];
				$nuevo_comentario->IdUsuario=$input['id_usuario'];
				$nuevo_comentario->save(); //guardamos en la base de datos
			}
			else
			{
		    $devuelve['ok']=3;
			}
		} else{
			$devuelve['ok']=1;
		}

		return $devuelve;
	}

}
