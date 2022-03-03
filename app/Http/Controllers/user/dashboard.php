<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\activity;
use App\Models\User;
use Illuminate\Http\Request;

class dashboard extends Controller
{
   public function index($username)
   {
     $user = User::where('username',$username)->first();
     $activity = User::find($user->id)->_activity()->get();
     return view('livewire.user.dashboard',['user'=>$user,'activity'=>$activity]);
   }

   public function profile($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.myProfile',['user'=>$user]);
   }

   public function deposit($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.deposit',['user'=>$user]);
   }

   public function withdrawal($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.withdrawal',['user'=>$user]);
   }

   public function investments($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.investments',['user'=>$user]);
   }

   public function contact($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.contact',['user'=>$user]);
   }

   public function downlines($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.downlines',['user'=>$user]);
   }

   public function transfer($username)
   {
     $user = User::where('username',$username)->first();
     return view('livewire.user.transfer',['user'=>$user]);
   }


}
