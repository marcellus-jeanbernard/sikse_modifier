<?php

namespace App;

use App\Pasteur;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Eglise extends Model
{
    

    protected $fillable=[
        
        'nom',
        'adresse',
        'description'
        
    ];
     
     public function doctors() 
        {
        	return $this->hasMany('App\Pasteur');
        } 

}
