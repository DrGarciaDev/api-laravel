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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tareas',                   'TaskController@index');
Route::get('/tareas/buscar',            'TaskController@show');
Route::post('/tareas/guardar',          'TaskController@store');
Route::put('/tareas/actualizar',        'TaskController@update');
Route::delete('/tareas/destruir',         'TaskController@destroy');