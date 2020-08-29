<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class VerifiedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->verified){
            return $next($request);
        }
        else{
            return view('auth.verify')->with('warning','Email anda belum terverifikasi.');
        }
    }
}
