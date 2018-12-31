<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

//Se basa en recoger los datos de la bdd
class ModelComentario extends Model
{
  protected $table = 'Comentarios';
  protected $primaryKey='IdComentario';


  //const CREATED_AT = 'FechaAltaUsuario';
  //const UPDATED_AT = 'FechaModificacionUsuario';

  //public $timestamps = false;
}
