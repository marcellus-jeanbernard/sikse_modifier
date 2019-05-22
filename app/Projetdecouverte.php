<?php

namespace App;

use App\Decouverte;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Projetdecouverte extends Model
{
    

    protected $fillable=[
        
        'titre',
        'description',
        'decouverte_id',
        'image'
        
    ];
     
  public function decouverte(){ 
           return $this->belongsTo('App\Decouverte');           
                            }

}
