<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\View;

use App\Decouverte;
use App\Eglise;
use App\Pasteur;
use App\Septpourun;
use App\Projetsept;
use App\Ccpc;
//use App\Doctor;
//use App\Nurse;
//use App\Pharmacist;
//use App\Laboratorist;
//use App\Accountant;
//use App\Receptionist;
use App\Slider;
use App\Comment;
use App\Post;

class AdminController extends Controller
{

public function __construct() {
  $this->middleware('auth');
}

    public function earnings()
       {
        $sliders = Slider::count();
       	$ccpcs = Ccpc::count();
         $departments = Department::count();

        $comments = Comment::count();
        $posts = Post::count();



         $lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
         //$lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
         //$lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
         //$lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
         //$lastPatients = Patient::orderBy('created_at','desc')->take(5)->get();
        
       	return view('home.admin')->with(array(
                  'sliders' => $sliders, 
                  'ccpcs' => $ccpcs,
                  'departments'=>$departments,
                  'comments' =>$comments,
                  'posts' => $posts
                  
   ));  
       }

       
}
