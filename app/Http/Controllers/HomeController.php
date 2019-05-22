<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// use App\Charts\SampleChart;


use Charts;
use DB;
use App\Comment;
use App\Post;
use App\Ccpc;
use App\Pasteur;
use App\Slider;
use App\Fonction;
use App\Secteuractivite;
use App\Membre;
use App\User;
use App\Department;
use App\Ccpccommune;
use Input; 
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

        // $departements = Department::all();



  // $dep_id = Input::get('dep_id');
  // $ccpccommunes = Ccpccommune::where('departement_id', '=', $dep_id )->get();

     $ccpcs = Ccpc::count();
     $membres = Membre::count();

       $pasteurs = Pasteur::orderBy('created_at','desc')->take(4)->get();

       //$doctors = Doctor::orderBy('created_at','desc')->take(4)->get(); 
       $sliders = Slider::orderBy('created_at','desc')->take(2)->get();
       $posts = Post::orderBy('created_at','desc')->take(6)->get();

       $comments = Comment::orderBy('created_at','desc')->take(3)->get();

        return \View::make('home.index')->with(array(
              'pasteurs' => $pasteurs,
              'sliders' => $sliders,
              'posts' =>$posts,
              'comments'=>$comments,
              'ccpcs' =>$ccpcs,
              'membres'=>$membres
            ));
    }




    public function form()
    {

       $departements = Department::all();
     
  $dep_id = Input::get('dep_id');
  $ccpccommunes = Ccpccommune::where('departement_id', '=', $dep_id )->get();
  return \View::make('home.form')->with(array(
                         'departements'=>$departements,
                         'ccpccommunes' =>$ccpccommunes

    ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


  public function admin()
      {


    $membres = Membre::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->get();
        $chart = Charts::database($membres, 'bar', 'highcharts')
                  ->title("  Enregistrement des Membres par mois")
                  ->elementLabel("Total Membres")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByMonth(date('Y'), true);






        $pie  =  Charts::create('pie', 'highcharts')
                    ->title('My nice chart')
                    ->labels(['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi','Samedi', 'Dimanche'])
                    ->values([5,10,20,30,40,50,60])
                    ->dimensions(1000,500)
                    ->responsive(true);     





        $ccpcs = Ccpc::count();
        $sliders = Slider::count();

        $fonctions = Fonction::count();
        $secteuractivites = Secteuractivite::count();
        $membres = Membre::count();
        $users = User::count();


            return view('home.admin')->with(array( 
                  
                  'chart' => $chart,
                  'pie' =>$pie,
                  'ccpcs' => $ccpcs,
                  'fonctions' => $fonctions,
                  'secteuractivites' =>$secteuractivites,
                  'membres' => $membres,
                  'sliders' => $sliders,
                  'users' => $users
                  
                  
   ));  
   // return \View::make('home.admin');

      }



}
