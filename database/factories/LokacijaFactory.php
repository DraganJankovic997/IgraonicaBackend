<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lokacija;
use Faker\Generator as Faker;

$factory->define(Lokacija::class, function (Faker $faker) {
    return [
        'naziv' => $faker -> unique()->city,
        'kvadratura' => $faker -> numberBetween($min = 50, $max = 1000),
        'adresa' => $faker -> address,
        'deo_grada' => $faker -> streetName,
        'grad_id' => function () {
            return factory(App\Grad::class)->create()->id;
        }
        
    ];
});
