<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racun_Pice extends Model
{
    protected $table = 'racun_pices';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function racun()
    {
        return $this->belongsTo('App\Racun', 'racun_id', 'id');
    }

    public function pice()
    {
        return $this->belongsTo('App\Pice', 'pice_id', 'id');
    }
}
