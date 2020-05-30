<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    protected $table = 'rezervacijas';
    protected $guarded = ['id'];

    public function teren()
    {
        return $this->belongsTo('App\Teren', 'teren_id', 'id');
    }

    public function klijent()
    {
        return $this->belongsTo('App\Klijent', 'klijent_id', 'id');
    }

    public function racun()
    {
        return $this->belongsTo('App\Racun', 'racun_id', 'id');
    }
}
