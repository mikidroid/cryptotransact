<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'password',
        'earnings',
        'downlines',
        'level',
        'phone',
        'bank_name',
        'acc_no',
        'acc_name',
        'coin_host',
        'wallet_address',
        'username',
        'country',
        'state',
        'balance',
        'address',
        'avatar_url',
        'ref_link',
        'referral_bonus',
        'investments',
        'withdrawals',
        'profile_complete',
        'card_front',
        'card_back',
        'id_type',
        'utility_file'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'avatar_url',
    ];


    public function announcement(){
      return $this->hasMany(Announcement::class);
    }

    public function _activity(){
        return $this->hasMany(activity::class);
      }


      public function routeNotificationForMail($notification)
    {
        // Return email address only...
        // return $this->email_address;

        // Return email address and name...
        return [$this->email_address => $this->name];
    }
}
