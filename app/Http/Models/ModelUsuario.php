<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUsuario extends Model
{
  protected $table = 'Usuarios';
  protected $primaryKey='IdUsuario';

  const CREATED_AT = 'FechaAltaUsuario';
  const UPDATED_AT = 'FechaModificacionUsuario';

  //public $timestamps = false;
}
