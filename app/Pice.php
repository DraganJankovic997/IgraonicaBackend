<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pice extends Model
{
    const FANTA = [
        'Naziv_Pica' => 'Fanta',
        'Cena_Pica' => 120
    ];

    const COCA_COLA = [
        'Naziv_Pica' => 'Coca Cola',
        'Cena_Pica' => 120
    ];

    const ZAJECARSKO = [
        'Naziv_Pica' => 'Zajecarsko Pivo',
        'Cena_Pica' => 100
    ];

    const KISELA_VODA = [
        'Naziv_Pica' => 'Kisela Voda',
        'Cena_Pica' => 80
    ];


    public $timestamps = false;
    protected $guarded = ['id'];
}
