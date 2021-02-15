<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Servicio;
use Faker\Generator as Faker;

$factory->define(Servicio::class, function (Faker $faker) {

    return [
        'estado_id' => $faker->randomDigitNotNull,
        'categoria_id' => $faker->randomDigitNotNull,
        'nombre' => $faker->word,
        'descripcion' => $faker->word,
        'costo' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
