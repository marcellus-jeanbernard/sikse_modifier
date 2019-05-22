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
use App\Pasteur;
use App\Eglise;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\PasteurFormRequest;

class PasteursController extends Controller
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
       


             $eglises=array();
     foreach( Eglise::all() as $eglise){
     $eglises[$eglise->id]=$eglise->nom;
         }

           return view('pasteurs.create', compact('eglises'));




    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasteurFormRequest $request)
    {
        
            $pasteur = new Pasteur(array(
      //'code' => $request->get('__toString '),
      'nom' => $request->get('nom'),
      'email' => $request->get('email'),
      'address' => $request->get('address'),
      'phone' => $request->get('phone'),
      //$doctor->department_id =Input::get('department_id');
      'eglise_id' => $request->get('eglise_id'),
      'sexe' => $request->get('sexe')
      
      
    ));


      // commencement 

   $image=Input::file('image');
          

    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/pasteurs/' . $filename);
Image::make($image->getRealPath())->resize(249, 200)->save($path);


    $pasteur->image = '/images/catalog/pasteurs/'.$filename;


              $pasteur->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/pasteurs');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasteur = Pasteur::find($id);
        return view('pasteurs.show', compact('pasteur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit($id)
{
     $eglises=array();
     foreach( Eglise::all() as $eglise){
     $eglises[$eglise->id]=$eglise->nom;
         }

   $pasteur=Pasteur::find($id);
   return view('pasteurs.edit',compact('pasteur','eglises'));
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
   $pasteurUpdate=Request::all();
   $pasteur=Pasteur::find($id);
   $pasteur->update($pasteurUpdate);
   return redirect('admin/pasteurs');
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
   Pasteur::find($id)->delete();
   return redirect('admin/pasteurs');
}


   public function allpasteurs() {

  $pasteurs =Pasteur::orderBy('created_at','desc')->paginate(5);
       
     $eglises = Eglise::all();  
   

    return View::make('pasteurs.allpasteurs')
              ->with('pasteurs',$pasteurs )
              ->with('eglises',$eglises);


         
             
              
     }


}
