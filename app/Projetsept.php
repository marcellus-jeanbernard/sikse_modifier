<?php

namespace App;

use App\Septpourun;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Projetsept extends Model
{
    

    protected $fillable=[
        
        'titre',
        'description',
        'septpourun_id',
        'image'
        
    ];
     
  public function septpourun(){ 
           return $this->belongsTo('App\Septpourun');           
                            }

}
