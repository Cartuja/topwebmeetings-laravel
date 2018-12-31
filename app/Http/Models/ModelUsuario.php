<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

//Se basa en recoger los datos de la bdd
class ModelUsuario extends Model
{
  protected $table = 'Usuarios';
  protected $primaryKey='IdUsuario';


  //De esta manera modifica estos campos con la fecha actual del sistema
  //No es necesario llamarlos desde otro lugar
  const CREATED_AT = 'FechaAltaUsuario';
  const UPDATED_AT = 'FechaModificacionUsuario';

  //public $timestamps = false;
}
