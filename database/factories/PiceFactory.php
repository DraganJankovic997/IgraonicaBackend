<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pice;
use Faker\Generator as Faker;

$factory->define(Pice::class, function (Faker $faker) {
    return [
        'Naziv_Pica' => $faker -> word,
        'Cena_Pica' => $faker -> numberBetween($min = 50, $max = 1000)
    ];
});
