<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Pengguna;
use App\Pendaftaran;


class authController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function postlogin(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
            'password_user' => 'required',
        ]);
        $credentials = ($request->only('username','password_user'));
        if($this->auth->attempt($credentials)){
            return redirect('/peserta/dashboard_user');
        }
        return "wrong again !!";

        // if(!auth()->attempt(['username' => $request->username, 'password_user' => $request->password_user])){
        //     return redirect('/login');
        // }
        // return redirect('/peserta/dashboard_user');

        // if(Auth::attempt($request->only('username','password_user'))){
        //     return redirect('/peserta/dashboard_user');
        // }
        // return redirect('/login');
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
        
        $pendaftaran = Pendaftaran::create([
            'nama_pendaftar'=>$request->nama_pendaftar,
            'asal_univ_pendaftar'=>$request->asal_univ_pendaftar,
            'email_pendaftar'=>$request->email_pendaftar
            ]);
        
        $daftar = Pendaftaran::select('id_pendaftaran')->orderBy('id_pendaftaran','DESC')->first();
        
        $pengguna = Pengguna::create([
            'id_pendaftaran'=>$daftar,
            'username'=>$request->username,
            'password_user'=>bcrypt($request->password_user)
            ]);

            // return redirect()->back();
            // dd($request->all());
            
        // Auth::loginUsingId($pengguna->id_user);

        return redirect('/login');
    }
}
