<?php

use Illuminate\Support\Facades\Route;

Route::get('/semnas', function () {
    return view('/semnas');
});

Route::get('/', function () {
    return view('/landingpage');
});
Route::get('/cekusername/{uname}', 'AuthController@cekUsername');

//route untuk registrasi
Route::get('/register', 'AuthController@register');
Route::post('/postregister', 'AuthController@postregister');
// Route::get('/verify', 'Auth\VerificationController@show');

//route untuk login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('/home', 'HomeController@index');

//route untuk logout
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Auth::routes(["verify" => true]);
Route::get('email/verify', 'VerifyEmailController@show')->name('verification.notice');
Route::get('email/verify/{id}/{token}', 'VerifyEmailController@verify')->name('verification.verify');
Route::post('email/resend', 'VerifyEmailController@resend')->name('verification.resend');

Route::middleware(['peserta','verified'])->group(function () {
	Route::get('/peserta',function(){
		return redirect('/peserta/dashboard_user');
	});
    Route::get('/peserta/dashboard_user', 'PesertaController@dashboard_user');
	Route::get('/peserta/alur_pembayaran', 'PesertaController@alur_pembayaran');
	Route::get('/peserta/konfirmasi_pembayaran', 'PesertaController@konfirmasi_pembayaran');
	Route::get('/peserta/form_pendaftaran', 'PesertaController@form_pendaftaran');
	Route::get('/peserta/cetak_kartu_peserta', 'PesertaController@cetak_kartu_peserta');
	Route::get('/peserta/kartupeserta', 'PesertaController@kartupeserta');
	Route::get('/exportpdf', 'PesertaController@exportpdf');
	Route::post('/peserta/form_pendaftaran', 'PesertaController@store_pendaftaran');
	Route::post('/peserta/konfirmasi_pembayaran', 'PesertaController@store_pembayaran');
	Route::post('/gantipassword', 'AuthController@changepass');
});