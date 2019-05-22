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
use App\Projetsept;
use App\Septpourun;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\ProjetseptFormRequest;

class ProjetseptsController extends Controller
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
       


             $septpouruns=array();
     foreach( Septpourun::all() as $septpourun){
     $septpouruns[$septpourun->id]=$septpourun->nom;
         }

           return view('projetsepts.create', compact('septpouruns'));




    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjetseptFormRequest $request)
    {
        
            $projetsept = new Projetsept(array(
      //'code' => $request->get('__toString '),
      'titre' => $request->get('titre'),
      'description' => $request->get('description'),
      
      'septpourun_id' => $request->get('septpourun_id')
      
    ));


      // commencement 

   $image=Input::file('image');
          

    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/projetsepts/' . $filename);
Image::make($image->getRealPath())->resize(468, 249)->save($path);


    $projetsept->image = '/images/catalog/projetsepts/'.$filename;


              $projetsept->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/projetsepts');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projetsept = Projetsept::find($id);
        return view('projetsepts.show', compact('projetsept'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit($id)
{
  $septpouruns=array();
     foreach( Septpourun::all() as $septpourun){
     $septpouruns[$septpourun->id]=$septpourun->nom;
         }

   $projetsept=Projetsept::find($id);
   return view('projetsepts.edit',compact('projetsept','septpouruns'));
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
   $projetseptUpdate=Request::all();
   $projetsept=Projetsept::find($id);
   $projetsept->update($projetseptUpdate);
   return redirect('admin/projetsepts');
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
   Projetsept::find($id)->delete();
   return redirect('admin/projetsepts');
}


   public function allprojetsepts() {

  $projetsepts =Projetsept::orderBy('created_at','desc')->paginate(5);
       
     $septpouruns = Septpourun::all();  
   

    return View::make('projetsepts.allprojetsepts')
              ->with('projetsepts',$projetsepts )
              ->with('septpouruns',$septpouruns);


         
             
              
     }


}
