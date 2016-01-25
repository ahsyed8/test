<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded=['id'];
    
    public function job(){
        return $this->belongsTo('App\Job');
    }
}
