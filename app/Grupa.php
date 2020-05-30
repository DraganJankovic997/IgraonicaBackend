<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupa extends Model
{
    protected $table = 'grupas';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function klijent()
    {
        return $this->belongsTo('App\Klijent', 'klijent_id', 'id');
    }
}
