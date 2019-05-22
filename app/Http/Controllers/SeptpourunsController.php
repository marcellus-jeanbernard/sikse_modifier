<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;


use App\Septpourun;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\SeptpourunFormRequest;



class SeptpourunsController extends Controller
{
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
        return View('septpouruns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeptpourunFormRequest $request)
    {
        
     $septpourun = new Septpourun(array(
      //'code' => $request->get('__toString '),
      'nom' => $request->get('nom'),
      'description' => $request->get('description')
      
    ));

     $septpourun->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
            return Redirect::to('admin/septpouruns');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $septpourun = Septpourun::find($id);
        return View('septpouruns.show', compact('septpourun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $septpourun = Septpourun::find($id);
   return view('septpouruns.edit',compact('septpourun'));
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
        $septpourunUpdate=Request::all();
   $septpourun=Septpourun::find($id);
   $septpourun->update($septpourunUpdate);
   return redirect('admin/septpouruns');
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
        Septpourun::find($id)->delete();
   return redirect('admin/septpouruns');
    }

 
public function allseptpouruns() {
     
     //$createcode= $tostring();

  $septpouruns =Septpourun::orderBy('created_at','desc')->paginate(5);
  
    return View::make('septpouruns.allseptpouruns')
              ->with('septpouruns',$septpouruns )

             // ->with('__toString ', $__toString )
              ;
     }

}
