<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pozicija;
use Faker\Generator as Faker;

$factory->define(Pozicija::class, function (Faker $faker) {
    return [
        'naziv' => $faker -> jobTitle
    ];
});
