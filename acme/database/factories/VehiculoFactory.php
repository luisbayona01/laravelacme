<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Vehiculos;
use Faker\Generator as Faker;

$factory->define(vehiculos::class, function (Faker $faker) {
    return [
        'placa'=> $faker->bankAccountNumber,
        'color'=> $faker->colorName,
        'marca'=>$faker->name,
       'tipodevehiculo'=>$faker->name   ];
});
