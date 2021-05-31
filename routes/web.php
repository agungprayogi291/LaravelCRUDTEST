<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','CategoryController@index');
Route::get('/{category:id}/edit','CategoryController@edit');
Route::get('/create','CategoryController@create');
Route::get('/{category:id}/remove','CategoryController@destroy');
Route::post('/create/store','CategoryController@store');
Route::post('/{category:id}/update','CategoryController@update');
