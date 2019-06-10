<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propietarios extends Model
{
   public $timestamps = false;
  protected $table = 'propietarios';  // tabla vehiculos
  protected $primaryKey = 'idpropietarios';
  protected $fillable = ['Numerodecedula','PrimerNombre','SegundoNombre','Apellidos','Telefono','ciudad','propietarios_vehiculos'];
}
