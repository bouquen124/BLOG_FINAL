<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ilustrable;
use Faker\Generator as Faker;

$factory->define(Ilustrable::class, function (Faker $faker) {

    return [
        'ilustrable_id' => $faker->randomDigitNotNull,
        'ilustrable_type' => $faker->word,
        'url' => $faker->word,
        'urls' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
