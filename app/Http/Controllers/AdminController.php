<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
    	return view('admin.dashboard');
    }
    public function pendaftar(){
    	return view('admin.pendaftar');
    }
    public function verifikasi(){
    	return view('admin.verifikasi');
    }
}
