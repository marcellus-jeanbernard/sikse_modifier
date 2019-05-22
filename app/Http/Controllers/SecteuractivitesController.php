<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Secteuractivite;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\SecteuractiviteFormRequest;



class SecteuractivitesController extends Controller
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
        return View('secteuractivites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SecteuractiviteFormRequest $request)
    {
        
     $secteuractivite = new Secteuractivite(array(
      //'code' => $request->get('__toString '),
      'name' => $request->get('name')
      
    ));

     $secteuractivite->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/secteuractivites');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $secteuractivite = Secteuractivite::find($id);
        return View('secteuractivites.show', compact('secteuractivite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secteuractivite = Secteuractivite::find($id);
   return view('secteuractivites.edit',compact('secteuractivite'));
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
        $secteuractiviteUpdate=Request::all();
   $secteuractivite=Secteuractivite::find($id);
   $secteuractivite->update($secteuractiviteUpdate);
   return redirect('admin/Secteuractivites');
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
        Coordination::find($id)->delete();
   return redirect('admin/secteuractivites');
    }

 
public function allsecteuractivites() {
     
     //$createcode= $tostring();

  $secteuractivites =Secteuractivite::orderBy('created_at','desc')->paginate(5);
  
     return View::make('secteuractivites.allsecteuractivites')
               ->with('secteuractivites',$secteuractivites );



    // return response()->json($secteuractivites);
     }

}
