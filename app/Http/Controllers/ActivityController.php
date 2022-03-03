<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\activity;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ActivityController extends Controller
{
    public function create(Request $request)
    {
      switch($request->type){

        //if it is a deposit
          case 'deposit':
            $this->createDeposit($request);
            return back();
            break;

         //if it is a withdrawal
         case 'withdrawal':
            $this->createWithdrawal();
            return back();
            break;

         //if it is a transfer
         case 'transfer':
            $this->createTransfer();
            return back();
            break;

         //if it is a investment
         case 'investment':
            $this->createInvestment();
            return back();
            break;
      }
    }

    public function createDeposit($request)
    {
        $text = "ity5dff838fd7yjsiyur849827573fsxvnlkowpqasxz32x";
        $shuffled = str_shuffle($text);
        $au = Auth::user();
        $r = $request;

        if(!$r->amount < 500)
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, refresh and try again!');
            return back();
        }

        //create deposit activity
        $deposit = activity::create([
            'email'=>$au->email,
            'amount'=>$r->amount,
            'status'=>'pending',
            'user_id'=>$au->id,
            'ref_id'=>$shuffled,
            'type'=>'deposit'
        ]);

        if(!$deposit)
        {   //if there was error while creating
            session()->flash('error','Failed, refresh and try again!');
            return back();
        }

        //flash payment pending
        session()->flash('success','Your payment is awaiting confirmation!');
        return back();
    }
}
