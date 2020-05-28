<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teren;
use Faker\Generator as Faker;

$factory->define(Teren::class, function (Faker $faker) {
    return [
        'naziv' => $faker -> lexify('?????-##'),
        'sport_id' => function () {
            return factory(App\Sport::class)->create()->id;
        },
        'lokacija_id' => function () {
            return factory(App\Lokacija::class)->create()->id;
        }
    ];
});
