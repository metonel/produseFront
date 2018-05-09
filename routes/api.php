<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//lista completa a articolelor

Route::get('produse', 'ProduseController@index');

//fiecare articol individual

Route::get('produse/{id}', 'ProduseController@show');

//adaugare articol

Route::post('produse', 'ProduseController@store');

//editare articol

Route::put('produse', 'ProduseController@store');

//stergere

Route::delete('produse', 'ProduseController@destroy');