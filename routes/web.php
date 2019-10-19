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

//function are made in controller file
//logic expression must be in controller file
Route::name('home')->get('/', 'TodoController@index');

Route::name('welcome')->get('/welcome', 'TodoController@welcome');

Route::name('create')->get('/create', 'TodoController@create'); // or create also can

Route::name('store')->post('store', 'TodoController@store');

Route::name('edit')->get('edit/{todo}', 'TodoController@edit'); //same variable can use control+d to change all the context in the same time

Route::name('update')->post('update/{todo}', 'TodoController@update');

Route::name('delete')->get('delete/{todo}', 'TodoController@delete');
