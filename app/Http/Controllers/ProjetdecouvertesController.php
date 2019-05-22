<?php


namespace App\Http\Controllers;
use View;

use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;


use Image; 
use Input; 
use Request;
//use App\Http\Controllers\Doctor;

//use App\Http\Controllers\Controller;

//use App\Http\Controllers\View;
use App\Projetdecouverte;
use App\Decouverte;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\ProjetdecouverteFormRequest;

class ProjetdecouvertesController extends Controller
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



/*
  public function getIndex(){
       
       $departments=array();
     foreach(Department::all() as $department){
     $departments[$department->id]=$department->department;
         }


        return Redirect::to('doctors.alldoctors')
              -> with(array('doctors'=>$doctors,'departments'=>$departments));

     }

     */



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       


             $decouvertes=array();
     foreach( Decouverte::all() as $decouverte){
     $decouvertes[$decouverte->id]=$decouverte->nom;
         }

           return view('projetdecouvertes.create', compact('decouvertes'));




    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjetdecouverteFormRequest $request)
    {
        
            $projetdecouverte = new Projetdecouverte(array(
      //'code' => $request->get('__toString '),
      'titre' => $request->get('titre'),
      'description' => $request->get('description'),
      
      'decouverte_id' => $request->get('decouverte_id')
      
    ));


      // commencement 

   $image=Input::file('image');
          

    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/projetdecouvertes/' . $filename);
Image::make($image->getRealPath())->resize(468, 249)->save($path);


    $projetdecouverte->image = '/images/catalog/projetdecouvertes/'.$filename;


              $projetdecouverte->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/projetdecouvertes');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projetdecouverte = Projetdecouverte::find($id);
        return view('projetdecouvertes.show', compact('projetdecouverte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit($id)
{
  $decouvertes=array();
     foreach( Decouverte::all() as $decouverte){
     $decouvertes[$decouverte->id]=$decouverte->nom;
         }

   $projetdecouverte=Projetdecouverte::find($id);
   return view('projetdecouvertes.edit',compact('projetdecouverte','decouvertes'));
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

   //
  
    //
   $projetdecouverteUpdate=Request::all();
   $projetdecouverte=Projetdecouverte::find($id);
   $projetdecouverte->update($projetdecouvertetUpdate);
   return redirect('admin/projetdecouvertes');
 //return view('admin/doctors', compact('departments'));
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
          public function destroy($id)
{
   Projetdecouverte::find($id)->delete();
   return redirect('admin/projetdecouvertes');
}


   public function allprojetdecouvertes() {

  $projetdecouvertes =Projetdecouverte::orderBy('created_at','desc')->paginate(5);
       
     $decouvertes = Decouverte::all();  
   

    return View::make('projetdecouvertes.allprojetdecouvertes')
              ->with('projetdecouvertes',$projetdecouvertes )
              ->with('decouvertes',$decouvertes);


         
             
              
     }


}
