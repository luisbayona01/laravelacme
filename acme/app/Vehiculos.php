<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{  
  public $timestamps = false;
  protected $table = 'vehiculos';  // tabla vehiculos
  protected $primaryKey = 'idvehiculos';
  protected $fillable = ['placa','color','marca','tipodevehiculo']; // campos de  la tabla

    
}
