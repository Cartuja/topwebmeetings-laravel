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

		return response()->json(['respuesta' => $devuelve ], 200);
	}

}
