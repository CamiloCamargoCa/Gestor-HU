<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\HistoriasDetalle;
use Faker\Generator as Faker;

$factory->define(HistoriasDetalle::class, function (Faker $faker) {

    return [
        'id_historia' => $faker->randomDigitNotNull,
        'tamaño' => $faker->word,
        'esfuerzo_horas' => $faker->randomDigitNotNull,
        'num_sprint' => $faker->randomDigitNotNull,
        'num_release' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'id_desarrollador' => $faker->randomDigitNotNull,
        'id_tester' => $faker->randomDigitNotNull,
        'estado' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
