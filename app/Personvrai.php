<?php

namespace App;

use App\Secteuractivite;
use App\Coordination;
use App\Commission;
use App\Occupationactuelle;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Personvrai extends Model
{
    

    protected $fillable=[
        
        'nom',
        'prenom',
        'dateNaissance',
        'lieuNaissane',
        'statutCivil',
        'sexe',
        'adresse',
        'email',
        'phone',
        'profession',
        'groupeSanguin',
        'occupationactuelle_id',
        'secteuractivite_id',
        'coordination_id',
        'commission_id',

        'statut',
        'laquelle',
        'quandFrequenter',
        'nomPersNorm',
        'adressePersNorm',
        'emailPersNorm',
        'phonePersNorm',
        'lienPersNorm',
        'nomPersUrg',
        'adressePersUrg',
        'emailPersUrg',
        'phonePersUrg',
        'lienPersUrg',
        'image'
        
    ];
     
  public function coordination(){ 
           return $this->belongsTo('App\Coordination');           
                            }


  public function commission(){ 
           return $this->belongsTo('App\Commission');           
                            }

  public function occupationactuelle(){ 
           return $this->belongsTo('App\Occupationactuelle');           
                            }

  public function secteuractivite(){ 
           return $this->belongsTo('App\Secteuractivite');           
                            }
}
