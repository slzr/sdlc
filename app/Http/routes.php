<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',          ['as'=> 'inicio',         'uses'=> 'MainController@index']);
Route::get('inicio',     ['as'=> 'inicio',         'uses'=> 'MainController@index']);
Route::get('buzon',      ['as'=> 'buzon',          'uses'=> 'MainController@buzon']);
Route::post('buzon',     ['as'=> 'buzon.post',     'uses'=> 'MainController@buzonPost']);
Route::get('solicitud',  ['as'=> 'solicitud',      'uses'=> 'MainController@solicitud']);
Route::post('solicitud', ['as'=> 'solicitud.post', 'uses'=> 'MainController@solicitudPost']);
Route::get('nosotros',   ['as'=> 'nosotros',       'uses'=> 'MainController@nosotros']);
Route::get('login',      ['as'=> 'user.login',     'uses'=> 'MainController@UserLogin']);
Route::post('login',     ['as'=> 'user.auth',      'uses'=> 'MainController@userAuth']);


// Route::resource('matricula',   'MatriculaController');
// Route::resource('responsable', 'ResponsableController');