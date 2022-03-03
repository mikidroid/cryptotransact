<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class downline extends Model
{
    use HasFactory;

    protected $fillable = [

        'email',
        'user_id',
        'referer',
        'username',
        'firstname',
        'lastname',
        'phone',
        'address'
    ];

    public function _user(){
        return $this->belongsTo(User::class);
    }


}
