<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'ime' => $faker->firstname,
        'prezime' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'broj_telefona' => $faker -> numerify('+381(##) ### ####'),
        'jmbg' => $faker-> unique()->regexify('[0-9]{13}'),
        'pozicija_trenutna_id' => function () {
            return factory(App\Pozicija::class)->create()->id;
        },
        'lokacija_trenutna_id' => function () {
            return factory(App\Lokacija::class)->create()->id;
        },
        'remember_token' => Str::random(10)
    ];
});
