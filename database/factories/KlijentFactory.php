<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Klijent;
use Faker\Generator as Faker;

$factory->define(Klijent::class, function (Faker $faker) {
    return [
        'ime' => $faker -> firstname,
        'prezime' => $faker -> lastname,
        'kontakt' => $faker -> numerify('+381(##) ### ####')
    ];
});
