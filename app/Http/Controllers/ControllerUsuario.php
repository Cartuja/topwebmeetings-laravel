<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Models\ModelUsuario;

use Illuminate\Http\Request;


class ControllerUsuario extends Controller
{

  function Obtener1Usuario($id_usuario)
  {
    $usuario=ModelUsuario::where('id',1)->get();
    return $usuario;
  }

	static function Login($input)
	{
		$devuelve['ok']=0;

		if (isset($input['log']) && isset($input['pwd']))
		{
			$u=ModelUsuario::Where('EmailUsuario',$input['log'])->Where('PassUsuario',$input['pwd'])->get();
			if ($u->count()>0)
			{
				$devuelve['ok']=1;
			}
			else
				$devuelve['ok']=0;
		}

		return $devuelve;
	}

	static function Registro($input)
	{
    $devuelve['ok'] = 0;
    //var_export($input);

    //$input['x'], la 'x' es el nombre de la variable que le mandamos desde el fichero js
    if(isset($input['nombre']) && isset($input['email']) && isset($input['pass']) && isset($input['pass2']))
    {
      $existe_email = ModelUsuario::Where('EmailUsuario', $input['email'])->first();
      //echo "EMAILS ".$input['registration_email']." // ". $existe_email['EmailUsuario'];
      if(!$existe_email['EmailUsuario'])
      {
        $devuelve['ok'] = 1; //Devuelve que no existe en la bdd y se puede registrar
        //guardamos en la base de datos
        $nuevo_usuario = new ModelUsuario();
        $nuevo_usuario->NombreUsuario=$input['nombre'];
        $nuevo_usuario->PassUsuario=$input['pass'];
        $nuevo_usuario->EmailUsuario=$input['email'];
        $nuevo_usuario->TipoUsuario='estandar';
        $nuevo_usuario->save();
      }
      else
      {
        $devuelve['ok'] = 0; //Ya existe en la bdd
      }
    }
    return $devuelve;
	}

}
