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

Route::get('/transcript', function () {
    return view('transcript');
});

Route::get('/account_settings', function () {
    return view('account_settings');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/connection', function () {
    return view('connection');
});

Route::get('/email', function () {
    return view('email/verification');
});

Route::get('/transcript-email', function () {
    return view('email/transcript');
});

Route::get('/authentication-email', function () {
    return view('email/authentication');
});

Route::get('/portfolio-single', function () {
    return view('portfolio-single');
});

Route::get('/transcript-single', function () {
    return view('transcript-single');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
