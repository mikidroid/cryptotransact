<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\RegistrationMail;
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
        $text = "ity5dff8x";
        $shuffled = str_shuffle($text);
        $addCred = [
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'firstname'=>$request->firstname,
        'balance'=>env('DEFAULT_BALANCE'),
        'lastname'=>$request->lastname,
        'username'=>$request->username,
        'ref_link'=>env('WEBSITE_URL').'/'.$shuffled.'/'.$request->username.'/register'];

        $createUser = new User($addCred);

        if($createUser->save())
        {
          //$delay = now()->addMinute();
          $createUser->notify(new RegistrationMail($createUser));
            session()->flash('success','Congrats! your '.env('APP_NAME').' account is created');
            return redirect('/login');
        }
        session()->flash('error','Error with registration!');
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

    public function updateProfile(Request $request,$usernane)
    {
        $addCred = [
        'state'=>$request->state,
        'phone'=>$request->phone,
        'country'=>$request->country,
        'address'=>$request->address,
        'profile_complete'=>true,
        ];

        if(User::find(Auth::user()->id)->update($addCred))
        {
            session()->flash('success','Your profile has been updated!');
            return back();
        }
        session()->flash('error','Error with details!');
        return back();
    }

    public function updateBank(Request $request,$usernane)
    {
        $addCred = [
        'bank_name'=>$request->bank_name,
        'acc_no'=>$request->acc_no,
        'acc_name'=>$request->acc_name,
        ];

        if(User::find(Auth::user()->id)->update($addCred))
        {
            session()->flash('success','Your bank details has been updated!');
            return back();
        }
        session()->flash('error','Error with details!');
        return back();
    }

    public function updateCrypto(Request $request,$usernane)
    {
        $addCred = [
        'coin_host'=>$request->coin_host,
        'wallet_address'=>$request->wallet_address
        ];

        if(User::find(Auth::user()->id)->update($addCred))
        {
            session()->flash('success','Your crypto details has been updated!');
            return back();
        }
        session()->flash('error','Error with details!');
        return back();
    }

}
