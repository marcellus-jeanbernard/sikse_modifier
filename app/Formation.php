<?php

namespace App;

use App\Membre;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    

    protected $fillable=[
        
        'name',
        'description'
        
    ];
    
       
     public function membre(){ 
           return $this->belongsTo('App\Membre');           
                            }
}
