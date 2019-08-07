<?php

namespace App;
use Formation;
use App\Ccpccommune;
use App\Secteuractivite;
use App\Ccpc;
use App\Fonction;
use App\Membre;
// use App\Occupationactuelle;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    

    protected $fillable=[
        'code',
        'nom',
        'prenom',
        'sexe',
        'email',
        'nif',
        'cin',
        'profession',
        'employer',
        'address',
        'ccpccommune_id',
        'fonction_id',
        'secteuractivite_id',
        

        'phone',
        'date_entrer',
        'image'

    ];
     

          public function formations() 
        {
            return $this->hasMany('App\Formation');
        }

  // public function ccpc(){ 
  //          return $this->belongsTo('App\Ccpc');           
  //                           }


  public function ccpccommune(){ 
           return $this->belongsTo('App\Ccpccommune');           
                            }


  public function fonction(){ 
           return $this->belongsTo('App\Fonction');           
                            }

  public function secteuractivite(){ 
           return $this->belongsTo('App\Secteuractivite');           
                            }

}
