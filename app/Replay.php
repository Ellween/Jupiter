<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replay extends Model
{
    protected $fillable = [
        'name', 'replay', 'comments_id',
    ];

    public function comments()
    {
        return $this->belongsTo('App\Comment');
    }

}
