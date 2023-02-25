<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::get('/index','ProjectController@index');
Route::get('currency/{firstcurrID}/{scondcurrID}/{value}','CurrencyController@convert');
Route::get('currency','CurrencyController@index');
Route::get('projects/TotalCostInDefault/{id}','ProjectController@getTotalCostInDefault');
Route::get('projects/getTotalCostInSpec/{id}/{currencyID}','ProjectController@getTotalCostInSpec');
