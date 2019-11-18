<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//User model
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array   
    
     */
    protected $table = 'Users';

    protected $primaryKey = 'Id_user';

    protected $fillable = [
        'Id_user','User_firstname','User_lastname','User_phone', 'email', 'password', 'Id_campus','Id_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function campus() {
        return  $this->belongsTo('App\Campus', 'Id_campus');
    }
}
