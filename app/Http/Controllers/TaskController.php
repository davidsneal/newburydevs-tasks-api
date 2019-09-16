<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Http\Resources\TaskResource;

class TaskController extends Controller
{
    public function __construct()
    {
        TaskResource::withoutWrapping();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new TaskResource(Task::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new TaskResource(Task::find($id));
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
        $task = Task::find($id);

        $task->update($request->all());

        return new TaskResource($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        return new TaskResource($task);
    }


    /**
     * Mark the specified resource as complete.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function complete($id)
    {
        $task = Task::find($id);

        $task->update([
            'completed_at' => now(),
        ]);

        return new TaskResource($task);
    }
}
