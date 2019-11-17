<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentlibrary extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    protected $table = 'commentlibrary';
    // Primary Key
    public $primaryKey = 'id_comments';

    protected $fillable = [
        'id_comments','comment','user_id','post_id'
    ];
    //Timestamps
    public $timestamps = true;

}
