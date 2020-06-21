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



Auth::routes();


Route::get('/', 'Auth\LoginController@showLoginForm');

// auth
Route::group(['middleware' => ['auth']], function () {

    Route::post('register', 'Auth\RegisterController@register')->name('register');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register.form');


    Route::get('/home', 'HomeController@index')->name('home');

});