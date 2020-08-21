<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function dashboard_user()
    {
        return view('peserta/dashboard_user');
    }

    public function alur_pembayaran()
    {
        return view('peserta/alur_pembayaran');
    }

    public function konfirmasi_pembayaran()
    {
        return view('peserta/konfirmasi_pembayaran');
    }

    public function form_pendaftaran()
    {
        return view('peserta/form_pendaftaran');
    }

    public function cetak_kartu_peserta()
    {
        return view('peserta/cetak_kartu_peserta');
    }
}
