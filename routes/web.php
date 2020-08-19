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



Route::get('/login', 'CustomAuthController@loginPage')->name('login');
Route::post('/login', 'CustomAuthController@loginAuth');

Route::get('/register', 'CustomAuthController@registerPage');
Route::post('/register', 'CustomAuthController@registerSave');


Route::middleware(['auth'])->group(function () {
    Route::get('/logout', 'CustomAuthController@logout');
});

Route::get('/check', function () {
    if (\Illuminate\Support\Facades\Auth::check())
    {
        return 'Hi '
            .\Illuminate\Support\Facades\Auth::user()->name
            .' , you are logged/signed in.';
    } else {
        return 'You are not signed in!';
    }
});
