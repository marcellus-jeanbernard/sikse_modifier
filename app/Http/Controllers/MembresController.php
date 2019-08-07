<?php


namespace App\Http\Controllers;
use View;
use App\Fonction;
use App\Ccpccommune;
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
       


             $ccpccommunes=array();
     foreach( Ccpccommune::all() as $ccpccommune){
     $ccpccommunes[$ccpccommune->id]=$ccpccommune->name;
         }

 $fonctions=array();
     foreach( Fonction::all() as $fonction){
     $fonctions[$fonction->id]=$fonction->name;
         }

          $secteuractivites=array();
     foreach( Secteuractivite::all() as $secteuractivite){
     $secteuractivites[$secteuractivite->id]=$secteuractivite->name;
         }

          
           return view('membres.create', compact('ccpccommunes','fonctions','secteuractivites'));




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
      
      //'code' => $this->generateCode($request->get('nom'), $request->get('prenom')),
      'code' =>$request->get('code'),
      'nom' => $request->get('nom'),
      'prenom' => $request->get('prenom'),
      'sexe' => $request->get('sexe'),
      'email' => $request->get('email'),
      'nif' => $request->get('nif'),
      'cin' => $request->get('cin'),
      'profession' => $request->get('profession'),
      'employer' => $request->get('employer'),
      'address' => $request->get('address'),

      'ccpccommune_id' => $request->get('ccpccommune_id'),
      'fonction_id' => $request->get('fonction_id'),
      'secteuractivite_id' => $request->get('secteuractivite_id'),
      // 'email' => $request->get('email'),
      'phone' => $request->get('phone'),
      'date_entrer' => $request->get('date_entrer')
      
    ));

           // commencement 

   $image=Input::file('image');
          

    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/membres/' . $filename);
Image::make($image->getRealPath())->resize(249, 200)->save($path);


    $membre->image = '/images/catalog/membres/'.$filename;
       


      $membre->save();

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
  $ccpccommunes=array();
     foreach( Ccpccommune::all() as $ccpccommune){
     $ccpccommunes[$ccpccommune->id]=$ccpccommune->name;
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
       
     $ccpccommunes = Ccpccommune::all();
       
       

     $fonctions = Fonction::all();  
     $secteuractivites = Secteuractivite::all();  
     

   

    return View::make('membres.allmembres')
              ->with('membres',$membres )
              ->with('ccpccommunes',$ccpccommunes)
              ->with('fonctions',$fonctions)
              ->with('secteuractivites',$secteuractivites);
              


         
             
              
     }

     // public function affichermembre(){

     //              $membre = Membre::find($id);
     //    return view('membres.affichermembre', compact('membre'));
                
     //                                 }


      public function data(){
      
     // $membres =Membre::orderBy('created_at','desc')->paginate(15);
          $membres =Membre::orderBy('created_at','desc')->paginate(2);
  
         return view('membres.data', compact('membres'));

}                                 


}
