<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pendaftaran;

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
    public function store_pendaftaran(Request $request)
    {
        $pendaftaran = new Pendaftaran;
        $pendaftaran->id_pendaftaran = "1";
        $pendaftaran->nama_pendaftar = $request->nama_pendaftar;
        $pendaftaran->asal_daerah = $request->asal_daerah;
        $pendaftaran->asal_univ_pendaftar = $request->asal_univ_pendaftar;
        $pendaftaran->email_pendaftar = $request->email_pendaftar;
        $pendaftaran->no_telepon_pendaftar = $request->no_telepon_pendaftar;
        $pendaftaran->id_line_pendaftar = $request->id_line_pendaftar;
        $pendaftaran->scan_ktm = $request->scan_ktm;
        $pendaftaran->pas_foto = $request->pas_foto;
        $pendaftaran->scan_suket_aktif = $request->scan_suket_aktif;
        // $request->file('scan_ktm')->store('scan_ktms');
        // $request->file('pas_foto')->store('pas_fotos');
        // $request->file('scan_suket_aktif')->store('scascan_suket_aktifn_ktms');
        $pendaftaran->save();
        // dd($request->all());
        session()->flash('success', 'Data Berhasil Di Tambahkan!');
        return redirect('/peserta/form_pendaftaran');
    }

    public function cetak_kartu_peserta()
    {
        return view('peserta/cetak_kartu_peserta');
    }
}
