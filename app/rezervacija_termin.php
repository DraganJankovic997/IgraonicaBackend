<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rezervacija_termin extends Model
{
    protected $table = 'rezervacija_termins';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function rezervacija()
    {
        return $this->belongsTo('App\Rezervacija', 'rezervacija_id', 'id');
    }

    public function termin()
    {
        return $this->belongsTo('App\Termin', 'termin_id', 'id');
    }
}
