<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('coordinations', 'CoordinationsController');

Route::get('admin/coordinations','CoordinationsController@allcoordinations');


Route::resource('personvrais', 'PersonvraisController');

Route::get('admin/personvrais','PersonvraisController@allpersonvrais');


Route::resource('users', 'UsersController');
 Route::get('signup',array('as'=>'signup','uses'=>'UsersController@signup'));
  Route::post('inscription',array('as'=>'inscription','uses'=>'UsersController@inscription'));

