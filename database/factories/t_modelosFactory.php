<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\t_modelos;
use Faker\Generator as Faker;

$factory->define(t_modelos::class, function (Faker $faker) {

    return [
        'nombre_modelo' => $faker->word,
        'descripcion_modelo' => $faker->word,
        'modelo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
