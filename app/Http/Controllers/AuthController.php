<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use DB;

class AuthController extends Controller
{
    
    public function register()
    {
        return view('register');
    }
    
    public function postregister(Request $request)
    {

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
            'password' => bcrypt($request->password_user),
            'status_user' => 1
        ]);

        $to_name = $request->nama_pendaftar;
        $to_email = $request->email_pendaftar;
        $data = array('name'=>'Ogbonna Vitalis(sender_name)', 'body' => 'A test mail');
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject(Laravel Test Mail’);
                $message->from('deaamartya3@gmail.com','Test Mail');
            }
        );

        return redirect('/login');
    }

    public function changepass(Request $req){

        $id = Auth::user()->id_user;
        $pengguna = Pengguna::find($id);
        if(Hash::check($req->pwnow,$pengguna->password)){
            if($req->pwnew == $req->pwnew2){
                $pengguna->password = Hash::make($req->pwnew);
                $pengguna->save();
            }
        }
        
        return redirect('/home');
    }

}
