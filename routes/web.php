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

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/', 'LandingController@index')->name('index');

Route::get('/show-join-us','LandingController@showJoinUs')->name('show_join_us');
Route::get('/show-sign-in','LandingController@showSignIn')->name('show_sign_in');