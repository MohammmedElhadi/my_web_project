<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Event::class, function (Faker $faker) {
    return [
            'nom' => $faker->sentence(5),
            'description' => $faker->paragraph(5),
            'edition' => '1',

            'nombre_min_participant' => '50',
            'number_max_participant' => '100',
            'etat' => 'programe',
    ];
});
