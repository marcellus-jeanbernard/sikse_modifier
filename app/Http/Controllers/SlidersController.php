<?php

namespace App\Http\Controllers;

use View;

use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;


use App\Http\Middleware\Sentinel;


use Image; 
use Input; 
use Request;
use App\Slider;
use App\Patient;
use App\Doctor;
use App\Laboratorist;
use App\Receptionist;
use App\Accountant;
use App\Pharmacist;
use App\Nurse;

//use App\Http\Controllers\Controller;

//use App\Http\Controllers\View;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\SlidersFormRequest;


class SlidersController extends Controller
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
        return view('sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlidersFormRequest $request)
    {
        $slider = new Slider(array(
      //'code' => $request->get('__toString '),
      'description' => $request->get('description')
    ));
      // commencement 

   $image=Input::file('image');
          
    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/sliders/' . $filename);
Image::make($image->getRealPath())->resize(1539, 1048)->save($path);

   // 981 * 439

    $slider->image = '/images/catalog/sliders/'.$filename;

              $slider->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');


             return Redirect::to('admin/sliders');
           // return view ('sliders.essai', compact('slider'));

    // fin

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);
        return view ('sliders.show', compact('slider'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
           public function destroy($id)
{
   Slider::find($id)->delete();
   return redirect('admin/sliders');
}

     public function allsliders() {
     
     //$createcode= $tostring();

  $sliders =Slider::orderBy('created_at','desc')->paginate(5);
  
    return View::make('sliders.allsliders')
              ->with('sliders',$sliders );


              
     } 

}
