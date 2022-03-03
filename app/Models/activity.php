<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'sender',
        'receiver',
        'phone',
        'amount',
        'status',
        'user_id',
        'ref_id',
        'type',
        'wallet_address',
        'plan',
    ];

    public function _user(){
        return $this->belongsTo(User::class);
    }
}
