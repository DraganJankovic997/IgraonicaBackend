<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rezervacija;
use Faker\Generator as Faker;

$factory->define(Rezervacija::class, function (Faker $faker) {
    return [
        'teren_id' => function () {
            return factory(App\Teren::class)->create()->id;
        },
        'klijent_id' => function () {
            return factory(App\Klijent::class)->create()->id;
        },
        'racun_id' => function () {
            return factory(App\Racun::class)->create()->id;
        }
    ];
});
