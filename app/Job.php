<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = ['id'];
    
    public function user(){
        return $this->hasMany('App\User');
    }
    
    public function company(){
        return $this->belongsTo('App\Company');
    }
}
