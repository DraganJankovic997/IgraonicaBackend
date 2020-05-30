<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
})*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'RegisterController@create');
});

Route::resources([
    'pice' => 'PiceController',
    'racun' => 'RacunController',
    'racunPice' => 'Racun_PiceController',
    'grad' => 'GradController',
    'lokacija' => 'LokacijaController',
    'pozicija' => 'PozicijaController',
    'popust' => 'PopustController',
    'racunPopust' => 'Racun_PopustController',
    'sport' => 'SportController',
    'termin' => 'TerminController',
    'klijent' => 'KlijentController',
    'radioU' => 'RadioUController',
    'grupa' => 'GrupaController',
    'rezervacija' => 'RezervacijaController',
    'teren' => 'TerenController'

]);

Route::get('/user/{id}', 'UserController@getById');
Route::get('/user/lokacija/{lokacija_id}', 'UserController@getByLokacijaId');
Route::put('/user/{id}', 'UserController@update');
Route::get('/unpaginated-lokacija', 'LokacijaController@lokacijasUnpaginated');

