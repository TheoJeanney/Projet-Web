<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class library extends Model
{
        // Table Name
        protected $table = 'photos';
        // Primary Key
        public $primaryKey = 'Id_photo';
        //Timestamps
        public $timestamps = true;

    protected $fillable = ['Photo_name, Photo_url'];

    
}
