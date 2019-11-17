<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likelibrary extends Model
{
    // Table Name
    protected $table = 'likeslibrary';
    // Primary Key
    public $primaryKey = 'id_like';
    //Timestamps
    public $timestamps = true;
}
