<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VerifyUser;
use Auth;

class VerifyEmailController extends Controller
{
    public function show(){
    	return view('auth.verify');
    }

    public function verify($id,$token)
	{
	  $verifyUser = VerifyUser::where('token', $token)->first();
	  if(isset($verifyUser)){
	    $user = $verifyUser->user;
	    if(!$user->verified && $user->id_user == $id) {
	      $verifyUser->user->verified = 1;
	      $verifyUser->user->save();
	      $status = "Your e-mail is verified. You can now login.";
	      $verifyUser->delete();
	    } else {
	      $status = "Your e-mail is already verified. You can now login.";
	    }
	  } else {
	    return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
	  }
	  return redirect('/login')->with('status', $status);
	}
}
