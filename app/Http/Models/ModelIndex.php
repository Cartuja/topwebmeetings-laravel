<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

//Se basa en recoger los datos de la bdd
class ModelIndex extends Model
{
  protected $table = 'Webs';
  protected $primaryKey='IdWeb';


  const CREATED_AT = 'FechaAltaWeb';
  const UPDATED_AT = 'FechaModificacionWeb';

  //public $timestamps = false;
}
