<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelIndex;

//Intermediario entre el modelo y las vistas

class ControllerPageIndex extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Request $request)
	{
		//$this->request = $request;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function route()
	{
		return view('inicio');
	}

	public function Webs()
	{
		$webs = ModelIndex::all();
		return view('inicio', compact('webs'));
	}

	public static function OneWeb($nombre){
		$web = ModelIndex::Where('NombreWeb', $nombre)->get();
		return view('oneweb', compact('web'));
	}

}
