<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Like Model on database
class Like extends Model
{
    // Table Name
    protected $table = 'Likes';
    // Primary Key
    public $primaryKey = 'id_like';
    //Timestamps
    public $timestamps = true;
}
