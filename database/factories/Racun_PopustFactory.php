<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Racun_Popust;
use Faker\Generator as Faker;

$factory->define(Racun_Popust::class, function (Faker $faker) {
    return [
        'popust_id' => function () {
            return factory(App\Popust::class)->create()->id;
        },
        'racun_id' => function () {
            return factory(App\Racun::class)->create()->id;
        }
    ];
});
