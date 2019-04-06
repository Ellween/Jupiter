<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category', 'report_reason', 'report_reason',
    ];

    
    public function reports()
    {
        return $this->hasMany('App\Report');
    }

}
