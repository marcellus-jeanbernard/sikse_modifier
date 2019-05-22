<?php

namespace App;

use App\Membre;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Ccpc extends Model
{
    

    protected $fillable=[
        
        'name',
        'description'
        
    ];
     
      public function membres() 
         {
         	return $this->hasMany('App\Membre');
         } 

}
