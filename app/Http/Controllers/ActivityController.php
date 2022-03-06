<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\activity;
use App\Models\User;
use App\Notifications\ConfirmDepositMail;
use App\Notifications\DepositMail;
use App\Notifications\TransferMail;
use App\Notifications\WithdrawalMail;
use Illuminate\Support\Facades\Notification;
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
            $this->createWithdrawal($request);
            return back();
            break;

         //if it is a transfer
         case 'transfer':
            $this->createTransfer($request);
            return back();
            break;

         //if it is a investment
         case 'investment':
            new InvestmentController($request);
            return back();
            break;
      }
    }

     //
    //
    //
    // Create transfer function
    public function createTransfer($request)
    {
        $text = "ity5dff838fd7yjsiyur849827573fsxvnlkowpqasxz32x";
        $shuffled = str_shuffle($text);
        $au = Auth::user();
        $r = $request;

        //check for receiver in database
        $receiver = User::where('username',$r->receiver)->first();
        if(!$receiver)
        {   //if user isntin database
            session()->flash('error','Failed, no username registered with that name!');
            return back();
        }

        if(!$r->amount > env('MIN_TRANSFER'))
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, transfer above $'.env('MIN_TRANSFER').', refresh and try again!');
            return back();
        }

        if($r->amount > $r->balance)
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, insufficient balance!');
            return back();
        }

        //create withdrawal activity
        $transfer = new activity([
            'email'=>$au->email,
            'amount'=>$r->amount,
            'sender'=>$au->username,
            'receiver'=> $r->receiver,
            'user_id'=>$au->id,
            'ref_id'=>$shuffled,
            'type'=>'transfer'
        ]);
        $transfer->save();

        //set receiver balance
        $receiver->balance += $r->amount;

        if(!$transfer)
        {   //if there was error while creating
            session()->flash('error','Failed, error while sending, try again!');
            return back();
        }

        //send DepositMail
        Notification::sendNow(Auth::user(),new TransferMail($transfer));

        //flash payment pending
        session()->flash('success','Your transfer is successful!');
        return back();
    }
    //
    //
    //
    // Create deposit function
    public function createDeposit($request)
    {
        $text = "ity5dff838fd7yjsiyur849827573fsxvnlkowpqasxz32x";
        $shuffled = str_shuffle($text);
        $au = Auth::user();
        $r = $request;

        if(!$r->amount > env('MIN_DEPOSIT'))
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, Deposit above $'.env('MIN_DEPOSIT').', refresh and try again!');
            return back();
        }

        //create deposit activity
        $create = new activity([
            'email'=>$au->email,
            'amount'=>$r->amount,
            'status'=>'pending',
            'user_id'=>$au->id,
            'ref_id'=>$shuffled,
            'type'=>'deposit'
        ]);

        $deposit = $create->save();

        if(!$deposit)
        {   //if there was error while creating
            session()->flash('error','Failed at this time, try again!');
            return back();
        }

        //send DepositMail
        Notification::sendNow(Auth::user(),new DepositMail($deposit));

        //flash payment pending
        session()->flash('success','Your payment is awaiting confirmation!');
        return back();
    }
    //
    //
    //
    //
    //create withdrawal function
    public function createWithdrawal($request)
    {
        $text = "ity5dff838fd7yjsiyur849827573fsxvnlkowpqasxz32x";
        $shuffled = str_shuffle($text);
        $au = Auth::user();
        $r = $request;

        if(!$r->amount > env('MIN_WITHDRAWAL'))
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, withdraw above $'.env('MIN_WITHDRAWAL').', refresh and try again!');
            return back();
        }

        if($r->amount > $r->balance)
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, insufficient balance!');
            return back();
        }

        //create withdrawal activity
        $withdrawal = new activity([
            'email'=>$au->email,
            'amount'=>$r->amount,
            'status'=>'pending',
            'user_id'=>$au->id,
            'ref_id'=>$shuffled,
            'type'=>'withdrawal'
        ]);
        $withdrawal->save();

        if(!$withdrawal)
        {   //if there was error while creating
            session()->flash('error','Failed to withdraw, refresh and try again!');
            return back();
        }

        $setAcc = User::find($au->id);
        if($r->from == 'bonus'){
            $setAcc->referral_bonus -= $r->amount;
            $setAcc->save();
        }

        if($r->from == 'balance'){
            $setAcc->balance -= $r->amount;
            $setAcc->save();
        }

        $withdrawal->save();

        //send WithdrawalMail
        Notification::sendNow(Auth::user(),new WithdrawalMail($withdrawal));

        //flash payment pending
        session()->flash('success','Your request is being processed!. Contact admin for more enquires at '.env('ADMIN_EMAIL'));
        return back();
    }

    //
    //
    // confirm deposit
    public function ConfirmDeposit($id){
      $confirm = activity::find($id);
      $confirm->status = 'successful';
      $confirm->save();

      //flash approved success
      session()->flash('success','Dear Admin, You just approved a deposit!');

      //send WithdrawalMail
      Notification::sendNow($confirm,new ConfirmDepositMail($confirm));

      return back();
    }

    //
    //
    // confirm withdrawal
    public function ConfirmWithdrawal($id){
        $confirm = activity::find($id);
        $confirm->status = 'successful';
        $confirm->save();

        //flash approved success
        session()->flash('success','Dear Admin, You just approved a withdrawal!');
        return back();
      }
}
