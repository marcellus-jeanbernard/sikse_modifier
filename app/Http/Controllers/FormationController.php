<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Formation;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\FormationFormRequest;



class FormationController extends Controller
{
     
// public function __construct() {
//   $this->middleware('auth');
// }
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
        return View('formations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormationFormRequest $request)
    {
        
     $formations = new Formation(array(
      //'code' => $request->get('__toString '),
      'name' => $request->get('name'),
      'description' => $request->get('description')
      
    ));

     $formations->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/formations');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $formation = Formation::find($id);
        return View('formations.show', compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation = Formation::find($id);
   return view('formations.edit',compact('formation'));
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
        $formationUpdate=Request::all();
   $formation=Formation::find($id);
   $formation->update($formationUpdate);
   return redirect('admin/formations');
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
        Formation::find($id)->delete();
   return redirect('admin/formations');
    }

 
public function allformations() {
     
     //$createcode= $tostring();

  $formations =Formation::orderBy('created_at','desc')->paginate(5);
  
    return View::make('formations.allformations')
              ->with('formations',$formations );

              
     }

}
