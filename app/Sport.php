<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    const BILIJAR = 'Bilijar';
    const PIKADO = 'Pikado';
    const KUGLANJE = 'Kuglanje';

    public $timestamps = false;
    protected $guarded = ['id'];
}
