<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PojedinacRequest;
use App\Pojedinac;
use App\Klijent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PojedinacController extends Controller
{
    public function getAll()
    {
        return Pojedinac::with('klijent')->get();
    }
    public function store(PojedinacRequest $request)
    {
        return Pojedinac::create($request->validated());
    }
    public function getByKlijentId($klijent_id)
    {
        return Pojedinac::where('klijent_id',$klijent_id)->get();
    }
}
