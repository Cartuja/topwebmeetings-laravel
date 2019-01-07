<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ModelIndex;

//Intermediario entre el modelo y las vistas

class ControllerModificarWeb extends Controller {

  public static function route(){
    $webs = ModelIndex::Where('FechaBajaWeb', null)->get();
    return view('modificarweb', compact('webs'));
  }

  public static function NextWeb($input)
  {
    //Recogemos todas las Webs
    $total_webs = ModelIndex::Where('FechaBajaWeb', null)->get();
    if(isset($input['id_web']))
    {
      $web = ModelIndex::Where('IdWeb', '>' , $input['id_web'])->Where('FechaBajaWeb', null)->get();
      //$resultado = ModelIndex::Where('IdWeb', '>' , $input['id_web'])->Where('FechaBajaWeb', null)->max('IdWeb'); //Cogemos ultimo id de la web
      $devuelve = $web; //Devolvemos la web
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
    $total_webs = ModelIndex::Where('FechaBajaWeb', null)->get();
    if(isset($input['id_web']))
    {
      $web = ModelIndex::Where('IdWeb', '<' , $input['id_web'])->orderBy('IdWeb','DESC')->Where('FechaBajaWeb', null)->get();
      $devuelve = $web; //Devolvemos la web
    }
    else
    {
      $devuelve = 0;
    }
    return $devuelve;
  } //Fin funcion anterior web

  public static function guardarWeb($input)
  {
    $devuelve['ok'] = 0;
    if(isset($input['nombre_web']) && isset($input['descripcion_web']) && isset($input['logo_web']) && isset($input['url_web'])
    && isset($input['caracteristica_1_web']) && isset($input['caracteristica_2_web']) && isset($input['caracteristica_3_web'])
    && isset($input['tags']) && isset($input['id_web']))
    {
      if(trim($input['nombre_web']) != '' && trim($input['descripcion_web']) != '' && trim($input['url_web']) != ''
      && trim($input['caracteristica_1_web']) && trim($input['caracteristica_2_web']) != '' && trim($input['caracteristica_3_web']) != ''
      && trim($input['tags']) != '' && trim($input['id_web']) != '')
      {
        if($input['id_web'] == 0)
        {
          $nueva_web = new ModelIndex();
          $nueva_web->NombreWeb=$input['nombre_web'];
          $nueva_web->LogoWebs=$input['logo_web'];
          $nueva_web->DescripcionWeb=$input['descripcion_web'];
          $nueva_web->LogoWebs=$input['logo_web'];
          $nueva_web->UrlWeb=$input['url_web'];
          $nueva_web->Caracteristica1=$input['caracteristica_1_web'];
          $nueva_web->Caracteristica2=$input['caracteristica_2_web'];
          $nueva_web->Caracteristica3=$input['caracteristica_3_web'];
          $nueva_web->Tags=$input['tags'];
          $nueva_web->save();
          $devuelve['ok'] = 2;
        }
        else
        {
          $nueva_web = ModelIndex::find($input['id_web']);
          $nueva_web->NombreWeb=$input['nombre_web'];
          $nueva_web->LogoWebs=$input['logo_web'];
          $nueva_web->DescripcionWeb=$input['descripcion_web'];
          $nueva_web->LogoWebs=$input['logo_web'];
          $nueva_web->UrlWeb=$input['url_web'];
          $nueva_web->Caracteristica1=$input['caracteristica_1_web'];
          $nueva_web->Caracteristica2=$input['caracteristica_2_web'];
          $nueva_web->Caracteristica3=$input['caracteristica_3_web'];
          $nueva_web->Tags=$input['tags'];
          $nueva_web->save();
          $devuelve['ok'] = 1;
        }
      }
      else
      {
        $devuelve['ok'] = 0;
      }
    }
    return $devuelve;
  } //Fin funcion guardar web

  public static function EliminarWeb($input)
  {
    $devuelve['ok'] = 0;
    if(isset($input['id_web']))
    {
      if(trim($input['id_web']) != '')
      {
        $eliminar_web = ModelIndex::find($input['id_web']);
        $eliminar_web->FechaBajaWeb= date('Y-m-d-h-i-s');
        $eliminar_web->save();
        $devuelve['ok'] = 1;
      }
      else
      {
        $devuelve['ok'] = 0;
      }
    }
    return $devuelve;
  } //Fin funcion eliminar web
}
