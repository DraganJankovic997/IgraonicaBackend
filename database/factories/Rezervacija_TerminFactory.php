<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rezervacija_Termin;
use Faker\Generator as Faker;

$factory->define(Rezervacija_Termin::class, function (Faker $faker) {
    return [
        'rezervacija_id' => function () {
            return factory(App\Rezervacija::class)->create()->id;
        },
        'termin_id' => function () {
            return factory(App\Termin::class)->create()->id;
        },
        'datum' => $faker -> dateTimeThisCentury($max = 'now', $timezone = null)
    ];
});
