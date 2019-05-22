<?php

namespace App;
use App\Ccpccommune;
use App\Projet;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    

    protected $fillable=[
        
        'name',
        'description'
        
    ];
     
     public function projets() 
        {
        	return $this->hasMany('App\Projet');
        }


             public function ccpccommunes() 
        {
        	return $this->hasMany('App\Ccpccommune');
        } 

}
