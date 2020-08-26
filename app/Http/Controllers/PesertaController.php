<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pendaftaran;
use App\Pembayaran;
use Auth;
use Storage;

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
    public function store_pembayaran(Request $request)
    {
        
        $this->validate($request, [
            'bukti_pembayaran' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'atas_nama_rekening' => 'required|string|max:30',
            'bank_asal' => 'required|string|max:25',
            'nomor_rekening' => 'required|numeric|max:20',
            'total_pembayaran' => 'required|numeric',
        ]);

        $pembayaran = new Pembayaran;
        $pembayaran->id_pendaftaran = Auth::user()->id_pendaftaran;
        $pembayaran->atas_nama_rekening = $request->atas_nama_rekening;
        $pembayaran->bank_asal = $request->bank_asal;
        $pembayaran->nomor_rekening = $request->nomor_rekening;
        $pembayaran->total_pembayaran = $request->total_pembayaran;
        $pembayaran->status_pembayaran = 0;

        $namafile = 'bukti_pembayaran-'.Auth::user()->id_pendaftaran.'.jpg';

        $path = Storage::putFileAs(
            'public/bukti_pembayaran',$request->file('bukti_pembayaran'),$namafile,'public'
        );

        $pembayaran->bukti_pembayaran = 'bukti_pembayaran/'.$namafile;
        
        $pembayaran->save();

        session()->flash('success', 'Data Berhasil Di Tambahkan!');
        return redirect('/peserta/konfirmasi_pembayaran');
    }

    public function form_pendaftaran()
    {
        return view('peserta/form_pendaftaran');
    }
    public function store_pendaftaran(Request $request)
    {
        $this->validate($request, [
            'nama_pendaftar' => 'bail|required|max:30',
            'asal_daerah' => 'bail|required|max:30',
            'asal_univ_pendaftar' => 'bail|required|max:40',
            'email_pendaftar' => 'bail|required|email:rfc|max:50',
            'no_telepon_pendaftar' => 'bail|required|max:12',
            'id_line_pendaftar' => 'bail|required|max:25',
            'scan_ktm' => 'bail|required|file|max:2048|mimes:pdf',
            'pas_foto' => 'bail|required|file|mimes:jpeg,png,jpg|max:2048',
            'scan_suket_aktif' => 'bail|file|max:2048|mimes:pdf',
        ]);

        $pendaftaran = new Pendaftaran;
        $pendaftaran->nama_pendaftar = $request->nama_pendaftar;
        $pendaftaran->asal_daerah = $request->asal_daerah;
        $pendaftaran->asal_univ_pendaftar = $request->asal_univ_pendaftar;
        $pendaftaran->email_pendaftar = $request->email_pendaftar;
        $pendaftaran->no_telepon_pendaftar = $request->no_telepon_pendaftar;
        $pendaftaran->id_line_pendaftar = $request->id_line_pendaftar;
        $pendaftaran->status_pendaftaran = "0";

        $namafilescanktm = 'scan_ktm-'.Auth::user()->id_pendaftaran.'.pdf';
        $namafilefoto = 'pas_foto-'.Auth::user()->id_pendaftaran.'.jpg';
        $namafilescansuket = 'scan_suket_aktif-'.Auth::user()->id_pendaftaran.'.jpg';

        Storage::putFileAs(
            'public/scan_ktm',$request->file('scan_ktm'),$namafilescanktm,'public'
        );

        Storage::putFileAs(
            'public/pas_foto',$request->file('pas_foto'),$namafilefoto,'public'
        );

        Storage::putFileAs(
            'public/scan_suket_aktif',$request->file('scan_suket_aktif'),$namafilescansuket,'public'
        );

        $pendaftaran->scan_ktm = 'scan_ktm/'.$namafilescanktm;
        $pendaftaran->pas_foto = 'pas_foto/'.$namafilefoto;
        $pendaftaran->scan_suket_aktif = 'scan_suket_aktif/'.$namafilescansuket;
        
        $pendaftaran->save();
        session()->flash('success', 'Data Berhasil Di Tambahkan!');
        return redirect('/peserta/form_pendaftaran');
    }

    public function cetak_kartu_peserta()
    {
        return view('peserta/cetak_kartu_peserta');
    }
}
