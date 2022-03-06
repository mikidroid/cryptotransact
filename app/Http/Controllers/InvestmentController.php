<?php

namespace App\Http\Controllers;

use App\Models\investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    public $r;
    public function __construct($request){
       $this->r = $request;
    }

    public function new(){

        // shorthand for user eloquent
        $au = Auth::user();
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
       }

        //if successful
        session()->flash('success','Congrats, investment successful!');

    }
}
