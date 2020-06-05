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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/user', 'HomeController@user');
Route::post('/users', 'UsersController@store');
Route::get('/skor', 'HomeController@dataSkor');
Route::post('/skor', 'DataSkorController@store');
Route::get('/kriteria', 'HomeController@kriteria');
Route::post('/kriteria/{krit}', 'KriteriaController@show');
Route::post('/kriteria', 'KriteriaController@store');
//Route::fetch('/kriteria/{krit}', 'KriteriaController@edit');
Route::post('/del_kriteria/{krit}', 'KriteriaController@destroy');
Route::post('/del_user/{us}', 'UsersController@destroy');
Route::post('/del_skor/{sk}', 'DataSkorController@destroy');
Route::get('/edit_kriteria/{krit}', 'KriteriaController@edit');
Route::post('/upd_kriteria/{krit}', 'KriteriaController@update');
Route::get('/edit_user/{user}', 'UsersController@edit');
Route::post('/upd_user/{user}', 'UsersController@update');
Route::get('/edit_skor/{skor}', 'DataSkorController@edit');
Route::post('/upd_skor/{skor}', 'DataSkorController@update');