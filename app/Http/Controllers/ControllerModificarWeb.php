<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelIndex;

//Intermediario entre el modelo y las vistas

class ControllerModificarWeb extends Controller {

  public static function route(){
    $webs = ModelIndex::Where('IdWeb', 1)->get();
    return view('modificarweb', compact('webs'));
  }

  public static function mostrarWeb($input){
    if(isset($input['id_web'])){
      $web = ModelIndex::Where('IdWeb', $input['id_web']+1)->orderBy('IdWeb')->get();
      $devuelve = $web;
    } else{
      $devuelve = 0;
    }

    return $devuelve;
  }
}
