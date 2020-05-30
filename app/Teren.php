<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teren extends Model
{
    protected $table = 'terens';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function sport()
    {
        return $this->belongsTo('App\Sport', 'sport_id', 'id');
    }

    public function lokacija()
    {
        return $this->belongsTo('App\Lokacija', 'lokacija_id', 'id');
    }
}
