<?php
/**
 * 
 */


namespace App;

use App\Department;
use Illuminate\Support\Str;
use App\Membre;
use Illuminate\Database\Eloquent\Model;

class Ccpccommune extends Model
{
	


    protected $fillable=[
        
        'name',
        'email',
        'adresse',
        'telephone',
        'departement_id',
        'user_id',
        

        'nom_cordexecutif',
        'prenom_cordexecutif',
        'email_cordexecutif',
        'adresse_cordexecutif',
        'telephone_cordexecutif',

        'nom_cordlogistique',
        'prenom_cordlogistique',
        'email_cordlogistique',
        'adresse_cordlogistique',
        'telephone_cordlogistique',
        'image1',
        'image2'



        
    ];


      public function membres() 
         {
            return $this->hasMany('App\Membre');
         } 

     public function departement(){ 
           return $this->belongsTo('App\Department');           
                            }

    

}