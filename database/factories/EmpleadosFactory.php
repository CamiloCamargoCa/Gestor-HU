<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empleados;
use Faker\Generator as Faker;

$factory->define(Empleados::class, function (Faker $faker) {

    return [
        'cedulanombre' => $faker->randomDigitNotNull,
        'nombre' => $faker->word,
        'salario' => $faker->word,
        'Estado' => $faker->word,
        'id_roll' => $faker->randomDigitNotNull,
        'id_proyecto' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
