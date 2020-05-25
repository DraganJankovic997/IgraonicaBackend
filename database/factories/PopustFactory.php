<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Popust;
use Faker\Generator as Faker;

$factory->define(Popust::class, function (Faker $faker) {
    return [
        'oznaka_popust' => $faker -> word,
        'vrednost_popust' => $faker -> numberBetween($min = 5, $max = 50)
    ];
});
