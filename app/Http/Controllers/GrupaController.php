<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Grupa;
use App\Klijent;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\GrupaRequest;

class GrupaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupas = Grupa::with('klijent') ->get();
        return $grupas;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupaRequest $request)
    {
        return Grupa::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupa = Grupa::with('klijent') -> findOrFail($id);
        return $grupa;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GrupaRequest $request, $id)
    {
        $grupa = Grupa::findOrFail($id);
        $grupa -> update($request->all());
        return $grupa;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupa = Grupa::findOrFail($id);
        $grupa -> delete();
        return "Grupa uspesno izbrisana !";
    }
}
