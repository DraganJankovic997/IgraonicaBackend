<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pojedinac extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function klijent()
    {
        return $this ->belongsTo('App\Klijent', 'klijent_id');
    }
}
