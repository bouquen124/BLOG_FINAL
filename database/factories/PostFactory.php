<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'estado_id' => $faker->randomDigitNotNull,
        'titulo' => $faker->word,
        'subtitulo' => $faker->word,
        'contenido' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
