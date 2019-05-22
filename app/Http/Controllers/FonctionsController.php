<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Fonction;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\FonctionFormRequest;



class FonctionsController extends Controller
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
        return View('fonctions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FonctionFormRequest $request)
    {
        
     $fonction = new Fonction(array(
      //'code' => $request->get('__toString '),
      'name' => $request->get('name'),
      'description' => $request->get('description')
      
    ));

     $fonction->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/fonctions');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $fonction = Fonction::find($id);
        return View('fonctions.show', compact('fonction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fonction = Fonction::find($id);
   return view('fonctions.edit',compact('fonction'));
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
        $fonctionUpdate=Request::all();
   $fonction=Fonction::find($id);
   $fonction->update($fonctionUpdate);
   return redirect('admin/fonctions');
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
        Fonction::find($id)->delete();
   return redirect('admin/fonctions');
    }

 
public function allfonctions() {
     
     //$createcode= $tostring();

  $fonctions =Fonction::orderBy('created_at','desc')->paginate(5);
  
    return View::make('fonctions.allfonctions')
              ->with('fonctions',$fonctions )

             // ->with('__toString ', $__toString )
              ;
     }

}
