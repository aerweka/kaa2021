<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/landingpage');
});
Route::get('/semnas', function () {
    return view('/semnas');
});
// Route::group(['middleware' => 'auth'], function () {});
// ->name('login');
// ->name('register');

route::get('/login', 'AuthController@login');
// route::post('/postlogin', 'AuthController@postlogin');
// route::get('/logout', 'AuthController@logout');
route::get('/register', 'AuthController@register');
// route::post('/postregister', 'AuthController@postregister');

route::get('/peserta/dashboard_user', 'PesertaController@dashboard_user');
route::get('/peserta/alur_pembayaran', 'PesertaController@alur_pembayaran');
route::get('/peserta/konfirmasi_pembayaran', 'PesertaController@konfirmasi_pembayaran');
route::get('/peserta/form_pendaftaran', 'PesertaController@form_pendaftaran');
route::get('/peserta/cetak_kartu_peserta', 'PesertaController@cetak_kartu_peserta');


route::post('/peserta/form_pendaftaran', 'PesertaController@store_pendaftaran');
route::post('/peserta/konfirmasi_pembayaran', 'PesertaController@store_pembayaran');