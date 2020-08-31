<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokacija extends Model
{

    const BULEVAR = [
        'naziv' => 'Igraonica Bulevar',
        'kvadratura' => 2000,
        'adresa' => 'Bulevar oslobodjenja 23',
        'deo_grada' => 'Bulevar',
        'grad_id' => 1
    ];
    const SAVA_CENTAR = [
        'naziv' => 'Igraonica Sava centar',
        'kvadratura' => 4000,
        'adresa' => 'Milentija Popovica 32',
        'deo_grada' => 'Novi Beograd',
        'grad_id' => 2
    ];
    const LIMAN = [
        'naziv' => 'Igraonica Liman 3',
        'kvadratura' => 600,
        'adresa' => 'Bulevar Cara Lazara 32',
        'deo_grada' => 'Liman',
        'grad_id' => 1
    ];
    public $timestamps = false;
    protected $guarded = ['id'];

    public function grad()
    {
        return $this->belongsTo('App\Grad', 'grad_id', 'id');
    }
}
