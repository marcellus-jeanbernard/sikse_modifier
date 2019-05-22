<?php
/**
 * 
 */


namespace App;

use App\Department;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Ccpccommune extends Model
{
	


    protected $fillable=[
        
        'name',
        'departement_id'
        
    ];


     public function department(){ 
           return $this->belongsTo('App\Department');           
                            }



}