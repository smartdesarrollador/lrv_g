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




Route::get('/', function () {
     return view('welcome');


});

/* Rutas - Ejemplo */ 

Route::get('ejemplo', function () {
    return view('basico/ejemplo');
   });

Route::get('ejemplo2', function () {
    return view('basico/ejemplo2');
   });


/* Rutas - Basico */ 

Route::get('basico', function () {
    return view('basico/index');
   });

   // Ruta - elementos de formulario 

  Route::get('basico/formulario', [
                               'as' => 'basico/formulario',
                               'middleware' => ['auth'],
                               'uses' => 'HomeController@formulario'
                            ]);

  // Ruta - Estructura basica de bootstrap

   Route::get('basico/estructura_basica_bootstrap', function () {
    return view('basico/estructura_basica_bootstrap');
   });

  // Ruta - ejemplos como enrutar



/* Rutas - Blade */


/* Rutas - jquery */

/* Rutas - PHP  */

/* Rutas - CRUD */









Route::get('/inicio', function () {

	$saludo='hola mundo';
	$exito=true;

    $data=['saludo' => $saludo,'exito' => $exito];
    return view('inicio',$data);
});

Route::get('user/{id}', 'UserController@showProfile');
Route::get('hola', 'UserController@hola');
Route::get('hola', 'UserController@hola');

Route::get('blade', function () {
    return view('layouts/child');
});

Route::get('pagina', function () {
    return view('layouts/estructuradecontrol');
});


Route::get('home', [
    'as' => 'home',
    'middleware' => ['auth'],
    'uses' => 'HomeController@index'
]);

// Ruta ejemplo Formulario



// Rutas Ejemplos Bootstrap

Route::get('responsive', [
    'as' => 'responsive',
    'middleware' => ['auth'],
    'uses' => 'ResponsiveController@table'
]);


// Rutas ejemplo CRUD

Route::resource('usuario','UsuarioController@create');

Route::resource('post', 'PostController');

Route::get('listado', [
    'as' => 'listado',
    'middleware' => ['auth'],
    'uses' => 'PostController@index'
]);

//Rutas para el login y registro

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

//Fin Rutas para el login y registro

Route::resource('admin', 'AdminController');

Route::resource('prueba', 'PruebaController');

Route::resource('curso', 'CursoController');

Route::resource('consulta', 'ConsultaController');











