<?php


namespace App\Http\Controllers;
use View;
use App\Fonction;
use App\Ccpc;
use App\Secteuractivite;


use App\Membre;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;


use Image; 
use Input; 
use Request;
//use App\Http\Controllers\Doctor;

//use App\Http\Controllers\Controller;

//use App\Http\Controllers\View;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\2;
use App\Http\Requests\MembreFormRequest;

class MembresController extends Controller
{


  
public function __construct() {
  $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function generateCode($fname, $lname){
      $code = substr($fname, 0,3) . substr($lname, 0,3) .'_'. rand(3,100);

      return $code;

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       


             $ccpcs=array();
     foreach( Ccpc::all() as $ccpc){
     $ccpcs[$ccpc->id]=$ccpc->name;
         }

 $fonctions=array();
     foreach( Fonction::all() as $fonction){
     $fonctions[$fonction->id]=$fonction->name;
         }

          $secteuractivites=array();
     foreach( Secteuractivite::all() as $secteuractivite){
     $secteuractivites[$secteuractivite->id]=$secteuractivite->name;
         }

          
           return view('membres.create', compact('ccpcs','fonctions','secteuractivites'));




    }




    // public function generateCode($fname, $lname){
    //   $code = substr($fname, 0,3) . substr($lname, 0,3) .'_'. rand(3,100);

    //   return $code;

    // }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MembreFormRequest $request)
    {
        
        // dd($this->generateCode('Jean', 'Bernard'));

            $membre = new Membre(array(
      //'code' => $request->get('__toString '),
      'code' => $this->generateCode($request->get('nom'), $request->get('prenom')),
      
      'nom' => $request->get('nom'),
      'prenom' => $request->get('prenom'),
      'sexe' => $request->get('sexe'),
      'email' => $request->get('email'),
      'adresse' => $request->get('address'),
      'ccpc_id' => $request->get('ccpc_id'),
      'fonction_id' => $request->get('fonction_id'),
      'secteuractivite_id' => $request->get('secteuractivite_id'),
      // 'email' => $request->get('email'),
      'phone' => $request->get('phone'),
      'gap' => $request->get('gap'),
      'notion_de_base' => $request->get('notion_de_base'),
      'pretest_nb' => $request->get('pretest_nb'),

      'moyenne_pre' => $request->get('moyenne_pre'),

      'post_test_nb' => $request->get('post_test_nb'),

      'moyenne_pos' => $request->get('moyenne_pos'),
      'performance' => $request->get('performance'),

      'pretest_acc' => $request->get('pretest_acc'),
      'moyenne_pretest_acc' => $request->get('moyenne_pretest_acc'),
      'post_test_acc' => $request->get('post_test_acc')
      
    ));


      $membre->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patienwt added!');        
           //Session::flash('message', 'Successfully created patient!');
            // return view('membres.essai' ,compact('personvrai','coordination','commission','secteuractivite','occupationactuelle'));

            // return Redirect::to('membres');
             return Redirect::to('admin/membres');



          



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membre = Membre::find($id);
        return view('membres.show', compact('membre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit($id)
{
  $ccpcs=array();
     foreach( Ccpc::all() as $ccpc){
     $ccpcs[$ccpc->id]=$ccpc->name;
         }

         $fonctions=array();
     foreach( Fonction::all() as $fonction){
     $fonctions[$fonction->id]=$fonction->name;
         }

         $secteuractivites=array();
     foreach( Secteuractivite::all() as $secteuractivite){
     $secteuractivites[$secteuractivite->id]=$secteuractivite->name;
         }

   $membre=Membre::find($id);
   return view('membres.edit',compact('membre','ccpcs','fonctions','secteuractivites'));
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
             public function update($id)
{
   $membreUpdate=Request::all();
   $membre=Membre::find($id);
   $membre->update($membreUpdate);
   // return view('membres');

    return redirect('admin/membres');
 // return  \View::make('admin/membres', compact('ccpcs'));
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
          public function destroy($id)
{
   Membre::find($id)->delete();
   return redirect('admin/membres');
}


   public function allmembres() {

  $membres =Membre::orderBy('created_at','desc')->paginate(5);
       
     $ccpcs = Ccpc::all();
     $fonctions = Fonction::all();  
     $secteuractivites = Secteuractivite::all();  
     

   

    return View::make('membres.allmembres')
              ->with('membres',$membres )
              ->with('ccpcs',$ccpcs)
              ->with('fonctions',$fonctions)
              ->with('secteuractivites',$secteuractivites);
              


         
             
              
     }


}
