<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Database comment
class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    protected $table = 'comments';
    // Primary Key
    public $primaryKey = 'id_comments';

    protected $fillable = [
        'id_comments','comment','user_id','post_id'
    ];
    //Timestamps
    public $timestamps = true;
}
