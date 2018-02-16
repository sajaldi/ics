<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquiposModel extends Model
{
    protected $table='equipos';
    protected $fillable=['nombre','area_id','equipo_id'];

    public $timestamps=false;

    public function area()
      {
        return $this->belongsTo('App\AreasModel');
      }


}
