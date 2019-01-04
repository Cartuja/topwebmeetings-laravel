<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelValoraciones;
use App\Http\Models\ModelUsuario;

//Intermediario entre el modelo y las vistas

class ControllerValoraciones extends Controller {

	static function Votar($input)
	{
		//recogemos el idUsuario
		if(isset($_SESSION['session_email']))
		{
			$devuelve['ok'] = 5;
			$id_usuario = ModelUsuario::Where('EmailUsuario', $_SESSION['session_email'])->get();
			if(isset($input['id_web']) && isset($input['valoracion_votacion']) && isset($input['tipo_votacion']))
			{ //Si existen todas la variables
				$resultado = ModelValoraciones::Where('IdWeb', $input['id_web'])
																			->Where('IdUsuario', $id_usuario[0]['IdUsuario'])
																			->Where('TipoVotacion', $input['tipo_votacion'])
																			->exists(); //Hacemos consulta de si existe
				if($resultado != null) //comprobamos consulta si existe
  			{
        	$devuelve['ok']= 0; //Si existe consulta, ya has votado
		    }
		    else
		    {
					$nueva_valoracion = new ModelValoraciones();
					$nueva_valoracion->IdUsuario=$id_usuario[0]['IdUsuario'];
					$nueva_valoracion->IdWeb=$input['id_web'];
					$nueva_valoracion->TipoVotacion=$input['tipo_votacion'];
					$nueva_valoracion->ValoracionVotacion=$input['valoracion_votacion'];
					$nueva_valoracion->save(); //guardamos la valoracion
					$devuelve['ok']= 1; //Votamos
		    }
			}
		}
		else
		{
			$devuelve['ok'] = 2; //Registrate
		}
		return $devuelve;
	} //Fin funcion votar

}
