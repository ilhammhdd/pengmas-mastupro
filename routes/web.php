<?php
Route::get('/', function () {
    return view('pages.login');
})->name('landing');

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'web'], function () {

    Route::post('/user/edit-password', 'ResetPasswordController@editPassword')->name('edit_password');

    Route::post('/test/enrollment-key', 'TestController@checkEnrollmentKey')->name('test.check_enrollment_key');
    Route::group(['middleware' => 'checkEnrollmentKey'], function () {
        Route::get('/test/disc', 'TestController@showDiscTest')->name('test.show_disc_test');
    });
    Route::post('/test/submit', 'TestController@submitTest')->name('test.submit_test');
    Route::get('/test/show-all', 'TestController@showTests')->name('test.show_all');
    Route::get('/test/show-history', 'TestController@showHistory')->name('test.show_history');

    Route::get('/disc/show-result/{testHistoryId}', 'DiscController@showResult')->name('disc.show_result');

    Route::group(['middleware' => 'role:admin'], function () {
        Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.index');
        Route::get('/admin/logout', 'Auth\LoginController@logout')->name('admin.logout');

        Route::get('/admin/get-register-new-user', 'Admin\HomeController@getRegisterNewUser')->name('admin.get_register_new_user');
        Route::post('/admin/post-register-new-user-siswa', 'Admin\HomeController@registerNewUserSiswa')->name('admin.post_register_new_user_siswa');
        Route::post('/admin/post-register-new-user-guru', 'Admin\HomeController@registerNewUserGuru')->name('admin.post_register_new_user_guru');
    });


    Route::group(['middleware' => 'role:guru'], function () {
        Route::get('/guru/home', 'Guru\HomeController@index')->name('guru.index');
        Route::get('/guru/logout', 'Auth\LoginController@logout')->name('guru.logout');

        Route::get('/guru/show/edit-profile', 'Guru\HomeController@showEditProfile')->name('guru.show_edit_profile');
        Route::post('/guru/edit-profile', 'Guru\HomeController@editProfile')->name('guru.edit_profile');
    });


    Route::group(['middleware' => 'role:siswa'], function () {
        Route::get('/siswa/home', 'Siswa\HomeController@index')->name('siswa.index');
        Route::get('/siswa/logout', 'Auth\LoginController@logout')->name('siswa.logout');

        Route::get('/siswa/show/edit-profile', 'Siswa\HomeController@showEditProfile')->name('siswa.show_edit_profile');
        Route::post('/siswa/edit-profile', 'Siswa\HomeController@editProfile')->name('siswa.edit_profile');
    });
});

Route::auth();

Route::get('/test', function () {
    if (session('the_role')) {
        echo session('the_role');
    }
})->name('test');