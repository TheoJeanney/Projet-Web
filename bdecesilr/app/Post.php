<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Post model on database
class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id_posts';
    //Timestamps
    public $timestamps = true;

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
