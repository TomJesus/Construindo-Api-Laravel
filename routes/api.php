<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BandController;
use Illuminate\Container;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::get('hello/{name}',function ($name) {
//    return 'hello word ' . $name;
//});
//
//Route::post('hello-post/{name}', 'HelloApi@hello()');

Route::get('bands', 'BandController@getAll');
Route::post('bands/store', 'BandController@store');
Route::get('bands/{id}', 'BandController@getById');
Route::get('bands/gender/{gender}', 'BandController@getBandesByGender');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
