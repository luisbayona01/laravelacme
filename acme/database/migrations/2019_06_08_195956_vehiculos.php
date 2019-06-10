<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Vehiculos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idvehiculos');
            $table->string('placa',45);
            $table->string('color',45);
            $table->string('marca',45);
            $table->string('tipodevehiculo',45);
          


                 });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('Vehiculos');
    }
}
