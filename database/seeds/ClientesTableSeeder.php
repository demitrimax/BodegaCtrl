<?php

use Illuminate\Database\Seeder;
use VentasApp\Clientes;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //llamar al model factory
        factory(Clientes::class, 100)->create();
    }
}
