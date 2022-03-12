<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
         
          //goto admin if user is admin
          if(Auth::user()->username == "admin"||Auth::user()->level > 2){
             return redirect('/admin/'.Auth::user()->username.'/dashboard'); }
             
             //goto user dashboad if not admin
             return redirect('/user/'.Auth::user()->username.'/dashboard');
            
        }
        return $next($request);
    }
}
