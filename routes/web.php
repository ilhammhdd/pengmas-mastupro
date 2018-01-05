<?php
Route::get('/', function () {
    return view('pages.landing');
})->name('landing');

Route::get('/login-view', function () {
    return view('pages.login');
})->name('formLogin');

// Route::post('/login', 'Auth\LoginController@login')->name('login');
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

        Route::get('/admin/data-test/pengaturan-data-test', 'Admin\TestController@index')->name('admin.show_pengaturan_data_soal');
        Route::post('/admin/data-test/pengaturan-open-test', 'Admin\TestController@setOnTest')->name('admin.open_test');
        Route::post('/admin/data-test/pengaturan-close-test', 'Admin\TestController@setOffTest')->name('admin.close_test');

        Route::get('/admin/data-test/data-group-soal', 'Admin\DiscSoalController@index')->name('admin.show_data_group_soal');
        Route::post('/admin/data-test/data-soal-group-delete', 'Admin\DiscSoalController@deleteGroupSoal')->name('admin.delete_data_group_soal');
        Route::get('/admin/data-test/data-soal-group-add', 'Admin\DiscSoalController@tambahGroupSoal')->name('admin.add_data_group_soal');
        Route::post('/admin/data-test/data-soal-delete', 'Admin\DiscSoalController@deleteSoal')->name('admin.delete_data_soal');
        Route::post('/admin/data-test/data-soal-add', 'Admin\DiscSoalController@tambahSoal')->name('admin.add_data_soal');
        Route::post('/admin/data-test/data-soal-update', 'Admin\DiscSoalController@updateSoal')->name('admin.update_data_soal');

        Route::get('/admin/data-test/data-test-history', 'Admin\TestHistoryController@index')->name('admin.show_data_test_history');
        Route::get('/admin/data-test/data-test-print', 'Admin\TestHistoryController@printDataTest')->name('admin.print_data_test_history');

        Route::post('/admin/data-test/data-kelas-delete', 'Admin\KelasController@destroy')->name('admin.delete_data_kelas');
        Route::post('/admin/data-test/data-kelas-add', 'Admin\KelasController@store')->name('admin.add_data_kelas');
        Route::post('/admin/data-test/data-kelas-update', 'Admin\KelasController@update')->name('admin.update_data_kelas');

        Route::get('/admin/data-master/data-kelas', 'Admin\KelasController@index')->name('admin.show_data_kelas');
        Route::post('/admin/data-master/data-kelas-delete', 'Admin\KelasController@destroy')->name('admin.delete_data_kelas');
        Route::post('/admin/data-master/data-kelas-add', 'Admin\KelasController@store')->name('admin.add_data_kelas');
        Route::post('/admin/data-master/data-kelas-update', 'Admin\KelasController@update')->name('admin.update_data_kelas');

        Route::get('/admin/data-master/data-siswa', 'Admin\SiswaController@index')->name('admin.show_data_siswa');
        Route::post('/admin/data-master/data-siswa-delete', 'Admin\SiswaController@destroy')->name('admin.delete_data_siswa');
        Route::post('/admin/data-master/data-siswa-add', 'Admin\SiswaController@store')->name('admin.add_data_siswa');
        Route::post('/admin/data-master/data-siswa-update', 'Admin\SiswaController@update')->name('admin.update_data_siswa');

        Route::get('/admin/data-master/data-guru', 'Admin\GuruController@index')->name('admin.show_data_guru');
        Route::post('/admin/data-master/data-guru-delete', 'Admin\GuruController@destroy')->name('admin.delete_data_guru');
        Route::post('/admin/data-master/data-guru-add', 'Admin\GuruController@store')->name('admin.add_data_guru');
        Route::post('/admin/data-master/data-guru-update', 'Admin\GuruController@update')->name('admin.update_data_guru');

        Route::post('/user/reset-password-siswa', 'ResetPasswordController@resetPasswordSiswaByAdmin')->name('admin.reset_password_siswa');
        Route::post('/user/reset-password-guru', 'ResetPasswordController@resetPasswordGuruByAdmin')->name('admin.reset_password_guru');
        Route::get('/admin/get-register-new-user', 'Admin\HomeController@getRegisterNewUser')->name('admin.get_register_new_user');
        Route::post('/admin/post-register-new-user-siswa', 'Admin\HomeController@registerNewUserSiswa')->name('admin.post_register_new_user_siswa');
        Route::post('/admin/post-register-delete-user-siswa', 'Admin\HomeController@unRegisterUserSiswa')->name('admin.post_delete_user_siswa');
        Route::post('/admin/post-register-new-user-guru', 'Admin\HomeController@registerNewUserGuru')->name('admin.post_register_new_user_guru');
        Route::post('/admin/post-register-delete-user-guru', 'Admin\HomeController@unRegisterUserGuru')->name('admin.post_delete_user_guru');
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
        Route::put('/siswa/edit-username', 'Siswa\HomeController@editUsername')->name('siswa.edit_username');
    });
});

Route::auth();

Route::get('/test', function () {
    if (session('the_role')) {
        echo session('the_role');
    }
})->name('test');
