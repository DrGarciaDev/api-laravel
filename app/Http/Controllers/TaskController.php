<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $task = Task::all();
        // return $task;

        return response(['estatus' => 200, 'tareas' => $task]);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
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
        $task = new Task();
        $task->name         = $request->name;
        $task->description  = $request->description;
        $task->content      = $request->content;

        $task->save();

        return response(['estatus' => 200, 'tarea insertada' => $task]);
        //Esta función guardará las tareas que enviaremos mediante vuejs
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $task = Task::findOrFail($request->id);
        // return $task;

        return response(['estatus' => 200, 'tarea' => $task]);
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $task = Task::findOrFail($request->id);

        $task->fill($request->all());
        // $task->name         = $request->name;
        // $task->description  = $request->description;
        // $task->content      = $request->content;

        $task->save();

        // return $task;

        return response(['estatus' => 200, 'tarea actalizada' => $task]);
        //Esta función actualizará la tarea que hayamos seleccionado
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // print_r('<pre>');
        // print_r($request->input());
        // exit;
        $task = Task::destroy($request->id);
        // return $task;

        return response(['estatus' => 200, 'tarea eliminada' => $task]);
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}
