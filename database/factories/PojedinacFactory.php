<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pojedinac;
use Faker\Generator as Faker;

$factory->define(Pojedinac::class, function (Faker $faker) {
    return [
        'klijent_id' => function () {
            return factory(App\Klijent::class)->create()->id;
        },
        'jmbg' => $faker-> unique()->regexify('[0-9]{13}')
    ];
});
