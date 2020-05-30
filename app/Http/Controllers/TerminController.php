<?php

namespace App\Http\Controllers;

use App\Http\Requests\TerminRequest;
use Illuminate\Http\Request;
use App\Termin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Termin::get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TerminRequest $request)
    {
        return Termin::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  $termin = Termin::findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TerminRequest $request, $id)
    {
        $termin = Termin::findOrFail($id);
        $termin -> update($request->all());
        return $termin;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $termin = Termin::findOrFail($id);
        $termin -> delete();
        return "Termin uspesno izbrisan!";
    }
}
