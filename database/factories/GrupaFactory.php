<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grupa;
use Faker\Generator as Faker;

$factory->define(Grupa::class, function (Faker $faker) {
    return [
        'klijent_id' => function () {
            return factory(App\Klijent::class)->create()->id;
        },
        'naziv' => $faker -> company,
        'opis' => $faker ->text($maxNbChars = 200) 
    ];
});
