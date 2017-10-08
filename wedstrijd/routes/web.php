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
Route::get('/', 'HomeController@index');



Route::resource('Gallery', 'GalleryController');
Route::get('/upload', function () {
    return view('upload');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    
    Route::get('home', 'AdminController@index');
    
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'Auth\LoginController@login');
    
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::resource('matches', 'MatchesController');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
});
Auth::routes();
