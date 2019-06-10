<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{
  public $timestamps = false;
  protected $table = 'conductores';  // tabla conductores
  protected $primaryKey = 'idconductores';
  protected $fillable = ['Numerodecedula','PrimerNombre','SegundoNombre','Apellidos','Telefono','ciudad','conductores_vehiculos']; // 




/*
idconductores
Numerodecedula
PrimerNombre
SegundoNombre
Apellidos
Telefono
ciudad
Tipousuario
conductores_vehiculos
*/
}
