<?php

namespace App;

use App\Eglise;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Pasteur extends Model
{
    

    protected $fillable=[
        
        'nom',
        'email',
        'address',
        'phone',
        'eglise_id',
        'sexe',
        'image'
        
    ];
     
  public function eglise(){ 
           return $this->belongsTo('App\Eglise');           
                            }

}
