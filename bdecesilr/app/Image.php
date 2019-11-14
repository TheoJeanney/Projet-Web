<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Table Name
    protected $table = 'Photos';
    // Primary Key
    public $primaryKey = 'Id_photo';
    //Timestamps
    public $timestamps = true;
}
