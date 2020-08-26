<?php

use Illuminate\Support\Facades\Route;

Route::get('/semnas', function () {
    return view('/semnas');
});

Route::get('/', function () {
    return view('/landingpage');
});

Route::get('/register', 'AuthController@register');
Route::post('/postregister', 'AuthController@postregister');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::middleware('auth')->group(function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

Route::middleware('peserta')->group(function () {
	Route::get('/peserta',function(){
		return redirect('/peserta/dashboard_user');
	});
    Route::get('/peserta/dashboard_user', 'PesertaController@dashboard_user');
	Route::get('/peserta/alur_pembayaran', 'PesertaController@alur_pembayaran');
	Route::get('/peserta/konfirmasi_pembayaran', 'PesertaController@konfirmasi_pembayaran');
	Route::get('/peserta/form_pendaftaran', 'PesertaController@form_pendaftaran');
	Route::get('/peserta/cetak_kartu_peserta', 'PesertaController@cetak_kartu_peserta');
	Route::post('/peserta/form_pendaftaran', 'PesertaController@store_pendaftaran');
	Route::post('/peserta/konfirmasi_pembayaran', 'PesertaController@store_pembayaran');

});