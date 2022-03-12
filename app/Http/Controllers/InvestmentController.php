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

        $au = Auth::user();
        $r = $this->r;

        $data = [
            'email'=>$au->email,
            'earning'=>0,
            'amount'=>$r->amount,
            'user_id'=>$au->id,
            'elapse_date'=>now()->addDays($r->period),
            'plan'=> $r->plan,
            'interest'=> $r->interest,
            'period' => $r->period,
            'start_date'=>now(),
           // 'plan'=>r->plan,  //will add later
            'username'=>$au->username
        ];

        if($r->amount < $r->min)
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, invest above $'.$r->min.', refresh and try again!');
            return;

        }
        
        if($r->amount > $r->max)
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, invest below $'.$r->max.', refresh and try again!');
            return;

        }

        if($r->amount > $au->balance)
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, insufficient balance!');
            return;
        }


          // create data with array
        $create = new investment($data);

        if(!$create)
        {   //if there was error while creating
            session()->flash('error','Failed to make investment, refresh and try again!');
            return;
        }

        //check for sender in database to update balance
        $user = User::find($au->id);
        $user->balance -= $r->amount;
        $user->investments += 1;
        //save details
        $create->save();
        $user->save();

        //send WithdrawalMail
        //$delay = now()->addMinute();
        Notification::send(Auth::user(),new InvestmentMail($create));

        //if successful
        session()->flash('success','Congrats, investment successful!');
        return;


    }
}
