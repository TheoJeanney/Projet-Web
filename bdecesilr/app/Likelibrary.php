<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Like library on database
class Likelibrary extends Model
{
    // Table Name
    protected $table = 'likeslibrary';
    // Primary Key
    public $primaryKey = 'id_like';
    //Timestamps
    public $timestamps = true;
}
