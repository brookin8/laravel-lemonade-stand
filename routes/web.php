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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('days/create/{id}', [
		'uses' => 'DayController@create'
]);
Route::resource('/days', 'DayController', ['except' => 'create']);
Route::resource('games', 'GameController');
Route::get('games/{id}', 'GameController@show')->name('game');
Route::get('games/destroy/{id}', 'GameController@destroy')->name('game');