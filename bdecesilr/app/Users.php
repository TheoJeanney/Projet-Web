<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model{

    public $timestamps = false;
    protected $fillable=['User_firstname','User_lastname','User_campus','User_email','User_phone','User_password','User_status','Id_campus'];
}