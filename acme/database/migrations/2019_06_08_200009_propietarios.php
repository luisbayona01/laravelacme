<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class propietarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('propietarios', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->increments('idpropietarios');
            $table->bigInteger('Numerodecedula');
            $table->string('PrimerNombre',45);
            $table->string('SegundoNombre',45);
            $table->string('Apellidos',45);
            $table->string('Telefono',45);
            $table->string('ciudad',45);
            $table->unsignedInteger('propietarios_vehiculos');
            $table->foreign('propietarios_vehiculos')
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
        Schema::dropIfExists('propietarios');
    }
}
