<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use View;
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

     $ccpcs = Ccpccommune::count();
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

// showform method

    public function showForm(){
      $dep = Department::all();

      return view('home.form',compact('dep'));
                  
      
    }




// public function form($id){
  
//   $data  = Ccpccommune::join('departments','departments.id', '=', 'ccpccommunes.departement_id')
//             ->selectRaw('departments.name,
//                          ccpccommunes.name,
//                          ccpccommunes.email,
//                          ccpccommunes.adresse,
//                          ccpccommunes.telephone')
//                         ->get();
//   return $data;

//    }




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



 public function form($id){
  
  $data  = Ccpccommune::where('departement_id','=', $id)->get();
  return $data;

   }



   public function findadresse(Request $request){
  
  $c  = Ccpccommune::select('adresse')->where('id',$request->id)->first();
  return $c;

   }




   public function findemail(Request $request){
  
  $e  = Ccpccommune::select('email')->where('id',$request->id)->first();
  return $e;

   }



   public function findtelephone(Request $request){
  
  $t  = Ccpccommune::select('telephone')->where('id',$request->id)->first();
  return $t;

   }


   public function data(){
      
     $ccpccommunes =Ccpccommune::orderBy('created_at','desc')->paginate(2);
  
         return view('home.data', compact('ccpccommunes'));

}




  public function historiques(){
    return \View::make('home.historiques');
  }



  public function objectif(){
    return \View::make('home.objectif');
  }


  public function equipe(){
    return \View::make('home.equipe');
  }
   

public function formation(){
    return \View::make('home.formation');
  }

  public function sondage(){
    return \View::make('home.sondage');
  }



  public function etudes(){
    return \View::make('home.etudes');
  }



  public function executionprojet(){
    return \View::make('home.executionprojet');
  }



  public function appui(){
    return \View::make('home.appui');
  }



     // public function affichermembre($slug){

     //  $membre = Membre::where('slug', $slug);
     //    return view('home.affichermembre', compact('membre'));
     //       }




 public function affichermembre($id){
  
   return view('home.affichermembre',['ccpccommune' => Ccpccommune::find($id)]);
 }
 

       

}
