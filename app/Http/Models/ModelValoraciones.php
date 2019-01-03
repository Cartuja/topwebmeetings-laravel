<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

//Se basa en recoger los datos de la bdd
class ModelValoraciones extends Model
{
  protected $table = 'Valoraciones';
  protected $primaryKey='IdUsuario';
  protected $primaryKey2='IdWeb';
  protected $primaryKey3='TipoVotacion';

  const CREATED_AT = 'FechaAltaValoracion';
  const UPDATED_AT = 'FechaModificacionValoracion';

  //public $timestamps = false;
}
