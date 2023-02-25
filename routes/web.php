<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('projects', 'ProjectController@index');
Route::get('currency','CurrencyController@index');
Route::get('currency/{firstcurrID}/{secondcurrID}/{value}','CurrencyController@convert');
Route::get('projects/TotalCostInDefault/{id}','ProjectController@getTotalCostInDefault');
Route::get('projects/getTotalCostInSpec/{id}/{currencyID}','ProjectController@getTotalCostInSpec');

