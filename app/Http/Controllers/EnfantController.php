<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use DB;
//use App\Enfant;
use App\Personvrai;
class EnfantController extends Controller
{
    //

    public function insert()
    {
      return view('enfants.info');
    }
    public function edit(){
    	return view('enfants.update');
    }
    public function update(){
    	
    }
}
