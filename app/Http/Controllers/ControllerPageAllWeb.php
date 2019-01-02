<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelAllWeb;

//Intermediario entre el modelo y las vistas

class ControllerPageAllWeb extends Controller {

	public static function route(){
		return view('allweb');
	}

}
