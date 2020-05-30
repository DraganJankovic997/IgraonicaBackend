<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\rezervacija_termin;
use App\Rezervacija;
use App\Termin;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Rezervacija_TerminRequest;

class Rezervacija_TerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rezervacijaTermins = rezervacija_termin::with('rezervacija') -> with('termin')->paginate(10);
        return $rezervacijaTermins;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Rezervacija_TerminRequest $request)
    {
        return rezervacija_termin::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rezervacijaTermin = rezervacija_termin::with('rezervacija') -> with('termin') -> findOrFail($id);
        return $rezervacijaTermin;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rezervacijaTermin = rezervacija_termin::findOrFail($id);
        $rezervacijaTermin -> update($request->all());
        return $rezervacijaTermin;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rezervacijaTermin = rezervacija_termin::findOrFail($id);
        $rezervacijaTermin -> delete();
        return "Rezervacija uspesno izbrisana sa termina!";
    }
}
