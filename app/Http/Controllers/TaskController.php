<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($project_id)
    {
        $project = Project::findOrFail($project_id);
        $tasks = $project->tasks;
        return view('Projects.tasks.index', [
            'tasks' => $tasks,
            'project_id' => $project_id
        ]);
    }

    public function create($project_id)
    {

        return view('Projects.tasks.create', ['project_id' => $project_id]);
    }

    public function store(Project $project_id, Request $request)
    {
        $request->validate([
            'name' => 'require//d|string',
            'status' => 'required|string'
        ]);
        $project_id->addTask($request->input('name'), $request->input('status'));
        return redirect(route('tasks', $project_id))->with('message', 'success! task created');
    }
    public function show(Project $project_id, Task $task){

        return view('Projects.tasks.show', ['task'=> $task]);


    }


}
