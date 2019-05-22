<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Decouverte;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\DecouverteFormRequest;



class DecouvertesController extends Controller
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
        return View('decouvertes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DecouverteFormRequest $request)
    {
        
     $decouverte = new Decouverte(array(
      //'code' => $request->get('__toString '),
      'nom' => $request->get('nom'),
      'description' => $request->get('description')
      
    ));

     $decouverte->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/decouvertes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $decouverte = Decouverte::find($id);
        return View('decouvertes.show', compact('decouverte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decouverte = Decouverte::find($id);
   return view('decouvertes.edit',compact('decouverte'));
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
        $decouverteUpdate=Request::all();
   $decouverte=Decouverte::find($id);
   $decouverte->update($decouverteUpdate);
   return redirect('admin/decouvertes');
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
        Decouverte::find($id)->delete();
   return redirect('admin/decouvertes');
    }

 
public function alldecouvertes() {
     
     //$createcode= $tostring();

  $decouvertes =Decouverte::orderBy('created_at','desc')->paginate(5);
  
    return View::make('decouvertes.alldecouvertes')
              ->with('decouvertes',$decouvertes )

             // ->with('__toString ', $__toString )
              ;
     }

}
