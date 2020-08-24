<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Pengguna;


class AuthController extends Controller
{
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
        
        // $daftar = Pendaftaran::create([
        //     'nama_pendaftar'=>$request->nama_pendaftar,
        //     'asal_univ_pendaftar'=>$request->asal_univ_pendaftar,
        //     'email_pendaftar'=>$request->email_pendaftar
        //     ]);
        //     // dd($request->all());
        // auth()->loginUsingId($daftar->id_pendaftaran);
        // return redirect('/peserta/dashboard_user');
        // // return redirect()->back();

        $pendaftaran = Pendaftaran::create([
            'nama_pendaftar' => $request->nama_pendaftar,
            'asal_univ_pendaftar' => $request->asal_univ_pendaftar,
            'email_pendaftar' => $request->email_pendaftar,
            'status_pendaftaran' => 0
            ]);
        
        $id_daftar = Pendaftaran::select('id_pendaftaran')->orderBy('id_pendaftaran','DESC')->first();
        
        $pengguna = Pengguna::create([
            'id_role' => 2,
            'id_pendaftaran' => $id_daftar->id_pendaftaran,
            'username' => $request->username,
            'password_user' => bcrypt($request->password_user),
            'status_user' => 1
        ]);

            // return redirect()->back();
            // dd($request->all());
            
        // Auth::loginUsingId($pengguna->id_user);

        return redirect('/login');
    }

    public function changepass(Request $req){

        echo "masuk controller";
        $id = Auth::user()->id_user;
        echo "id pengguna yang login ".$id;
        $pengguna = Pengguna::find($id);
        echo "username pengguna dan password lama".$pengguna->username.$pengguna->password;
        echo "password lama hasil input".bcrypt($req->pwnow);
        if(bcrypt($req->pwnow) == $pengguna->password){
            echo "masuk if pertama";
            if($req->pwnew == $req->pwnew2){
                echo "masuk if kedua";
                $pengguna->password = bcrypt($req->pwnew);
                $pengguna->save();
                echo "selesai save";
            }
        }
        
        // return redirect('/home');
    }

}
