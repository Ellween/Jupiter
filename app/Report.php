<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'category', 
    ];


    public function comments()
    {
        return $this->belongsTo('App\Comment');
    }
}
