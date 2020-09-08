<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    //nemamo getAll() metodu jer ne prikazujemo sve korisnike

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user -> update($request->all());
        return $user;
    }

    public function getById($id)
    {
        return  User::with('lokacija') -> with('pozicija')-> findOrFail($id);
    }

    public function getByLokacijaId($lokacija_id)
    {
        return User::where('lokacija_trenutna_id',$lokacija_id)->get();
    }

    //nemamo destroy() metodu jer ne brisemo korisnike zbog istorije zaposlenja (menja se u radio_u)
}
