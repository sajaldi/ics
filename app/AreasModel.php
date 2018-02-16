<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreasModel extends Model
{

  protected $table='areas';
  protected $fillable= ['nombre','planta_id'];
  //protected $primaryKey= "idCategoria";

  public $timestamps=false;

  public function planta()
    {
      return $this->belongsTo('App\PlantasModel');
    }

}
