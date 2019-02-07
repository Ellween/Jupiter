<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'description', 'image','full_description','alien_1','alien_2','alien_3','leader_alien','alien_1_description','alien_2_description','alien_3_description',
        'leader_alien_description','status',
    ];


    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
