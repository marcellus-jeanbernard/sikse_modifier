<?php


namespace App\Http\Controllers;
use View;
use App\Commission;
use App\Coordination;
use App\Secteuractivite;
use App\Occupationactuelle;

use App\Personvrai;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;


use Image; 
use Input; 
use Request;
//use App\Http\Controllers\Doctor;

//use App\Http\Controllers\Controller;

//use App\Http\Controllers\View;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\PersonvraiFormRequest;

class FrontpersonvraisController extends Controller
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
       


             $coordinations=array();
     foreach( Coordination::all() as $coordination){
     $coordinations[$coordination->id]=$coordination->name;
         }

 $commissions=array();
     foreach( Commission::all() as $commission){
     $commissions[$commission->id]=$commission->name;
         }

          $secteuractivites=array();
     foreach( Secteuractivite::all() as $secteuractivite){
     $secteuractivites[$secteuractivite->id]=$secteuractivite->name;
         }

          $occupationactuelles=array();
     foreach( Occupationactuelle::all() as $occupationactuelle){
     $occupationactuelles[$occupationactuelle->id]=$occupationactuelle->name;
         }
           return view('personvrais.creation', compact('coordinations','commissions','secteuractivites','occupationactuelles'));




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(PersonvraiFormRequest $request)
    {
        
            $personvrai = new Personvrai(array(
      //'code' => $request->get('__toString '),
      'nom' => $request->get('nom'),

      'prenom' => $request->get('prenom'),
      'dateNaissance' => $request->get('dateNaissance'),
      'lieuNaissane' => $request->get('lieuNaissane'),
      'statutCivil' => $request->get('statutCivil'),
      'sexe' => $request->get('sexe'),
      'adresse' => $request->get('adresse'),
      'email' => $request->get('email'),
      'phone' => $request->get('phone'),
      'profession' => $request->get('profession'),
      'groupeSanguin' => $request->get('groupeSanguin'),
      'occupationactuelle_id' => $request->get('occupationactuelle_id'),
      'secteuractivite_id' => $request->get('secteuractivite_id'),
      'coordination_id' => $request->get('coordination_id'),
      'commission_id' => $request->get('commission_id'),
      'statut' => $request->get('statut'),
      'laquelle' => $request->get('laquelle'),
      'quandFrequenter' => $request->get('quandFrequenter'),
      'nomPersNorm' => $request->get('nomPersNorm'),
      
      'adressePersNorm' => $request->get('adressePersNorm'),
      'emailPersNorm' => $request->get('emailPersNorm'),
      'phonePersNorm' => $request->get('phonePersNorm'),
      'lienPersNorm' => $request->get('lienPersNorm'),

      'nomPersUrg' => $request->get('nomPersUrg'),
      'adressePersUrg' => $request->get('adressePersUrg'),
      'emailPersUrg' => $request->get('emailPersUrg'),
      'phonePersUrg' => $request->get('phonePersUrg'),
      'lienPersUrg' => $request->get('lienPersUrg')
      
    ));


      // commencement 

   $image=Input::file('image');
          

    $filename  = time() . '.' . $image->getClientOriginalExtension();
$path = public_path('images/catalog/personvrais/' . $filename);
Image::make($image->getRealPath())->resize(468, 249)->save($path);


    $personvrai->image = '/images/catalog/personvrais/'.$filename;


              $personvrai->save();

            // return Redirect::route('admin/patients', 
        //array($patient->id))->with('message', 'patient added!');        
           //Session::flash('message', 'Successfully created patient!');
        return view('personvrais.show', compact('personvrai'));
           



    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function show($id)
    {
        $personvrai = Personvrai::find($id);
        return view('personvrais.show', compact('personvrai'));
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
        //
    }
}
