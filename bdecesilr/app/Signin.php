<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Signin model
class Signin extends Model
{
    // Table Name
    protected $table = 'sign_in';
    // Primary Key
    public $primaryKey = 'id_signin';
    //Timestamps
    public $timestamps = true;
}

