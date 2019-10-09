<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\HistoriasUsuarios;
use Faker\Generator as Faker;

$factory->define(HistoriasUsuarios::class, function (Faker $faker) {

    return [
        'id_proyecto' => $faker->randomDigitNotNull,
        'tipo_historia' => $faker->word,
        'titulo_historia' => $faker->word,
        'roll_id' => $faker->randomDigitNotNull,
        'descripcion' => $faker->text,
        'reque_interfaz' => $faker->text,
        'dependencia' => $faker->text
    ];
});
