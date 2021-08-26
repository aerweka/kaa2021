<?php

// use Symfony\Component\Routing\Route;

Route::post('/gantipassword', 'AuthController@changepass');

Route::prefix('admin')->middleware('admin')->group(function () {
	Route::get('/', 'AdminController@home');
	Route::get('/pendaftar', 'AdminController@pendaftar');
	Route::get('/verifikasi', 'AdminController@verifikasi');
	Route::get('/export/peserta', 'AdminController@exportPeserta');
	Route::get('/export/pendaftar', 'AdminController@exportPendaftar');
	Route::get('/export/semua', 'AdminController@exportSemua');
	Route::get('/verifikasi/true/{id}', 'AdminController@verifikasiTrue');
	Route::get('/verifikasi/false/{id}', 'AdminController@verifikasiFalse');
	Route::get('/export/moodle-user', 'AdminController@exportMoodleUser');
	Route::get('/getPendaftarAtauPeserta/{id}', 'AdminController@getPendaftarAtauPesertaById');
	Route::get('/getPembayaran/{id}', 'AdminController@getPembayaranById');

	Route::get('/ubah-sandi', 'AdminController@ubahSandi');

	Route::get('/changepassword', function () {
		return view('admin.gantipassword');
	});

	Route::get('/pendaftar/scan_ktm/{id}/view', 'AdminController@viewScanKTM');
	Route::get('/pendaftar/pas_foto/{id}/view', 'AdminController@viewPasFoto');
	Route::get('/pendaftar/scan_suket_aktif/{id}/view', 'AdminController@viewScanSuketAktif');

	Route::get('/pendaftar/scan_ktm/{id}/download', 'AdminController@downloadScanKTM');
	Route::get('/pendaftar/pas_foto/{id}/download', 'AdminController@downloadPasFoto');
	Route::get('/pendaftar/scan_suket_aktif/{id}/download', 'AdminController@downloadScanSuketAktif');

	// route uji layout baru
	// Route::get('/test', 'AdminController@home');

	// Route::get('/testVerif', 'AdminController@verifikasi');

	// Route::get('/testPendaftar', 'AdminController@pendaftar');




	// Route::get('/getPendaftar/{id}', 'AdminController@getPendaftarById');
	// Route::get('/getPeserta/{id}', 'AdminController@getPesertaById');
	// end 
});
