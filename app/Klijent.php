<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klijent extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
}
