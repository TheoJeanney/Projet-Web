<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Database campus
class Campus extends Model
{
    public function users() {
        return $this->belongsTo('App\User', 'Id_campus');
    }

    protected $table = 'Campus';

    public $primaryKey = 'Id_campus';
}