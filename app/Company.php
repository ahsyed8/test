<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded=['id'];
    
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function username(){
        return $this->hasOne('App\Company');
    }
    
    public function jobs(){
        return $this->hasMany('App\Job');
    }
}
