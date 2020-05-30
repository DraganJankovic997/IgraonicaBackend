<?php

namespace App\Http\Controllers;

use App\Http\Requests\LokacijaRequest;
use Illuminate\Http\Request;
use App\Lokacija;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LokacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokacija = Lokacija::with('grad')-> paginate(10);
        return $lokacija;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LokacijaRequest $request)
    {
        return Lokacija::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lokacija = Lokacija::with('grad') -> findOrFail($id);
        return $lokacija;
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
        $lokacija = Lokacija::findOrFail($id);
        $lokacija -> update($request->all());
        return $lokacija;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lokacija = Lokacija::findOrFail($id);
        $lokacija -> delete();
        return "Lokacija uspesno izbrisano iz grada!";
    }

    public function lokacijasUnpaginated() 
    {
        return Lokacija::all();
    }
}
