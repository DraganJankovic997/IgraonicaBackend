<?php

namespace App\Http\Controllers;

use App\Http\Requests\PiceRequest;
use Illuminate\Http\Request;
use App\Pice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pice::get();    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PiceRequest $request)
    {
        return Pice::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  $pice = Pice::findOrFail($id);
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
        $pice = Pice::findOrFail($id);
        $pice -> update($request->all());
        return $pice;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pice = Pice::findOrFail($id);
        $pice -> delete();
    }
}
