<?php

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
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', 'TodoController@index');

Route::get('/todo/create', 'TodoController@create');

Route::post('/todo/store', 'TodoController@store');

Route::get('/todo/{id}', 'TodoController@show');


//'TodoController@store'