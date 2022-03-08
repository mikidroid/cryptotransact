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
        'username'
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
         $userUpdate->balance += $check->amount*2;
         $userUpdate->earnings += $check->amount*2;
         $check->delete();
         return true;
        }

        else{
        return;
        }
    }
}
