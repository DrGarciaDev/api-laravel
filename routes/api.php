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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
    Route::get('/tareas',                   'TaskController@index');
    Route::get('/tareas/buscar',            'TaskController@show');
    Route::post('/tareas/guardar',          'TaskController@store');
    Route::put('/tareas/actualizar',        'TaskController@update');
    Route::delete('/tareas/destruir',         'TaskController@destroy');
});