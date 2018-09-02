<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

// rutas para sitio principal

Route::get('creausuario', function(){
	$user = new App\User;
	$user->name='Oscar Arango';
	$user->email='oscar.arango326@gmail.com';
	$user->password=bcrypt('Carol14720**');
	$user->save();
	return $user;
});

route::get('test',function(){
	return view('test');
});



Route::get('/', ['as'=>'home', 'uses'=> 'navigationController@home']);

Route::get('cobros', ['as'=>'cobros', 'uses'=> 'navigationController@cobros']);

//rutas para menu visitas
/*Route::get('visitas', ['as'=>'visitas.index', 'uses'=>'visitasController@index']);

Route::get('visitas/create', ['as'=>'visitas.create', 'uses'=>'visitasController@create']);

Route::post('visitas', ['as'=>'visitas.store', 'uses'=>'visitasController@store']);

Route::get('visitas/{id}', ['as'=>'visitas.show', 'uses'=>'visitasController@show']);

Route::get('visitas/{id}/edit', ['as'=>'visitas.edit', 'uses'=>'visitasController@edit']);

Route::put('visitas/{id}', ['as'=>'visitas.update', 'uses'=>'visitasController@update']);

Route::delete('visitas/{id}', ['as'=>'visitas.destroy', 'uses'=>'visitasController@destroy']);*/
Route::resource('visitas', 'visitasController');
Route::resource('cobros', 'cobrosController');


//rutas para control de acceso y login

Route::get('login', ['as'=>'login','uses'=>'auth\loginController@showloginform']);

Route::post('login', 'auth\loginController@login');

Route::get('logout', 'auth\loginController@logout');



//Route::post('visita', 'controlador1@visitaCreate')->middleware('creaNuevaVisita');*/

//Route::resource('visitas','visitasController');



