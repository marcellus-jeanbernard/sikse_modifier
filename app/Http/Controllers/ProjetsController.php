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

use App\Projet;

use App\Department;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\ProjetFormRequest;

class ProjetsController extends Controller
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
       


             $departments=array();
     foreach( Department::all() as $department){
     $departments[$department->id]=$department->name;
         }

           return view('projets.create', compact('departments'));




    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjetFormRequest $request)
    {
        
            $projet = new Projet(array(
      //'code' => $request->get('__toString '),
      'titre' => $request->get('titre'),
      'description' => $request->get('description'),
      
      'department_id' => $request->get('department_id')
      
    ));


      // commencement 

   $image=Input::file('image');
          

    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/projets/' . $filename);
Image::make($image->getRealPath())->resize(468, 249)->save($path);


    $projet->image = '/images/catalog/projets/'.$filename;


              $projet->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/projets');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::find($id);
        return view('projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit($id)
{
  $departments=array();
     foreach( Department::all() as $department){
     $departments[$department->id]=$department->name;
         }

   $projet=Projet::find($id);
   return view('projets.edit',compact('projet','departments'));
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
   $projetUpdate=Request::all();
   $projet=Projet::find($id);
   $projet->update($projetUpdate);
   return redirect('admin/projets');
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
   Projet::find($id)->delete();
   return redirect('admin/projets');
}


   public function allprojets() {

  $projets =Projet::orderBy('created_at','desc')->paginate(5);
       
     $departments = Department::all();  
   

    return View::make('projets.allprojets')
              ->with('projets',$projets )
              ->with('departments',$departments);


         
             
              
     }


}
