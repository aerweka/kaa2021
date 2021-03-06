<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use App\Models\Pengguna;
use DB;
use App\Exports\SemuaExport;
use App\Exports\PesertaExport;
use App\Exports\PendaftarExport;
use App\Exports\MoodleExport;
use Maatwebsite\Excel\Facades\Excel;
use Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\PembayaranDiterimaMail;
use Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
  public function home()
  {
    $dateMin1 = date("Y-m-d", strtotime("2021-08-30"));
    $dateMax1 = date("Y-m-d", strtotime("2021-08-30"));
    $dateMax2 = date("Y-m-d", strtotime("2021-09-6"));
    $dateMax3 = date("Y-m-d", strtotime("2021-09-13"));
    $dateMax4 = date("Y-m-d", strtotime("2021-09-20"));
    $dateMax5 = date("Y-m-d", strtotime("2021-09-27"));
    $dateMax6 = date("Y-m-d", strtotime("2021-10-4"));
    $dateMax7 = date("Y-m-d", strtotime("2021-10-6"));

    $peserta = Pendaftaran::where('status_pendaftaran', '=', 1)->count();
    $pendaftar = Pendaftaran::count();
    $konfirmasi = Pembayaran::count();
    $bayarDiterima = Pembayaran::where('status_pembayaran', '=', 1)->count();
    $datacard = [$peserta, $pendaftar, $konfirmasi, $bayarDiterima];

    // $datagraphic1 = Pendaftaran::whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax1])->count();
    // $datagraphic2 = Pendaftaran::whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax2])->count();
    // $datagraphic3 = Pendaftaran::whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax3])->count();
    // $datagraphic4 = Pendaftaran::whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax4])->count();
    // $datagraphic5 = Pendaftaran::whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax5])->count();
    // $datagraphic6 = Pendaftaran::whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax6])->count();
    // $datagraphic7 = Pendaftaran::whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax7])->count();
    // $datagraphic8 = Pendaftaran::whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax8])->count();

    $datagraphic1 = Pendaftaran::where('status_pendaftaran', '=', '0')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax1])->count();
    $datagraphic2 = Pendaftaran::where('status_pendaftaran', '=', '0')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax2])->count();
    $datagraphic3 = Pendaftaran::where('status_pendaftaran', '=', '0')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax3])->count();
    $datagraphic4 = Pendaftaran::where('status_pendaftaran', '=', '0')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax4])->count();
    $datagraphic5 = Pendaftaran::where('status_pendaftaran', '=', '0')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax5])->count();
    $datagraphic6 = Pendaftaran::where('status_pendaftaran', '=', '0')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax6])->count();
    $datagraphic7 = Pendaftaran::where('status_pendaftaran', '=', '0')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax7])->count();
    $datagraphic =
      [
        $datagraphic1,
        $datagraphic2,
        $datagraphic3,
        $datagraphic4,
        $datagraphic5,
        $datagraphic6,
        $datagraphic7
      ];

    $datagraphic2_p = Pendaftaran::where('status_pendaftaran', '=', '1')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax2])->count();
    $datagraphic1_p = Pendaftaran::where('status_pendaftaran', '=', '1')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax1])->count();
    $datagraphic3_p = Pendaftaran::where('status_pendaftaran', '=', '1')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax3])->count();
    $datagraphic4_p = Pendaftaran::where('status_pendaftaran', '=', '1')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax4])->count();
    $datagraphic5_p = Pendaftaran::where('status_pendaftaran', '=', '1')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax5])->count();
    $datagraphic6_p = Pendaftaran::where('status_pendaftaran', '=', '1')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax6])->count();
    $datagraphic7_p = Pendaftaran::where('status_pendaftaran', '=', '1')
      ->whereBetween(DB::raw('DATE(tgl_pendaftaran)'), [$dateMin1, $dateMax7])->count();
    $datagraphic_p =
      [
        $datagraphic1_p,
        $datagraphic2_p,
        $datagraphic3_p,
        $datagraphic4_p,
        $datagraphic5_p,
        $datagraphic6_p,
        $datagraphic7_p
      ];

    $datakonfirmasi = Pembayaran::select('p.pas_foto', 'p.nama_pendaftar', 'total_pembayaran', 'status_pembayaran')
      ->join('pendaftaran as p', 'p.id_pendaftaran', '=', 'pembayaran.id_pendaftaran')
      ->orderBy('p.tgl_pendaftaran', 'DESC')
      ->take(3)
      ->get();

    $datapendaftar = Pendaftaran::select('pendaftaran.pas_foto', 'pendaftaran.nama_pendaftar', 'pendaftaran.asal_univ_pendaftar', 'p.status_pembayaran', 'pendaftaran.status_pendaftaran')
      ->leftJoin('pembayaran as p', 'p.id_pendaftaran', '=', 'pendaftaran.id_pendaftaran')
      ->orderBy('pendaftaran.tgl_pendaftaran', 'DESC')
      ->take(3)
      ->get();

    $user = Auth::user()->username;

    return view(
      'admin.home',
      [
        'datacard' => $datacard,
        'datagraphic' => $datagraphic,
        'datakonfirmasi' => $datakonfirmasi,
        'datapendaftar' => $datapendaftar,
        'datagraphic_p' => $datagraphic_p,
        'sidebar' => 'home',
        'user' => $user
      ]
    );
  }
  public function pendaftar()
  {
    // All
    $seluruhdata = Pendaftaran::select('pendaftaran.*', 'p.status_pembayaran')
      ->leftJoin('pembayaran as p', 'p.id_pendaftaran', '=', 'pendaftaran.id_pendaftaran')
      ->orderBy('pendaftaran.tgl_pendaftaran', 'DESC')
      ->paginate(10);
    // Peserta
    $datapeserta = Pendaftaran::select('pendaftaran.*', 'pendaftaran.nama_pendaftar', 'pendaftaran.asal_univ_pendaftar', 'p.status_pembayaran')
      ->leftJoin('pembayaran as p', 'p.id_pendaftaran', '=', 'pendaftaran.id_pendaftaran')
      ->where('pendaftaran.status_pendaftaran', '=', '1')
      ->orderBy('pendaftaran.tgl_pendaftaran', 'DESC')
      ->paginate(10);
    // Pendaftar
    $datapendaftar = Pendaftaran::select('pendaftaran.*', 'p.status_pembayaran')
      ->leftJoin('pembayaran as p', 'p.id_pendaftaran', '=', 'pendaftaran.id_pendaftaran')
      ->where('pendaftaran.status_pendaftaran', '=', '0')
      ->orderBy('pendaftaran.tgl_pendaftaran', 'DESC')
      ->paginate(10);

    $user = Auth::user()->username;

    return view(
      'admin.dataPendaftar',
      [
        'all' => $seluruhdata,
        'peserta' => $datapeserta,
        'pendaftar' => $datapendaftar,
        'sidebar' => 'pendaftar',
        'user' => $user
      ]
    );
  }

  public function getPendaftarAtauPesertaById($id)
  {
    $semuaData = Pendaftaran::find($id);
    echo json_encode($semuaData);
  }

  public function verifikasi()
  {
    $datasemua = Pembayaran::select('pembayaran.*', 'p.*')
      ->join('pendaftaran as p', 'p.id_pendaftaran', '=', 'pembayaran.id_pendaftaran')
      ->orderBy('pembayaran.tanggal_pembayaran', 'DESC')
      ->paginate(10);

    $databelum = Pembayaran::select('pembayaran.*', 'p.*')
      ->join('pendaftaran as p', 'p.id_pendaftaran', '=', 'pembayaran.id_pendaftaran')
      ->where('status_pembayaran', '=', 0)->orderBy('pembayaran.tanggal_pembayaran', 'DESC')
      ->paginate(10);
    $datasudah = Pembayaran::select('pembayaran.*', 'p.*')
      ->join('pendaftaran as p', 'p.id_pendaftaran', '=', 'pembayaran.id_pendaftaran')
      ->where('status_pembayaran', '=', 1)
      ->orWhere('status_pembayaran', '=', 2)
      ->orderBy('pembayaran.tanggal_pembayaran', 'DESC')
      ->paginate(10);

    $user = Auth::user()->username;

    return view(
      'admin.verifBayar',
      [
        'datasemua' => $datasemua,
        'databelum' => $databelum,
        'datasudah' => $datasudah,
        'sidebar' => 'verifikasi',
        'user' => $user
      ]
    );
  }

  public function getPembayaranById($id)
  {

    $semuaData = Pendaftaran::find($id);
    $dataBayarSemua = Pembayaran::where('id_pembayaran', 'B0001')->get();
    $datasemua = Pembayaran::select('pembayaran.*', 'p.*')
      ->join('pendaftaran as p', 'p.id_pendaftaran', '=', 'pembayaran.id_pendaftaran')
      ->where('p.id_pendaftaran', '=', $id)
      ->get();

    echo json_encode($datasemua[0]);
  }

  public function ubahSandi()
  {
    $user = Auth::user()->username;
    return view('admin.ubahSandi', [
      'sidebar' => 'ubahPW',
      'user' => $user
    ]);
  }

  public function exportSemua()
  {
    return Excel::download(new SemuaExport, 'Data Peserta dan Pendaftar.xlsx');
  }

  public function exportPendaftar()
  {
    return Excel::download(new PendaftarExport, 'Data Pendaftar.xlsx');
  }

  public function exportPeserta()
  {
    return Excel::download(new PesertaExport, 'Data Peserta.xlsx');
  }

  public function exportMoodleUser()
  {
    return Excel::download(new MoodleExport, 'Data User Moodle.csv');
  }

  public function verifikasiTrue($id)
  {
    $pembayaran = Pembayaran::find($id);
    $pembayaran->status_pembayaran = 1;
    $pembayaran->save();

    $link = url('/peserta/form_pendaftaran');
    $pendaftar = Pendaftaran::find($pembayaran->id_pendaftaran);
    Mail::to($pendaftar->email_pendaftar)->send(new PembayaranDiterimaMail($pendaftar, $link));

    return response()->json(['success' => true]);
  }

  public function verifikasiFalse($id)
  {
    $pembayaran = Pembayaran::find($id);
    $pembayaran->status_pembayaran = 2;
    $pembayaran->save();

    return response()->json(['success' => true]);
  }

  public function viewScanKTM($id)
  {
    $namafile = Pendaftaran::find($id)->scan_ktm;
    return redirect('/storage/' . $namafile);
  }

  public function viewPasFoto($id)
  {
    $namafile = Pendaftaran::find($id)->pas_foto;
    return redirect('/storage/' . $namafile);
  }

  public function viewScanSuketAktif($id)
  {
    $namafile = Pendaftaran::find($id)->scan_suket_aktif;
    return redirect('/storage/' . $namafile);
  }

  public function downloadScanKTM($id)
  {
    $namafile = Pendaftaran::find($id)->scan_ktm;
    $namafile = public_path() . "/storage/" . $namafile;
    return Response::download($namafile);
  }

  public function downloadPasFoto($id)
  {
    $namafile = Pendaftaran::find($id)->pas_foto;
    $namafile = public_path() . "/storage/" . $namafile;
    return Response::download($namafile);
  }

  public function downloadScanSuketAktif($id)
  {
    $namafile = Pendaftaran::find($id)->scan_suket_aktif;
    $namafile = public_path() . "/storage/" . $namafile;
    return Response::download($namafile);
  }
}
