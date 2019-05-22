<?php

namespace App;

use App\Personvrai;
use App\Membre;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Secteuractivite extends Model
{
    

    protected $fillable=[
        
        'name',
        'description'
        
    ];
     
           public function personvrais() 
        {
        	return $this->hasMany('App\Personvrai');
        } 



          public function membres() 
        {
        	return $this->hasMany('App\Membre');
        } 

        

}
