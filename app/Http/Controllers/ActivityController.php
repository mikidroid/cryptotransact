<?php

namespace App\Http\Controllers;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\Controller;
use App\Models\activity;
use App\Models\investment;
use App\Models\User;
use App\Notifications\ConfirmDepositMail;
use App\Notifications\DepositMail;
use App\Notifications\InvestmentMail;
use App\Notifications\TransferMail;
use App\Notifications\WithdrawalMail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ActivityController extends Controller{

    public $r;

    public function __construct(Request $request){
       $this->r = $request;
    }

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
            $this->createInvestment($request);
            return back();
            break;
      }
    }
    //
    //
    // Investment
    public function createInvestment($request){
         // Check if investment already exist
        // $checkExisting = new investment();
       //  $check = $checkExisting->Expired();
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

        if($request->amount < env('MIN_INVESTMENT'))
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, transfer above $'.env('MIN_TRANSFER').', refresh and try again!');
            return;

        }

        if($request->amount > $au->balance)
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, insufficient balance!');
            return;
        }

        $check = investment::where('user_id',Auth::user()->id)->first();
        $date = now();


        // if null
         if(is_null($check)){
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

         else{
            session()->flash('error','Ongoing investment!');
            return;
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
        //check for sender in database
        $sender = User::find($au->id);

        if(!$receiver)
        {   //if user isntin database
            session()->flash('error','Failed, no username registered with that name!');
            return;
        }

        if(!$r->amount > env('MIN_TRANSFER'))
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, transfer above $'.env('MIN_TRANSFER').', refresh and try again!');
            return;
        }

        if($r->amount > $au->balance)
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, insufficient balance!');
            return;
        }

        //create transfer activity
        $transfer = new activity([
            'email'=>$au->email,
            'amount'=>$r->amount,
            'sender'=>$au->username,
            'receiver'=> $r->receiver,
            'user_id'=>$au->id,
            'ref_id'=>$shuffled,
            'status'=>'successful',
            'type'=>'transfer'
        ]);
        $transfer->save();

        //set receiver balance
        $receiver->balance += $r->amount;

        //set sender balance
        $sender->balance -= $r->amount;


        if(!$transfer)
        {   //if there was error while creating
            session()->flash('error','Failed, error while sending, try again!');
            return;
        }


        //send TransferMail
        Notification::route('mail',$receiver->email)->notify(new TransferMail($transfer));

        $receiver->save();
        $sender->save();

        //flash payment pending
        session()->flash('success','Your transfer is successful!');
        return;
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
            'username'=>$au->username,
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
        Notification::send(Auth::user(),new DepositMail($create));

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

        if($r->amount > $au->balance)
        {   //if amount isnt = minimum amount
            session()->flash('error','Failed, insufficient balance!');
            return back();
        }

        //create withdrawal activity
        $withdrawal = new activity([
            'email'=>$au->email,
            'amount'=>$r->amount,
            'username'=>$au->username,
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
            $setAcc->withdrawals += 1;
            $setAcc->save();
        }

        if($r->from == 'balance'){
            $setAcc->balance -= $r->amount;
            $setAcc->withdrawals += 1;
            $setAcc->save();
        }

        $withdrawal->save();

        //send WithdrawalMail
        Notification::send(Auth::user(),new WithdrawalMail($withdrawal));

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

      //update user balance
      $addbalance = User::find($confirm->user_id);
      $addbalance->balance += $confirm->amount;

      //save deposit changes
      $confirm->save();

      //flash approved success
      session()->flash('success','Dear Admin, You just approved a deposit!');

      //send Confirm deposit mail
      Notification::route('mail',$confirm->email)->notify(new ConfirmDepositMail($confirm));

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
