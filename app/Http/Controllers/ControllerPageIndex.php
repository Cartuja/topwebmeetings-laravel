<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelIndex;

//Intermediario entre el modelo y las vistas

class ControllerPageIndex extends Controller {

	public function route()
	{
		return view('inicio');
	}

	public function Webs()
	{
		$webs = ModelIndex::all();
		return view('inicio', compact('webs'));
	}

}
