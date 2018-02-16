<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrioridadesModel extends Model
{
  protected $table='prioridades';
  //protected $primaryKey= "idCategoria";

  public$timestamps=false;

  protected $fillable= [
    'nombre'
  ];


}
