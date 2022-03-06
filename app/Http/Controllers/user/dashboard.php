<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\activity;
use App\Models\investment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboard extends Controller
{
    //
    //
    // dashboard
   public function index($username)
   {

    // Check if investment already exist
    $checkExisting = new investment();
    $checkExisting->Expired();

    if(Auth::user()->username != 'admin' || Auth::user()->level < 2){
        $user = User::where('username',$username)->first();
        $activity = activity::all();
        return view('livewire.admin.dashboard',['user'=>$user,'activity'=>$activity]);
    }
     $user = User::where('username',$username)->first();
     $activity = User::find($user->id)->_activity()->get();
     return view('livewire.user.dashboard',['user'=>$user,'activity'=>$activity]);
   }
   //
   //
   // profile
   public function profile($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.myProfile',['user'=>$user]);
   }
   //
   //
   // Deposit
   public function deposit($username)
   {
     $user = User::where('username',$username)->first();
     $deposits = $user->_activity()->where('type','deposit')->get();
     return view('livewire.user.deposit',['user'=>$user,'deposits'=>$deposits]);
   }
   //
   //
   // Withdrawal
   public function withdrawal($username)
   {
     $user = User::where('username',$username)->first();
     $withdrawals = $user->_activity()->where('type','withdrawal')->get();
     return view('livewire.user.withdrawal',['user'=>$user,'withdrawals'=>$withdrawals]);
   }
   //
   //
   // investments
   public function investments($username)
   {
    if(Auth::user()->username != 'admin' || Auth::user()->level < 2){
        $user = User::where('username',$username)->first();
        $_investments = investment::all();
        return view('livewire.admin.dashboard',['user'=>$user,'investments'=>$_investments]);
    }
     $user = User::where('username',$username)->first();
     $_investments = $user->_investment()->get();
     return view('livewire.user.investments',['user'=>$user,'investments'=>$_investments]);
   }
   //
   //
   // contact
   public function contact($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.contact',['user'=>$user]);
   }
   //
   //
   // Downlines
   public function downlines($username)
   {
     $user = User::where('username',$username)->first();
     $_downlines = $user->_downlines()->get();
     return view('livewire.user.downlines',['user'=>$user,'downlines'=>$_downlines]);
   }
   //
   //
   // Transfer
   public function transfer($username)
   {
    if(Auth::user()->username != 'admin' || Auth::user()->level < 2){
        $user = User::where('username',$username)->first();
        $activity = activity::all();
        return view('livewire.admin.dashboard',['user'=>$user,'activity'=>$activity]);
    }
     $user = User::where('username',$username)->first();
     $transfers = $user->_activity()->where('type','transfer')->get();
     return view('livewire.user.transfer',['user'=>$user,'transfers'=>$transfers]);
   }
   //
   //
   // get all users, Admin
   public function users($username)
   {
     $user = User::where('username',$username)->first();
     $allusers = User::all();
     return view('livewire.user.transfer',['user'=>$user,'users'=>$allusers]);
   }

     //
   //
   // get one user, Admin
   public function user($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.transfer',['user'=>$user]);
   }


}
