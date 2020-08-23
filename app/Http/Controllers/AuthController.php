<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Pendaftaran;
use App\Pengguna;


class authController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());
        if(Auth::attempt($request->only('username','password_user'))){
            return redirect('/peserta/dashboard_user');
        }
        return redirect('/login');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    public function register()
    {
        return view('/register');
    }
    
    public function postregister(Request $request)
    {
        // dd('register oke');
        
        $daftar = Pendaftaran::create([
            'nama_pendaftar'=>$request->nama_pendaftar,
            'asal_univ_pendaftar'=>$request->asal_univ_pendaftar,
            'email_pendaftar'=>$request->email_pendaftar
            ]);
            // dd($request->all());
        auth()->loginUsingId($daftar->id_pendaftaran);
        return redirect('/peserta/dashboard_user');
        // return redirect()->back();
    }

}
