<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Actividades;
use Faker\Generator as Faker;

$factory->define(Actividades::class, function (Faker $faker) {

    return [
        'cód_proyecto' => $faker->randomDigitNotNull,
        'id_pbi' => $faker->randomDigitNotNull,
        'num_sprint' => $faker->randomDigitNotNull,
        'nom_actividad' => $faker->word,
        'id_ingeniero' => $faker->randomDigitNotNull,
        'fech_ini_real' => $faker->word,
        'hras_esfuerzo' => $faker->randomDigitNotNull
    ];
});
