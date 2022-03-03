<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('livewire.auth.login');
    }

    public function login(Request $request)
    {
        $cred = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $remember = $request->remember;

        if(Auth::attempt($cred,$remember))
        {
             $request->session()->regenerate();
             session()->flash('success','Login successful!');
             return redirect()->intended('/user/'.Auth::user()->username.'/dashboard');
        }

        session()->flash('error','Unable to sign in');
        return back();
    }



    //Register
    public function registerView()
    {
        return view('livewire.auth.register');
    }


    public function register(Request $request)
    {
        $cred = $request->validate([
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed|min:6',
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required|unique:users,username'
        ]);

        $addCred = [
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'username'=>$request->username,
        'ref_link'=>env('WEBSITE_URL').'/'.now().'/'.$request->username.'/register'];

        if(User::create($addCred))
        {
            session()->flash('success','Congrats! your '.env('APP_NAME').' account is created');
            return redirect('/login');
        }
        session()->flash('error','error mehn!');
        return back();
    }

    //loggout
    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }

}
