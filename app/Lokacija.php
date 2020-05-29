<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokacija extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];

    public function grad()
    {
        return $this->belongsTo('App\Grad', 'grad_id', 'id');
    }
}
