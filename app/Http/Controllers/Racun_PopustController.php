<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Racun_Popust;
use App\Racun;
use App\Popust;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Racun_PopustRequest;

class Racun_PopustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $racunPopusts = Racun_Popust::with('racun') -> with('popust')->paginate(10);
        return $racunPopusts;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Racun_PopustRequest $request)
    {
        return Racun_Popust::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $racunPopust = Racun_Popust::with('racun') -> with('popust') -> findOrFail($id);
        return $racunPopust;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Racun_PopustRequest $request, $id)
    {
        $racunPopust = Racun_Popust::findOrFail($id);
        $racunPopust -> update($request->all());
        return $racunPopust;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $racunPopust = Racun_Popust::findOrFail($id);
        $racunPopust -> delete();
        return "Popust uspesno izbrisan sa racuna!";
    }
}
