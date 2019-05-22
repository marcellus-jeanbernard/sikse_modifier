<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Ccpc;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\CcpcFormRequest;



class CcpcsController extends Controller
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
        return View('ccpcs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CcpcFormRequest $request)
    {
        
     $ccpc = new Ccpc(array(
      //'code' => $request->get('__toString '),
      'name' => $request->get('name'),
      'description' => $request->get('description')
      
    ));

     $ccpc->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/ccpcs');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $ccpc = Ccpc::find($id);
        return View('ccpcs.show', compact('ccpc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ccpc = Ccpc::find($id);
   return view('ccpcs.edit',compact('ccpc'));
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
        $ccpcUpdate=Request::all();
   $ccpc=Ccpc::find($id);
   $ccpc->update($ccpcUpdate);
   return redirect('admin/ccpcs');
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
        Ccpc::find($id)->delete();
   return redirect('admin/ccpcs');
    }

 
public function allccpcs() {
     
     //$createcode= $tostring();

  $ccpcs =Ccpc::orderBy('created_at','desc')->paginate(5);
  
    return View::make('ccpcs.allccpcs')
              ->with('ccpcs',$ccpcs )

             // ->with('__toString ', $__toString )
              ;
     }

}
