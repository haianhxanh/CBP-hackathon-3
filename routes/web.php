<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'TestController@index');

Route::get('/pets', 'PetController@index');
Route::get('/pets/create', 'PetController@create');
Route::get('/pets/{id}', 'PetController@show');
<<<<<<< HEAD

Route::post('/pets/{id}', 'PetController@destroy');
=======
Route::post('/pets/create', 'PetController@store');
>>>>>>> 00df30a0cf06baf06a827855baa0e331ecd83fc0
