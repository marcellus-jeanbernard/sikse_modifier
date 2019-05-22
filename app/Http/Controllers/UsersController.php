<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Membre;
use DB;
use Charts;
use View;
use Input; 
use Validator;
use Hash;
use Mail;
use Auth;
use App\VerifyUser;
use Illuminate\Support\Facades\Redirect;
class UsersController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verifyUser($id)
    {
        //
        $user = User::find($id);
        return View('emails.verifyUser', compact('user'));
    }


     public function users(){
        $users = User::all();
        return view('emails.verifyUser', compact('users'));
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

  public function signup(){
    return View::make('users.signup');
  }

   
public function inscription() {
                $inputs = Input::all();
                
                $rules = array(
                      'username'=>'required|min:3|unique:users,username',
                      'email'=>'required|email|unique:users,email',
                      'password'=>'required|min:6|confirmed'
                            );                
                  $validation = Validator::make($inputs,$rules);
                 if($validation->fails()){
                           return Redirect::route('signup')->withInput()->withErrors($validation)
                                                 ->with('alert_error', 'Veuillez corriger les erreurs!');    
                                       }

                         $token = sha1(uniqid(rand()));
                         $data = array(
                               'username'=>Input::get('username'),
                               'password'=>Hash::make(Input::get('password')),
                               'email'=>Input::get('email'),
                               'last_login'=>date('Y-m-d H:i:s')
                                       );
                         $user = User::create($data);
                         
                         Mail::send('emails.verifyUser',$data,function($m) use ($data)
                        {
                            $m->to($data['email'],$data['username']);
                            $m->subject('Inscription: Bienvenue sur notre site');
                        });
                        return Redirect::to('login')->with('alert_success','Vous etes maintenant inscrit ! recoit un email de confirmation sur votre boite de messagerie');
                                   }




      
   public function login(){
        return View('users.login');
         }


    


                       public function connexion() {
           $creds = array(
                  'username' =>Input::get('username'),
                  'password'=>Input::get('password')
                         );
                  if(!Auth::attempt($creds)){
                       return Redirect::route('login')->withinput()
                             ->with('alert_error','Email et/ou Mot de passe invalide');
                                   }
             return Redirect::to('profil/'.Auth::user()->id)->with('alert_success','vous etes maintenant connecte.');         
                                }     



       public function profil($id){ 

        $membres = Membre::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->get();
        $chart = Charts::database($membres, 'bar', 'highcharts')
                  ->title("  Enregistrement des Membres par mois")
                  ->elementLabel("Total Membres")
                  ->dimensions(1000, 500)
                  ->responsive(false)
                  ->groupByMonth(date('Y'), true);





     if($id != Auth::user()->id) {
        return Redirect::to('logout');                
                                 }
 
  // return View::make('users.profil');
   return view('users.profil', compact('chart'));
   
}


                   public function logout(){

$user=User::find(Auth::user()->id); 

$user->last_login = date('Y-m-d H:i:s');
$user->save();   
Auth::logout();
   //return View::make('/')->with('alert_succes','a bientot');
            return Redirect::to('/');

                       }  



}
