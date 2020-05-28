<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RadioU;
use Faker\Generator as Faker;

$factory->define(RadioU::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'radio_od' => $faker -> dateTimeInInterval($startDate = '-30 years', $interval = '+ 5 days', $timezone = null),
        'radio_do' => $faker -> dateTimeThisYear($max = 'now', $timezone = null),
        'lokacija_id' => function () {
            return factory(App\Lokacija::class)->create()->id;
        },
        'pozicija_id' => function () {
            return factory(App\Pozicija::class)->create()->id;
        }
    ];
});
