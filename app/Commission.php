<?php

namespace App;

use App\Personvrai;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    

    protected $fillable=[
        
        'name',
       // 'description'
        
    ];
     
      public function personvrais() 
        {
        	return $this->hasMany('App\Personvrai');
        } 

}
