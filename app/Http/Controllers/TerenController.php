<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Teren;
use App\Sport;
use App\Lokacija;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TerenRequest;

class TerenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Teren::with('sport') -> with('lokacija')->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TerenRequest $request)
    {
        return Teren::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teren = Teren::with('sport') -> with('lokacija') -> findOrFail($id);
        return $teren;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TerenRequest $request, $id)
    {
        $teren = Teren::findOrFail($id);
        $teren -> update($request->all());
        return $teren;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teren = Teren::findOrFail($id);
        $teren -> delete();
        return "Teren uspesno izbrisan!";
    }
}
