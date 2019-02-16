<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category', 
    ];

    
    public function reports()
    {
        return $this->hasMany('App\Report');
    }

}
