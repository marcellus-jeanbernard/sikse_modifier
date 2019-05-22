<?php

namespace App;

use App\Secteuractivite;
use App\Ccpc;
use App\Fonction;
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
        'address',
        'ccpc_id',
        'fonction_id',
        'secteuractivite_id',
        

        'phone',
        'gap',
        'notion_de_base',
        'pretest_nb',
        'moyenne_pre',

        'post_test_nb',

        'moyenne_pos',

        'performance',

        'pretest_acc',

        'moyenne_pretest_acc',

        'post_test_acc'

    ];
     
  public function ccpc(){ 
           return $this->belongsTo('App\Ccpc');           
                            }


  public function fonction(){ 
           return $this->belongsTo('App\Fonction');           
                            }

  public function secteuractivite(){ 
           return $this->belongsTo('App\Secteuractivite');           
                            }

}
