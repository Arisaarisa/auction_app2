<?php

use App\Http\Controllers\ItemController;
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

// Route::get('/items', 'ItemController@index');
// Route::post('/items', 'ItemController@create');
// Route::get('/items/new', 'ItemController@new');
// Route::get('/items/{id}', 'ItemController@show');
// Route::get('/items/{id}/edit', 'ItemController@show');
// Route::get('/items/{id}/edit', 'ItemController@edit');
// Route::patch('/items/{id}', 'ItemController@update');
// Route::delete('/items/{id}', 'ItemController@destroy');
Route::resource('/items', 'ItemController');