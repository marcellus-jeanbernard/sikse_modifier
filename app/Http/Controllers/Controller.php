<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Department; 
use App\Ccpc;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
     // public function __construct(){

     // 	  $this->middleware(function() {
     // 	  	View()->share('depnav', Department::all());

     // 	  });
     // }



//     public function __construct() {
// $this->middleware(function() {
//   View::share('ccnav', Ccpc::all());
// });
// }



}
