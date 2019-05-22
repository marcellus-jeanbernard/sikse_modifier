<?php

namespace App;

//use App\Doctor;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Septpourun extends Model
{
    

    protected $fillable=[
        
        'nom',
        'description'
        
    ];
     
     // public function doctors() 
     //    {
     //    	return $this->hasMany('App\Doctor');
     //    } 

}
