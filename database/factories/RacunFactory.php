<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Racun;
use Faker\Generator as Faker;

$factory->define(Racun::class, function (Faker $faker) {
    return [
        'ukupno' => $faker -> numberBetween($min = 50, $max = 10000),
        'placeno' => $faker -> randomElement(array(0,1))
    ];
});
