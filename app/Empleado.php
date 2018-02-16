<?php

namespace App;

//use Illuminate\Database\Eloquent\ Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empleado extends Authenticatable
{

  use Notifiable;


  protected $fillable=['codigoempleado','nombre','rol_id','puesto_id','email','password',];


  protected $hidden = [
      'password', 'remember_token',
  ];

  public $timestamps=false;

  public function rol()
    {
      return $this->belongsTo('App\RolesModel');
    }

    public function puesto()
      {
        return $this->belongsTo('App\PuestosModel');
      }


}
