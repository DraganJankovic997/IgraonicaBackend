<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Racun_Pice;
use App\Racun;
use App\Pice;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Racun_PiceRequest;


class Racun_PiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $racunPices = Racun_Pice::with('racun') -> with('pice') ->paginate(10);
        return $racunPices;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Racun_PiceRequest $request)
    {
        $racun_pice = $request->validated();
        Racun_Pice::create($racun_pice);
        $pica = Racun_Pice::where('racun_id', $racun_pice['racun_id'])->with('pice')->get();
        $ukupno = 0;
        foreach ($pica as $rp)
        {
            $ukupno += $rp['kolicina'] * $rp['pice']['Cena_Pica'];
        }
        $racun = Racun::findOrFail($racun_pice['racun_id']);
        $racun->ukupno = $ukupno;


        return $racun->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $racunPice = Racun_Pice::with('racun') -> with('pice') -> findOrFail($id);
        return $racunPice;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Racun_PiceRequest $request, $id)
    {
        $racunPice = Racun_Pice::findOrFail($id);
        $racunPice -> update($request->all());
        return $racunPice;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $racunPice = Racun_Pice::findOrFail($id);

        $racunPiceID = $racunPice->racun_id;
        $racunPice -> delete();
        $pica = Racun_Pice::where('racun_id', $racunPiceID)->with('pice')->get();
        $ukupno = 0;
        foreach ($pica as $rp)
        {
            $ukupno += $rp['kolicina'] * $rp['pice']['Cena_Pica'];
        }
        $racun = Racun::findOrFail($racunPiceID);
        $racun->ukupno = $ukupno;

        $racun->save();

        return "Pice uspesno izbrisano sa racuna!";
    }

    public function getForRacun($racun_id)
    {
        return  Racun_Pice::where('racun_id', $racun_id)->with('pice')->get();
    }
}
