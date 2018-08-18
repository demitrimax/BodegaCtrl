<?php

use Faker\Generator as Faker;
use VentasApp\Clientes;

$factory->define(Clientes::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->name,
        'RFC'=>$faker->ean8,
        'PorcDescuento'=>$faker->randomElement($array = array ('25%','29%','30%','35%','40%')),
    ];
});
