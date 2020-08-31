<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teren;
use Faker\Generator as Faker;

$factory->define(Teren::class, function (Faker $faker) {
    return [
        'naziv' => $faker -> lexify('?????-##'),
        'sport_id' => random_int(1, 3),
        'lokacija_id' => random_int(1, 3)
    ];
});
