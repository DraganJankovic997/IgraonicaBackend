<?php

namespace App\Http\Controllers;

use App\Http\Requests\PopustRequest;
use Illuminate\Http\Request;
use App\Popust;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PopustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Popust::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PopustRequest $request)
    {
        return Popust::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  $popust = Popust::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PopustRequest $request, $id)
    {
        $popust = Popust::findOrFail($id);
        $popust -> update($request->all());
        return $popust;    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popust = Popust::findOrFail($id);
        $popust -> delete();
        return "Popust uspesno izbrisan!";    
    }
}
