<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartDataController extends Controller
{
    //

    function getAllMonths(){
    	$posts = Post::orderBy('created_at', 'ASC')->pluck('created_at');
         return $posts;
    }


    function getMonthlyPostData(){

    }
}
