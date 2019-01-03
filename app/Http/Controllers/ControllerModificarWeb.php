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

  public static function NextWeb($input)
  {
    //Recogemos todas las Webs
    $total_webs = ModelIndex::all();
    if(isset($input['id_web']))
    {
      $web = ModelIndex::Where('IdWeb', $input['id_web']+1)->orderBy('IdWeb')->get();
        if(count($total_webs) == $input['id_web']) //Si llega a la ultima web de la base de datos
        {
          $devuelve = 0; //Devolvemos 0
        }
        else
        {
          $devuelve = $web; //Devolvemos la web
        }

    }
    else
    {
      $devuelve = 0;
    }
    return $devuelve;
  } //Fin funcion siguiente web

  public static function PreviaWeb($input)
  {
    //Recogemos todas las Webs
    $total_webs = ModelIndex::all();
    if(isset($input['id_web']))
    {
      $web = ModelIndex::Where('IdWeb', $input['id_web']-1)->orderBy('IdWeb')->get();
        if($input['id_web'] == 0) //Si llega a la ultima web de la base de datos
        {
          $devuelve = 0; //Devolvemos 0
        }
        else
        {
          $devuelve = $web; //Devolvemos la web
        }

    }
    else
    {
      $devuelve = 0;
    }
    return $devuelve;
  } //Fin funcion anterior web

  public static function guardarWeb($input){

  } //Fin funcion guardar web
}
