<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Occupationactuelle;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\OccupationactuelleFormRequest;



class OccupationactuellesController extends Controller
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
        return View('occupationactuelles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OccupationactuelleFormRequest $request)
    {
        
     $occupationactuelle = new Occupationactuelle(array(
      //'code' => $request->get('__toString '),
      'name' => $request->get('name')
      
    ));

     $occupationactuelle->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/occupationactuelles');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $occupationactuelle = Occupationactuelle::find($id);
        return View('occupationactuelles.show', compact('occupationactuelle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occupationactuelle = Occupationactuelle::find($id);
   return view('occupationactuelles.edit',compact('occupationactuelle'));
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
        $occupationactuelleUpdate=Request::all();
   $occupationactuelle=Occupationactuelle::find($id);
   $occupationactuelle->update($occupationactuelleUpdate);
   return redirect('admin/occupationactuelles');
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
        Occupationactuelle::find($id)->delete();
   return redirect('admin/occupationactuelles');
    }

 
public function alloccupationactuelles() {
     
     //$createcode= $tostring();

  $occupationactuelles =Occupationactuelle::orderBy('created_at','desc')->paginate(5);
  
    return View::make('occupationactuelles.alloccupationactuelles')
              ->with('occupationactuelles',$occupationactuelles )

             // ->with('__toString ', $__toString )
              ;
     }

}
