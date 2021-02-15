<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\t_imagenes;
use Faker\Generator as Faker;

$factory->define(t_imagenes::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'descripcion' => $faker->word,
        'imagen' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
