<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'earning',
        'amount',
        'status',
        'user_id',
        'elapse_date',
        'start_date',
        'expire_date',
        'plan',
        'username',
        'interest',
        'period'
    ];

    public function _user(){
        return $this->belongsTo(User::class);
    }

    public function Expired(){
        $check = $this::where('user_id',Auth::user()->id)->first();
        $date = now();

        if(is_null($check)){
          return;
        }

        if($check->elapse_date < $date ){
         $userUpdate = User::find(Auth::user()->id);
         
         //convert interest eg. 200%/100 = 2.0
         $convertInterest = $check->interest/100;
         
         //add interest to balance and earning
         $userUpdate->balance += $check->amount*$convertInterest;
         
         $userUpdate->earnings += $check->amount*$convertInterest;
         
         //delete investment after fullfiled
         $check->delete();
         return true;
        }

        else{
        return;
        }
    }
}
