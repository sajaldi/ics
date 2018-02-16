<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventosModel extends Model
{
  protected $table='eventos';
  //protected $primaryKey= "idCategoria";

  public$timestamps=false;

  protected $fillable= ['nombre'];
}
