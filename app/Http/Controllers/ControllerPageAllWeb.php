<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelIndex;

//Intermediario entre el modelo y las vistas

class ControllerPageAllWeb extends Controller {

	public static function route(){
		$webs = ModelIndex::Where('FechaBajaWeb', null)->get();
		return view('allweb', ['webs' => $webs]);
	}

}
