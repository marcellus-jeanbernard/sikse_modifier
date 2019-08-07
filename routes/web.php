<?php
use App\Ccpccommune;


// Route::get('/ajax-ccpccom', function(){
 

// });


/***** admin *********/

// Route::filter('admin',function() {
//   if(Auth::guest() || Auth::user()->role != 'admin') return Redirect::to('login');
//   });
//  Route::when('admin/*','admin');


/***** admin *********/

Route::group(['middleware' => ['auth', 'role']], function(){

// Route::get('admin/index',array('as'=>'admin','uses'=>'HomeController@admin'));

Route::get('admin/index', [ 'uses' =>'HomeController@admin',
    'as' =>'admin',
    'middleware' =>'auth'
]);

});



Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');

Route::resource('products', 'ProductController');


Route::get('/test', 'ChartDataController@getAllMonths');
Route::get('/prodview','TestController@prodfunct');




/******************* projetsept admin********************/

Route::resource('projetsepts', 'ProjetseptsController');
Route::get('admin/projetsepts','ProjetseptsController@allprojetsepts');
/**************** fin **********/



/******************* projetsept admin********************/

Route::resource('membres', 'MembresController');
Route::get('admin/membres','MembresController@allmembres');
// Route::get('affichermembre','MembresController@affichermembre');
/**************** fin **********/




/******************* projet admin********************/

Route::resource('projets', 'ProjetsController');
Route::get('admin/projets','ProjetsController@allprojets');
/**************** fin **********/


/*****************  ccpc admin *********************/
Route::resource('ccpcs', 'CcpcsController');
Route::get('admin/ccpcs','CcpcsController@allccpcs');
/***************** fin ******************************/



/*****************  ccpc admin *********************/
Route::resource('ccpccommunes', 'CcpccommuneController');
Route::get('admin/ccpccommunes','CcpccommuneController@allccpccommunes');
/***************** fin ******************************/



/*****************  ccpc admin *********************/
Route::resource('ccpccommuneprofils', 'CcpccommuneprofilController');
Route::get('admin/ccpccommuneprofils','CcpccommuneprofilController@allccpccommuneprofils');
/***************** fin ******************************/




/******************* pasteur admin********************/
Route::resource('pasteurs', 'PasteursController');
Route::get('admin/pasteurs','PasteursController@allpasteurs');
/**************** fin **********/



Route::resource('septpouruns', 'SeptpourunsController');

Route::get('admin/septpouruns','SeptpourunsController@allseptpouruns');



/*****administration des eglise ****/
Route::resource('eglises', 'EglisesController');

Route::get('admin/eglises','EglisesController@alleglises');
/************ fin adm eglise************/


/******************* projetsept admin********************/
Route::resource('projetdecouvertes', 'ProjetdecouvertesController');
Route::get('admin/projetdecouvertes','ProjetdecouvertesController@allprojetdecouvertes');
/**************** fin **********/


Route::resource('decouvertes', 'DecouvertesController');

Route::get('admin/decouvertes','DecouvertesController@alldecouvertes');


/********* slidrs ****************/
Route::resource('sliders', 'SlidersController');

Route::get('admin/sliders','SlidersController@allsliders');


Route::resource('departments', 'DepartmentsController');

Route::get('admin/departments','DepartmentsController@alldepartments');


Route::resource('formations', 'FormationController');

Route::get('admin/formations','FormationController@allformations');


/***** admin *********/

// Route::filter('admin',function() {
//   if(Auth::guest() || Auth::user()->role != 'admin') return Redirect::to('login');
//   });
//  Route::when('admin/*','admin');



Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'HomeController@index');

Route::resource('users', 'UsersController');
 Route::get('signup',array('as'=>'signup','uses'=>'UsersController@signup'));
  Route::post('inscription',array('as'=>'inscription','uses'=>'UsersController@inscription'));



//  Route::post('decouverte',array('as'=>'decouverte','uses'=>'UsersController@decouverte')); 




 Route::get('login',array('as'=>'login','uses'=>'UsersController@login'));

 Route::get('activer/{token}',array('as'=>'activer','uses'=>'UsersController@activer'));

Route::get('activer/{token}',array('as'=>'activer','uses'=>'UsersController@activer'));


  Route::post('connexion',array('as'=>'connexion','uses'=>'UsersController@connexion'));

  Route::get('profil/{id}',array('as'=>'profil','uses'=>'UsersController@profil'));


Route::get('logout',array('as'=>'logout','uses'=>'UsersController@logout'));


  /**  administration des coordination *************/
Route::resource('coordinations', 'CoordinationsController');

Route::get('admin/coordinations','CoordinationsController@allcoordinations');

/************ fin adm department****************/


  /******** administration fonction ************/
  Route::resource('fonctions', 'FonctionsController');

Route::get('admin/fonctions','FonctionsController@allfonctions');
/**************** fin ***********************/



  /**  administration des coordination *************/
Route::resource('commissions', 'CommissionsController');

Route::get('admin/commissions','CommissionsController@allcommissions');

/************ fin adm department****************/


 /**  administration des coordination *************/
Route::resource('occupationactuelles', 'OccupationactuellesController');

Route::get('admin/occupationactuelles','OccupationactuellesController@alloccupationactuelles');

/************ fin adm department****************/



 /**  administration des coordination *************/
Route::resource('secteuractivites', 'SecteuractivitesController');

Route::get('admin/secteuractivites','SecteuractivitesController@allsecteuractivites');

/************ fin adm department****************/



 /**  administration des coordination *************/
Route::resource('personvrais', 'PersonvraisController');

Route::get('admin/personvrais','PersonvraisController@allpersonvrais');

/************ fin adm department****************/




 /**  administration des coordination *************/
Route::resource('frontpersonvrais', 'FrontpersonvraisController');

Route::get('frontpersonvrais','FrontpersonvraisController@show');

/************ fin adm department****************/


Route::get('creation','PersonvraisController@creation');

 Route::get('ajax-ccpccom','HomeController@showForm');
Route::get('ajax-ccpccom/{id}','HomeController@form');

Route::get('historiques','HomeController@historiques');
Route::get('objectif','HomeController@objectif');
Route::get('equipe','HomeController@equipe');

Route::get('formation','HomeController@formation');
Route::get('sondage','HomeController@sondage');
Route::get('etudes','HomeController@etudes');
Route::get('executionprojet','HomeController@executionprojet');
Route::get('appui','HomeController@appui');



 Route::get('ajax-findadresse','HomeController@findadresse');
 
Route::get('ajax-findemail','HomeController@findemail');

Route::get('ajax-findtelephone','HomeController@findtelephone');


Route::get('data','HomeController@data');

//Route::get('affichermembre/{slug}','HomeController@affichermembre');

Route::get('/ccpccommune/{id}',[
      'uses' => 'HomeController@affichermembre',
      'as' => 'ccpccommune.affichermembre'
  ]);


