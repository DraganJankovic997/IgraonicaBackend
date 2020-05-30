<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KlijentRequest;
use App\Klijent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class KlijentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Klijent::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KlijentRequest $request)
    {
        return Klijent::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Klijent::findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KlijentRequest $request, $id)
    {
        $klijent = Klijent::findOrFail($id);
        $klijent -> update($request->all());
        return $klijent;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $klijent = Klijent::findOrFail($id);
        $klijent -> delete();
        return "Klijent uspesno izbrisan!";
    }
}
