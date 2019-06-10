<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conductores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conductores', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->increments('idconductores');
            $table->bigInteger('Numerodecedula');
            $table->string('PrimerNombre',45);
            $table->string('SegundoNombre',45);
            $table->string('Apellidos',45);
            $table->string('Telefono',45);
            $table->string('ciudad',45);
           
            $table->unsignedInteger('conductores_vehiculos');
            $table->foreign('conductores_vehiculos')
      ->references('idvehiculos')->on('Vehiculos')
      ->onDelete('cascade')
      ->onUpdate('cascade');
  
                 });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::dropIfExists('Conductores');
    }
}
