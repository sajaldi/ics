<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CausasModel extends Model
{
  protected $table='causas';

  public$timestamps=false;

  protected $fillable= ['id','nombre'];
}
