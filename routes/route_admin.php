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
// Route::post('/gantipassword','AuthController@changepass');
Route::post('/gantipassword','AuthController@changepass');
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/','AdminController@home');
	Route::get('/pendaftar','AdminController@pendaftar');
	Route::get('/verifikasi','AdminController@verifikasi');
	Route::get('/export/peserta','AdminController@exportPeserta');
	Route::get('/export/pendaftar','AdminController@exportPendaftar');
	Route::get('/export/semua','AdminController@exportSemua');
	Route::get('/verifikasi/true{id}','AdminController@verifikasiTrue');
	Route::get('/verifikasi/false{id}','AdminController@verifikasiFalse');

	Route::get('/changepassword',function(){
		return view('admin.gantipassword');
	});

	Route::get('/scan_ktm/{id}/view','AdminController@viewScanKTM');
	Route::get('/pas_foto/{id}/view','AdminController@viewPasFoto');
	Route::get('/scan_suket_aktif/{id}/view','AdminController@viewScanSuketAktif');

	Route::get('/scan_ktm/{id}/download','AdminController@downloadScanKTM');
	Route::get('/pas_foto/{id}/download','AdminController@downloadPasFoto');
	Route::get('/scan_suket_aktif/{id}/download','AdminController@downloadScanSuketAktif');
});


