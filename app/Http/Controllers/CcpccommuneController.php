<?php

namespace App\Http\Controllers;
use DB;
use Input; 
use View;

use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Image;  
use Request;
use App\User;
use App\Department;
use App\Ccpccommune;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\CcpccommuneFormRequest;



class CcpccommuneController extends Controller
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

    	$departements = array();  	  
     foreach( Department::all() as $departement){
     $departements[$departement->id]=$departement->name;

   }
           
        $users = array();      
     foreach( User::all() as $user){
     $users[$user->id]=$user->username;


         }
         return view('ccpccommunes.create', compact('departements','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CcpccommuneFormRequest $request)
    {
        
     $ccpccommune = new Ccpccommune(array(
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'adresse' => $request->get('adresse'),
      'telephone' => $request->get('telephone'),
      'departement_id' => $request->get('departement_id'),
      'user_id' => $request->get('user_id'),
      
      
      'nom_cordexecutif' => $request->get('nom_cordexecutif'),
      'prenom_cordexecutif' => $request->get('prenom_cordexecutif'),
      'email_cordexecutif' => $request->get('email_cordexecutif'),
      'adresse_cordexecutif' => $request->get('adresse_cordexecutif'),
      'telephone_cordexecutif' => $request->get('telephone_cordexecutif'),

      'nom_cordlogistique' => $request->get('nom_cordlogistique'),
      'prenom_cordlogistique' => $request->get('prenom_cordlogistique'),
      'email_cordlogistique' => $request->get('email_cordlogistique'),
      'adresse_cordlogistique' => $request->get('adresse_cordlogistique'),
      'telephone_cordlogistique' => $request->get('telephone_cordlogistique')

 

    ));

        

   $image1=Input::file('image1');
          

    $filename  = time() . '.' . $image1->getClientOriginalExtension();
$path = public_path('images/catalog/cordonateurexecutifs/' . $filename);
Image::make($image1->getRealPath())->resize(249, 200)->save($path);


    $ccpccommune->image1 = '/images/catalog/cordonateurexecutifs/'.$filename;
       



   $image2=Input::file('image2');
          

    $filename  = time() . '.' . $image2->getClientOriginalExtension();
$path = public_path('images/catalog/cordonateurlogistiques/' . $filename);
Image::make($image2->getRealPath())->resize(249, 200)->save($path);


    $ccpccommune->image2 = '/images/catalog/cordonateurlogistiques/'.$filename;
       



     $ccpccommune->save();
            return Redirect::to('admin/ccpccommunes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $ccpccommune = Ccpccommune::find($id);
        return View('ccpccommunes.show', compact('ccpccommune'));
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


        $ccpccommune = Ccpccommune::find($id);
   return view('ccpccommunes.edit',compact('ccpccommune', 'departements'));
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
        $ccpccommuneUpdate=Request::all();
   $ccpccommune=Ccpccommune::find($id);
   $ccpccommune->update($ccpccommuneUpdate);
   return redirect('admin/ccpccommunes');
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
   return redirect('admin/ccpccommunes');
    }

 
public function allccpccommunes() {
     
     //$createcode= $tostring();

  $ccpccommunes =Ccpccommune::orderBy('created_at','desc')->paginate(5);
  
    return View::make('ccpccommunes.allccpccommunes')
              ->with('ccpccommunes',$ccpccommunes );
     }

}
