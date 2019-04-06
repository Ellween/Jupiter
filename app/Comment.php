<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'title', 'body','post_id','users_id', 'report_type','report_reason',
    ];

    protected $table = 'comments';


    public function posts()
    {
        return $this->belognsTo('App\Post');
    }

    public function reports()
    {
        return $this->belongsToMany('App\Report');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function replays()
    {
        return $this->hasMany('App\Replay');
    }
    

}
