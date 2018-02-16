<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuestosModel extends Model
{
    protected $table='puestos';
    protected $fillable=['nombre'];

    public $timestamps=false;
}
