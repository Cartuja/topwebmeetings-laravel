<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Models\ModelUsuario;


abstract class ControllerUsuario extends BaseController {

	use DispatchesCommands, ValidatesRequests;


  function Obtener1Usuario($id_usuario)
  {
    $usuario=ModelUsuario::where('id',1)->get();

    return $usuario;


  }

}
