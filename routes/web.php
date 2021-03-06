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

Route::get('/basics', function() {
    return view('basics');
});

Auth::routes();

Route::get('/verify/token/{token}', 'Auth\VerificationController@verify')->name('auth.verify');
Route::get('/verify/resend', 'Auth\VerificationController@resend')->name('auth.verify.resend');

Route::resource('raags', 'RaagController');

Route::get('/raags/{name}/introduction', 'RaagController@showIntroduction');
Route::get('/raags/{name}/sargams', 'RaagController@showSargams');
Route::get('/raags/{name}/shabads', 'RaagController@showShabads');

Route::post('/shabads/search', 'ShabadController@search');

Route::resource('shabads', 'ShabadController');

// Route::get('/home', 'HomeController@index')->name('home');
