<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuarios;
use Faker\Generator as Faker;

$factory->define(Usuarios::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'operatividad' => $faker->word,
        'roll_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
