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
    return view('login.login');
});

Route::view('/temp','layouts.master');

Route::view('/register','login.register');
Route::view('/login','login.login');

Route::post('/store',"Users@store");
Route::post('/logs',"Users@logs");

