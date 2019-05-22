<?php

namespace App;

use App\Department;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    

    protected $fillable=[
        
        'titre',
        'description',
        'department_id',
        'image'
        
    ];
     
  public function department(){ 
           return $this->belongsTo('App\Department');           
                            }

}
