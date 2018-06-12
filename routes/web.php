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
    return view('laurret.home');
});

Route::get('create', function() {
    return view('laurret.create');
})->name('create');
Route::get('fees', function() {
    return view('laurret.fees');
})->name('fees');

Route::get('/students', 'StudentController@show');
Route::post('/student','StudentController@store');
Route::post('/fees','FeesController@writefee');
Route::get('/search/fees','FeesController@search');
Route::get('/viewfees/fees','FeesController@allfees');