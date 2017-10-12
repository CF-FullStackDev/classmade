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

Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/pdf-view', function () {
    return view('pdf.cultural.pdftemplate2');
});

Route::get('/pdf/{category?}/{template?}', function ($category = 'default', $template = 'pdftemplate1') {
    return view('pdf.'.$category.'.'.$template);
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/forgot-password-template', function () {
    return view('email/forgot-password');
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::get('/changepassword', function () {
    return view('changepassword');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/demo', function () {
    return view('demo.demo');
});

Route::get('/demo/account_settings', function () {
    return view('demo.account_settings');
});

Route::get('/demo/transcript', function () {
    return view('demo.transcript');
});

Route::get('/demo/review', function () {
    return view('demo.review');
});

Route::get('/demo/connection', function () {
    return view('demo.connection');
});

Route::post('formAvatarPhoto', 'HomeController@formAvatarPhoto');
Route::post('formCoverPhoto', 'HomeController@formCoverPhoto');
Route::get('pdf-dl/{category?}/{template?}', ['uses' =>'HomeController@pdfdownload']);
;

Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
