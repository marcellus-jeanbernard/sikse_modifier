<?php

namespace App;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    


    protected $fillable=[
        
        'name',
        'year',
        'price'
        
    ];
}
