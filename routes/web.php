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