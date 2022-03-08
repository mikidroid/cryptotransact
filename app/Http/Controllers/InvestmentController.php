<?php

namespace App\Http\Controllers;

use App\Models\investment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\InvestmentMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;


class InvestmentController extends Controller
{
    public $r;
    public function __construct($request){
       $this->r = $request;
    }

    public function new(){

        // shorthand for user eloquent
        $au = Auth::user();

         // Check if investment already exist
        $checkExisting = new investment();
        $check = $checkExisting->Expired();

        if(!$check){
        //if there was error while creating
        session()->flash('error','Failed to make investment, you have an ongoing investment!');
        return;
        }

        $data = [
            'email'=>$au->email,
            'earning'=>0,
            'amount'=>$this->r->amount,
            'user_id'=>$au->id,
            'elapse_date'=>now()->addDays(env('INVESTMENT_ELAPSE_DATE')),
            'start_date'=>now(),
           // 'plan'=>r->plan,  //will add later
            'username'=>$au->username
        ];

       // create data with array
       $create = new investment($data);

       if(!$create)
       {   //if there was error while creating
           session()->flash('error','Failed to make investment, refresh and try again!');
           return;
       }

       //check for sender in database to update balance
       $user = User::find($au->id);
       $user->balance -= $this->r->amount;
       $user->investments += 1;
       //save details
       $create->save();
       $user->save();

       //send WithdrawalMail
       Notification::send(Auth::user(),new InvestmentMail($create));

       //if successful
       session()->flash('success','Congrats, investment successful!');
       return;

    }
}
