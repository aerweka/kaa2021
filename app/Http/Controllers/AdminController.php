<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use App\Models\Pengguna;
use DB;

class AdminController extends Controller
{
    public function home(){
        $dateMin1 = date("Y-m-d",strtotime("2020-08-23"));
        $dateMax1 = date("Y-m-d",strtotime("2020-08-30"));

    	$peserta = Pendaftaran::where('status_pendaftaran','=',1)->count();
    	$pendaftar = Pendaftaran::count();
    	$konfirmasi = Pembayaran::count();
    	$pditerima = Pembayaran::where('status_pembayaran','=',1)->count();
    	$datacard = [$peserta,$pendaftar,$konfirmasi,$pditerima];
    	$datagraphic1 = Pendaftaran::whereBetween(DB::raw('DATE(tgl_pendaftaran)'),[$dateMin1,$dateMax1])->count();
    	$datagraphic = [$datagraphic1,$pendaftar,$konfirmasi,$pditerima];

    	$datakonfirmasi = Pembayaran::select('p.pas_foto','p.nama_pendaftar','total_pembayaran','status_pembayaran')->join('pendaftaran as p','p.id_pendaftaran','=','pembayaran.id_pendaftaran')->take(3)->get();

    	$datapendaftar = Pendaftaran::select('pendaftaran.pas_foto','pendaftaran.nama_pendaftar','pendaftaran.asal_univ_pendaftar','p.status_pembayaran')->leftJoin('pembayaran as p','p.id_pendaftaran','=','pendaftaran.id_pendaftaran')->take(3)->get();

    	return view('admin.dashboard',['datacard' => $datacard,'datagraphic' => $datagraphic,'datakonfirmasi' => $datakonfirmasi,'datapendaftar' => $datapendaftar]);
    }
    public function pendaftar(){
    	// All
    	$seluruhdata = Pendaftaran::select('pendaftaran.*','p.status_pembayaran')->leftJoin('pembayaran as p','p.id_pendaftaran','=','pendaftaran.id_pendaftaran')->paginate(10);
    	// Peserta
    	$datapeserta = Pendaftaran::select('pendaftaran.pas_foto','pendaftaran.nama_pendaftar','pendaftaran.asal_univ_pendaftar','p.status_pembayaran')->leftJoin('pembayaran as p','p.id_pendaftaran','=','pendaftaran.id_pendaftaran')->paginate(10);
    	// Pendaftar
    	$datapendaftar = Pendaftaran::select('pendaftaran.pas_foto','pendaftaran.nama_pendaftar','pendaftaran.asal_univ_pendaftar','p.status_pembayaran')->leftJoin('pembayaran as p','p.id_pendaftaran','=','pendaftaran.id_pendaftaran')->paginate(10);
    	return view('admin.pendaftar',['all' => $seluruhdata,'peserta' => $datapeserta, 'pendaftar' => $datapendaftar]);
    }
    public function verifikasi(){
    	return view('admin.verifikasi');
    }
}
