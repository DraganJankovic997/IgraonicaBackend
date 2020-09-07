<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    const BILIJAR =[
        'naziv' => 'Bilijar',
        'cena_po_satu'=> 300
    ]; 
    const PIKADO =[
        'naziv' => 'Pikado',
        'cena_po_satu'=> 350
    ]; 
    const KUGLANJE =[
        'naziv' => 'Kuglanje',
        'cena_po_satu'=> 550
    ]; 

    public $timestamps = false;
    protected $guarded = ['id'];
}
