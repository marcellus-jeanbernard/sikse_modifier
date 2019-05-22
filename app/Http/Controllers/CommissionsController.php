<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Commission;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\CommissionFormRequest;



class CommissionsController extends Controller
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
        return View('commissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommissionFormRequest $request)
    {
        
     $commission = new Commission(array(
      //'code' => $request->get('__toString '),
      'name' => $request->get('name')
      
    ));

     $commission->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/commissions');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $commission = Commission::find($id);
        return View('commissions.show', compact('commission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commission = Commission::find($id);
   return view('commissions.edit',compact('commission'));
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
        $commissionUpdate=Request::all();
   $commission=Commission::find($id);
   $commission->update($commissionUpdate);
   return redirect('admin/commissions');
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
        Commission::find($id)->delete();
   return redirect('admin/commissions');
    }

 
public function allcommissions() {
     
     //$createcode= $tostring();

  $commissions =Commission::orderBy('created_at','desc')->paginate(5);
  
    return View::make('commissions.allcommissions')
              ->with('commissions',$commissions )

             // ->with('__toString ', $__toString )
              ;
     }

}
