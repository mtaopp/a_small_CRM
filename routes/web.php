<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
})->middleware('verified', 'verified')->name('home');

Route::get('/home', function () {
    return view('home');
})->middleware('auth', 'verified');


Route::get('/user-control', 'UserController@showUser')->middleware('auth', 'verified')->name('user.control');

Route::view('/user-edit', 'auth.user-edit')->middleware('auth', 'verified')->name('edit.user');

Route::view('/change-password', 'auth.change-password')->middleware('auth', 'verified')->name('change.password');

Route::get('/contacts', 'ContactController@index')->middleware('auth', 'verified')->name('contacts');
Route::get('/contact/{id}', 'ContactController@show')->middleware('auth', 'verified')->name('contact');
Route::get('/new-contact', 'ContactController@create')->middleware('auth', 'verified')->name('create.contact');
Route::post('/new-contact', 'ContactController@store')->middleware('auth', 'verified')->name('store.contact');
Route::get('/edit-contact/{id}', 'ContactController@edit')->middleware('auth', 'verified')->name('edit.contact');
Route::post('/edit-contact/{id}', 'ContactController@update')->middleware('auth', 'verified')->name('update.contact');



Route::get('/jobs', 'JobRequestController@index')->middleware('auth', 'verified')->name('jobs');

Route::get('/new-job/{id?}', 'JobRequestController@create')->middleware('auth', 'verified')->name('create.job');
Route::post('/new-jobrequest', 'JobRequestController@formSelect')->middleware('auth', 'verified')->name('chosen.job');
Route::post('/new-job', 'JobRequestController@store')->middleware('auth', 'verified')->name('store.job');

