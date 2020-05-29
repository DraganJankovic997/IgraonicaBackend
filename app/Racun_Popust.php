<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racun_Popust extends Model
{
    protected $table = 'racun_popusts';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function racun()
    {
        return $this->belongsTo('App\Racun', 'racun_id', 'id');
    }

    public function popust()
    {
        return $this->belongsTo('App\Popust', 'popust_id', 'id');
    }
}
