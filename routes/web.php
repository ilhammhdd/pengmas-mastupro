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

Route::get('/', 'LandingController@index')->name('index');

Route::get('/show-join-us', 'LandingController@showJoinUsForm')->name('show_join_us');
Route::get('/show-sign-in', 'LandingController@showSignInForm')->name('show_sign_in');
Route::post('/join-us', 'Auth\RegisterController@register')->name('join_us');
Route::post('/sign-in', 'Auth\LoginController@login')->name('sign_in');
Route::post('/sign-out', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['web', 'role:admin']], function () {
    Route::get('/admin-home', 'Admin\HomeController@index')->name('admin.home');
});

Route::group(['middleware' => ['web', 'role:healthcare']], function () {
    Route::get('/healthcare-home', 'HealthCare\HomeController@index')->name('healthcare.home');
    Route::get('/register-new-patient','HealthCare\RegisterNewPatientController@showRegisterNewPatient')->name('healthcare.show_register_new_patient');
    Route::post('/register-new-patient','HealthCare\RegisterNewPatientController@registerNewPatient')->name('healthcare.register_new_patient');
});

Route::group(['middleware' => ['web', 'role:patient']], function () {
    Route::get('/patient-home', 'Patient\HomeController@index')->name('patient.home');
});