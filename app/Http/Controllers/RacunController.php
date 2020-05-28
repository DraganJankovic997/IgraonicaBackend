<?php

namespace App\Http\Controllers;

use App\Http\Requests\RacunRequest;
use Illuminate\Http\Request;
use App\Racun;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RacunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Racun::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RacunRequest $request)
    {
        return Racun::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  $racun = Racun::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RacunRequest $request, $id)
    {
        $racun = Racun::findOrFail($id);
        $racun -> update($request->all());
        return $racun;    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $racun = Racun::findOrFail($id);
        $racun -> delete();
        return "Racun uspesno izbrisan!";
    }
}
