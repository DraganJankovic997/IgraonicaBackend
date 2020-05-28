<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Racun_Pice;
use Faker\Generator as Faker;

$factory->define(Racun_Pice::class, function (Faker $faker) {
    return [
        'pice_id' => function () {
            return factory(App\Pice::class)->create()->id;
        },
        'racun_id' => function () {
            return factory(App\Racun::class)->create()->id;
        }
    ];
});
