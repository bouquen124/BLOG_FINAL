<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Aliado;
use Faker\Generator as Faker;

$factory->define(Aliado::class, function (Faker $faker) {

    return [
        'estado_id' => $faker->randomDigitNotNull,
        'nombre' => $faker->word,
        'descripcion' => $faker->word,
        'direcion' => $faker->word,
        'correo' => $faker->word,
        'telefono' => $faker->word,
        'facebook' => $faker->word,
        'twitter' => $faker->word,
        'instagram' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
