<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Termin;
use Faker\Generator as Faker;

$factory->define(Termin::class, function (Faker $faker) {
    return [
        'oznaka_termina'=> $faker -> lexify('????'),
        'cena_termina'=> $faker -> numberBetween($min = 50, $max = 15000)
    ];
});
