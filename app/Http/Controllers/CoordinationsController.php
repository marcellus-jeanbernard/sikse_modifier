<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Coordination;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\CoordinationFormRequest;



class CoordinationsController extends Controller
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
        return View('coordinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoordinationFormRequest $request)
    {
        
     $coordination = new Coordination(array(
      //'code' => $request->get('__toString '),
      'name' => $request->get('name')
      
    ));

     $coordination->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/coordinations');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $coordination = Coordination::find($id);
        return View('coordinations.show', compact('coordination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coordination = Coordination::find($id);
   return view('coordinations.edit',compact('coordination'));
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
        $coordinationUpdate=Request::all();
   $coordination=Coordination::find($id);
   $coordination->update($coordinationUpdate);
   return redirect('admin/coordinations');
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
   return redirect('admin/coordinations');
    }

 
public function allcoordinations() {
     
     //$createcode= $tostring();

  $coordinations =Coordination::orderBy('created_at','desc')->paginate(5);
  
    return View::make('coordinations.allcoordinations')
              ->with('coordinations',$coordinations )

             // ->with('__toString ', $__toString )
              ;
     }

}
