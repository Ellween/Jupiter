<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'title', 'body','post_id', 
    ];

    protected $table = 'comments';


    public function posts()
    {
        return $this->belognsTo('App\Post');
    }
}
