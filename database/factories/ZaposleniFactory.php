<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Zaposleni;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Zaposleni::class, function (Faker $faker) {
    return [
        'ime' => $faker->firstName,
        'prezime' => $faker->lastName,
        'email' => $faker->unique()->email,
        'brojtelefona' => $faker->phoneNumber,
        'jmbg' => $faker->unique()->randomFloat(2,10,100)
    ];
});
