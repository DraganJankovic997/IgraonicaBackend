<?php

namespace App\Http\Controllers;

use App\Http\Requests\GradRequest;
use Illuminate\Http\Request;
use App\Grad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GradController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Grad::get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GradRequest $request)
    {
        return Grad::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  $grad = Grad::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GradRequest $request, $id)
    {
        $grad = Grad::findOrFail($id);
        $grad -> update($request->all());
        return $grad;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grad = Grad::findOrFail($id);
        $grad -> delete();
        return "Grad uspesno izbrisano!";
    }
}
