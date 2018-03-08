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

Route::get('/', function () {
    return view('welcome');
});


     /*Rutas se creo un grupo de rutas con el prefijo admin*/
     Route::group(['prefix'=>'admin'], function(){
    
     //Ruta para acceder al perfil del empleado
     Route::get('empleadosPerfil/{id}',[ 
        'as'=>'empleados.perfil',
        'uses'=>'EmpleadosController@perfil']       
                                );


     //Ruta para crear los RTN---------------
     //este es la ruta para el index
     Route::get('empleadosRtn/{id}',[ 
        'as'=>'empleados.indexRTN',
        'uses'=>'RtnController@index']       
                                );
     //esta es la ruta para el create es una vista de un formulario
     Route::get('empleadosRTN/{id}/create',
      [
        'as'=>'empleados.indexRTNCREATE',
        'uses'=>'RtnController@create'
      ]);
     //aqui realiza la operacion de guardado y hace la relacion praticamente guarda
     Route::POST('empleados/crear',
      [
        'as'=>'empleadosRTN.store',
        'uses'=>'RtnController@store'
      ]);
      //-------------------------------------

       //Ruta para crear los antecedentes penales---------------
     //este es la ruta para el index
     Route::get('empleadosATCPE/{id}',[ 
        'as'=>'empleados.indexATCPE',
        'uses'=>'PenalesController@index']       
                                );
     //esta es la ruta para el create es una vista de un formulario
     Route::get('empleadosATCPE/{id}/create',
      [
        'as'=>'empleados.indexATCPECREATE',
        'uses'=>'PenalesController@create'
      ]);
     //aqui realiza la operacion de guardado y hace la relacion praticamente guarda
     Route::POST('empleados/crearPE',
      [
        'as'=>'empleadosATCPE.store',
        'uses'=>'PenalesController@store'
      ]);
      //-------------------------------------

        //Ruta para crear los policiales---------------
     //este es la ruta para el index
     Route::get('empleadosATCPO/{id}',[ 
        'as'=>'empleados.indexATCPO',
        'uses'=>'PolicialesController@index']       
                                );
     //esta es la ruta para el create es una vista de un formulario
     Route::get('empleadosATCPO/{id}/create',
      [
        'as'=>'empleados.indexATCPOCREATE',
        'uses'=>'PolicialesController@create'
      ]);
     //aqui realiza la operacion de guardado y hace la relacion praticamente guarda
     Route::POST('empleadosPO/crear',
      [
        'as'=>'empleadosATCPO.store',
        'uses'=>'PolicialesController@store'
      ]);
      //-------------------------------------


  
     Route::get('empleados/{id}/asignar', [
     	'as'=>'asignar.edit',
     	'uses'=>'EmpleadosController@asignar'
                                         ]);
     Route::get('empleados/{id}/asignar_estado', [
      'as'=>'asignar_estado.edit',
      'uses'=>'EmpleadosController@asignar_estado'
                                         ]);
     Route::get('empleados/{id}/asignar_cargo', [
      'as'=>'asignar_cargo.edit',
      'uses'=>'EmpleadosController@asignar_cargo'
                                         ]);
     Route::PUT('empleados/{id}/asignar',[
     	'as'=>'empleados.asignar.update',
     	'uses'=>'EmpleadosController@update_asignar'
                                      ]);

     //Ruta que asigno el estado del empleado. practicamente actualiza el estado
     Route::PUT('empleadosE/{id}',[
      'as'=>'empleados.asignar_estado.update',
      'uses'=>'EmpleadosController@update_asignar_estado'
                                       ]);

     //Ruta que asigno el cargo al empleado. practicamente actualiza el estado
     Route::PUT('empleadosC/{id}',[
      'as'=>'empleados.asignar_cargo.update',
      'uses'=>'EmpleadosController@update_asignar_cargo'
                                       ]);


          
     //Ruta que me lleva a todos los accesos de empleadocontroller edit,create,show
    Route::resource('empleados','EmpleadosController');

                                           });

    //Ruta que me lleva ala parte de creacion de los proyectos accedos a todas las rutas
   Route::group(['prefix'=>'proyect'], function(){
   Route::resource('proyectos','ProyectosController'); 
                                                  });

  //Abner: retorna en un json los empleados filtrador por el nombre
   Route::get('empleados/{empleados}', 'EmpleadosController@empleadosFilter');

