<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Rolles;
use Faker\Generator as Faker;

$factory->define(Rolles::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'id_proyecto' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
