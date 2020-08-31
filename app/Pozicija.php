<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pozicija extends Model
{
    const POSLOVODJA = 'Poslovodja';
    const KASIR = 'Kasir';
    const ODRZAVANJE = 'Odrzavanje';
    const KONOBAR = 'Konobar';


    public $timestamps = false;
    protected $guarded = ['id'];
}
