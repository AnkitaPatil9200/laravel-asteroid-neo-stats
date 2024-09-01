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

//loads home page
Route::get('/','App\Http\Controllers\HomeController@index');

//submits date filter form
Route::post('/date-filter-asteroids-data','App\Http\Controllers\HomeController@getAsteroidsData');
