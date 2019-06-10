<?php

use Illuminate\Database\Seeder;

class VehiculosTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vehiculos::class,10 )->create();
    }
}
