<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
session_start();
abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
	$TITULO_INICIO = "<h1> Ranking de las Páginas Webs de Citas </h1>";
}
