<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grad extends Model
{
    const NOVI_SAD = [
        'naziv' => 'Novi Sad',
        'postanski_kod' => '21000'
    ];
    const BEOGRAD = [
        'naziv' => 'Beograd',
        'postanski_kod' => '11000'
    ];
    const CACAK = [
        'naziv' => 'Cacak',
        'postanski_kod' => '32000'
    ];
    const NIS = [
        'naziv' => 'Nis',
        'postanski_kod' => '18000'
    ];

    public $timestamps = false;
    protected $guarded = ['id'];
}
