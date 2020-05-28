<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grad;
use Faker\Generator as Faker;

$factory->define(Grad::class, function (Faker $faker) {
    return [
        'naziv' => $faker -> city,
        'postanski_kod' => $faker -> postcode
    ];
});
