<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    use RegisterRequest;

    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function create(RegisterRequest $request)
    {
        $val = $request->validated();
        $val['password'] = bcrypt($val['password']);
        return User::create($val);
    }
}
