<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {

    return [
        'estado_id' => $faker->word,
        'nombre' => $faker->word,
        'descripcion' => $faker->word,
        'direcion' => $faker->word,
        'correo' => $faker->word,
        'telefono' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
