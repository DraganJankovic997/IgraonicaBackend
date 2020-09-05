<?php

namespace App\Http\Controllers;

use App\Rezervacija;
use App\Http\Requests\RezervacijaRequest;
use App\Sport;

class RezervacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rezervacijas = Rezervacija::with('teren') -> with('klijent') -> with('racun')->get();
        foreach ($rezervacijas as $index => $rez) {
            $rezervacijas[$index]['teren']['sport'] = Sport::findOrFail($rez['teren']['sport_id']);
        }

        return $rezervacijas;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RezervacijaRequest $request)
    {
        return Rezervacija::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rezervacija = Rezervacija::with('teren') -> with('klijent') -> with('racun') -> findOrFail($id);
        return $rezervacija;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RezervacijaRequest $request, $id)
    {
        $rezervacija = Rezervacija::findOrFail($id);
        $rezervacija -> update($request->all());
        return $rezervacija;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rezervacija = Rezervacija::findOrFail($id);
        $rezervacija -> delete();
        return "Rezervacija uspesno izbrisana!";
    }
}
