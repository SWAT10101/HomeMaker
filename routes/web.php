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

    // Not use d yet
    Route::post('password/reset', 'Auth\ResetPasswordController@reset ')->name('password.update');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');


    Route::get('/home', 'DashboardController@index')->name('home');


    //Work Type route
    Route::resource('worktype', 'WorkersTypeController')->except(['edit', 'update', 'destroy']); // except the route from resource to change variable in route from workerstype to workersType
    Route::get('worktype/{workersType}/edit', 'WorkersTypeController@edit')->name('worktype.edit');
    Route::put('worktype/{workersType}', 'WorkersTypeController@update')->name('worktype.update');
    Route::delete('worktype/{workersType}', 'WorkersTypeController@destroy')->name('worktype.destroy');

    //Workers route
    Route::resource('workers', 'WorkersController');

});
