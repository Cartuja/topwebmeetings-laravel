<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelComentario;

//Intermediario entre el modelo y las vistas

class ControllerValoraciones extends Controller {

	static function Votar($input)
	{
		$valoraciones_bdd = ModelValoraciones::all();
		$devuelve['ok'] = 0;
		if(isset($input['id_web']) && isset($input['valoracion_votacion']) && isset($input['tipo_votacion']) && isset($input['id_user']))
		{ //Si existen todas la variables
			if(count($valoraciones_bdd) > 0 )
			{
				for ($i=0; $i < count($valoraciones_bdd); $i++)
				{//recorremos las valoraciones
					if($input['id_user'] == $valoraciones_bdd[$i]['IdUsuario'] //Si el idUsuario es igual a el idUsuario de la bdd,
	    			&& $input['id_web'] == $valoraciones_bdd[$i]['IdWeb'] // el idWeb es igual a el idWeb de la bdd,
			      && $input['tipo_votacion'] == $valoraciones_bdd[$i]['TipoVotacion'] // el tipoVotacion es igual al tipoVotacion de la bdd y
			      && $valoraciones_bdd[$i]['ValoracionVotacion'] != 0) //la valoracion de la bdd es distinta de 0
	  			{
						echo "Votacion=".$valoraciones_bdd[$i]['ValoracionVotacion']." // Usuario=".$valoraciones_bdd[$i]['IdUsuario'].
						" // Web=".$valoraciones_bdd[$i]['IdWeb']. " // Tipo=".$valoraciones_bdd[$i]['TipoVotacion'];
	        	$devuelve['ok']= 1; //Ya has votado
			    }
			    else
			    {
						$nueva_valoracion = new ModelValoraciones();
		        $nueva_valoracion->IdUsuario=$input['id_user'];
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
				$nueva_valoracion = new ModelValoraciones();
				$nueva_valoracion->IdUsuario=$input['id_user'];
				$nueva_valoracion->IdWeb=$input['id_web'];
				$nueva_valoracion->TipoVotacion=$input['tipo_votacion'];
				$nueva_valoracion->ValoracionVotacion=$input['valoracion_votacion'];
				$nueva_valoracion->save(); //guardamos la valoracion
				$devuelve['ok']= 1; //Votamos
			}
		}
		return $devuelve;
	}

}
