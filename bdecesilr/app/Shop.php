<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Shop model
class Shop extends Model
{
    // Table Name
    protected $table = 'Products';
    // Primary Key
    public $primaryKey = 'Id_product';
    //Timestamps
    public $timestamps = true;
}
