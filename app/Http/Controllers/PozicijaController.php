<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PozicijaRequest;
use App\Pozicija;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PozicijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pozicija::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PozicijaRequest $request)
    {
        return Pozicija::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  $pozicija = Pozicija::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PozicijaRequest $request, $id)
    {
        $pozicija = Pozicija::findOrFail($id);
        $pozicija -> update($request->all());
        return $pozicija;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pozicija = Pozicija::findOrFail($id);
        $pozicija -> delete();
        return "Pozicija uspesno izbrisana!";
    }
}
