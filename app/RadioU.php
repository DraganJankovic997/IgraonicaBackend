<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadioU extends Model
{
    protected $table = 'radio_us';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id', 'id');
    }
    public function lokacija()
    {
        return $this->belongsTo('App\Lokacija','lokacija_id', 'id');
    }
    public function pozicija()
    {
        return $this->belongsTo('App\Pozicija','pozicija_id','id');

    }
}
