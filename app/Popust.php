<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Popust extends Model
{
    const STUDENTSKI = [
        'oznaka_popusta' => 'Studentski popust',
        'vrednost_popusta' => 20
    ];
    const REDOVNI = [
        'oznaka_popusta' => 'Redovan gost',
        'vrednost_popusta' => 10
    ];
    const KUPON = [
        'oznaka_popusta' => 'Kupon',
        'vrednost_popusta' => 30
    ];

    public $timestamps = false;
    protected $guarded = ['id'];
}
