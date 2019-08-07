<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Input; 
use Request;
use Auth;
use App\User;
use App\Department;
use App\Ccpccommune;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\CcpccommuneFormRequest;



class CcpccommuneprofilController extends Controller
{


public function __construct() {
    // parent::__construct();
  $this->middleware('auth');
}

     
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

    	$departements = array();  	  
     foreach( Department::all() as $departement){
     $departements[$departement->id]=$departement->name;

   }
           
        $users = array();      
     foreach( User::all() as $user){
     $users[$user->id]=$user->username;


         }
         return view('ccpccommuneprofils.create', compact('departements','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CcpccommuneFormRequest $request)
    {
      // $ccpccommuneprofil= Ccpccommune::orderBy('created_at','desc')->paginate(5);        
     $ccpccommuneprofil = new Ccpccommune(array(
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'adresse' => $request->get('adresse'),
      'telephone' => $request->get('telephone'),
      'departement_id' => $request->get('departement_id'),
      'user_id' => $request->get('user_id')

    ));

     $ccpccommuneprofil->save();
 return Redirect::to('profil/'.Auth::user()->id)->with('alert_success','vous etes maintenant connecte.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $ccpccommuneprofil = Ccpccommune::find($id);

        return View('ccpccommuneprofils.show', compact('ccpccommuneprofil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           
        $departements = array();      
     foreach( Department::all() as $departement){
     $departements[$departement->id]=$departement->name;
         }


        $ccpccommuneprofil = Ccpccommune::find($id);
   return view('ccpccommuneprofils.edit',compact('ccpccommuneprofil', 'departements'));
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
        $ccpccommuneprofilUpdate=Request::all();
   $ccpccommuneprofil=Ccpccommune::find($id);
   $ccpccommuneprofil->update($ccpccommuneprofilUpdate);

 return Redirect::to('profil/'.Auth::user()->id)->with('alert_success','vous etes maintenant connecte.');

   // return redirect('admin/ccpccommuneprofils');
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
        Ccpccommune::find($id)->delete();
   return redirect('admin/ccpccommuneprofils');
    }

 
public function allccpccommuneprofils() {
     
     //$createcode= $tostring();

  $ccpccommuneprofils =Ccpccommune::orderBy('created_at','desc')->paginate(5);
  
    return View::make('ccpccommuneprofils.allccpccommuneprofils')
              ->with('ccpccommuneprofils',$ccpccommuneprofils );
     }




}
