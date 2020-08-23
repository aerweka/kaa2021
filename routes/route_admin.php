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

Route::prefix('admin')->group(function () {
    Route::get('/','AdminController@home');
	Route::get('/pendaftar','AdminController@pendaftar');
	Route::get('/verifikasi','AdminController@verifikasi');
	Route::get('/export/peserta','AdminController@exportPeserta');
	Route::get('/export/pendaftar','AdminController@exportPendaftar');
	Route::get('/export/semua','AdminController@exportSemua');
	Route::get('/verifikasi/true{id}','AdminController@verifikasiTrue');
	Route::get('/verifikasi/false{id}','AdminController@verifikasiFalse');

	Route::get('/gantipassword',function(){
		return view('admin.gantipassword');
	});
});


