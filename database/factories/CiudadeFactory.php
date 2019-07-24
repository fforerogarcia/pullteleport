<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Ciudade;

$factory->define(Ciudade::class, function (Faker $faker) {
    return [
        'codigo_dane' => $faker->name,
        'nombre' => $faker->name,
        'departamento' => $faker->name,
    ];
});
