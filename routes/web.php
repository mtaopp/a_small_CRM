<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->middleware('verified');

Route::get('/home', function () {
    return view('home');
})->middleware('auth', 'verified');


Route::get('/user-control', 'UserController@showUser')->middleware('auth', 'verified');

Route::view('/user-edit', 'auth.user-edit')->middleware('auth', 'verified');

Route::view('/change-password', 'auth.change-password')->middleware('auth', 'verified');
