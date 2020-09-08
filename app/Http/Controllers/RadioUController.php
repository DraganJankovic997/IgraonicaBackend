<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RadioURequest;
use App\Http\Controllers\Controller;
use App\RadioU;
use App\User;
use App\Lokacija;
use App\Pozicija;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RadioUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RadioU::with('user')->with('lokacija')->with('pozicija')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RadioURequest $request)
    {
        return RadioU::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  RadioU::with('user') -> with('lokacija') -> with('pozicija')-> findOrFail($id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RadioURequest $request, $id)
    {
        $radioU = RadioU::findOrFail($id);
        $radioU -> update($request->all());
        return $radioU;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $radioU = RadioU::findOrFail($id);
        $radioU -> delete();
        return "Radio_U uspesno izbrisano!";
    }
    public function forUser($id)
    {
        return RadioU::where('user_id', $id)
            ->with('lokacija')
            ->with('pozicija')
            ->get();
    }
}
