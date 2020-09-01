<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racun extends Model
{
    const RACUN_PRVI = [
        'ukupno' => 720,
        'placeno' => 1
    ];

    const RACUN_DRUGI = [
        'ukupno' => 1020,
        'placeno' => 0
    ];

    protected $guarded = ['id'];
}
