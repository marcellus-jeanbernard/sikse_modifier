<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Eglise;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\EgliseFormRequest;



class EglisesController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('eglises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EgliseFormRequest $request)
    {
        
     $eglise = new Eglise(array(
      //'code' => $request->get('__toString '),
      'nom' => $request->get('nom'),
      'adresse' =>$request->get('adresse'),
      'description' => $request->get('description')
      
    ));

     $eglise->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/eglises');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $eglise = Eglise::find($id);
        return View('eglises.show', compact('eglise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eglise = Eglise::find($id);
   return view('eglises.edit',compact('eglise'));
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
        $egliseUpdate=Request::all();
   $eglise=Eglise::find($id);
   $eglise->update($egliseUpdate);
   return redirect('admin/eglises');
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
        Eglise::find($id)->delete();
   return redirect('admin/eglises');
    }

 
public function alleglises() {
     
     //$createcode= $tostring();

  $eglises =Eglise::orderBy('created_at','desc')->paginate(5);
  
    return View::make('eglises.alleglises')
              ->with('eglises',$eglises)

             // ->with('__toString ', $__toString )
              ;
     }

}
