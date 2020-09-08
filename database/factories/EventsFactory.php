<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Event;
$factory->define(App\Event::class, function (Faker $faker) {
    return [
            'nom' => $faker->sentence(5),
            'description' => $faker->paragraph(5),
            'logo' => 'events/il_570xN.1979164891_base.jpg',
            'edition' => $faker->numberBetween(1,6),
            'date_debut' => $faker->date(),
            'date_fin' => $faker->date(),
            'nombre_min_participant' => 50,
            'nombre_max_participant' => 100,
            'etat' => $faker->randomElement(['programe', 'annule','termine']),
            'category_id' => $faker->numberBetween(1,6),
        ];
});
