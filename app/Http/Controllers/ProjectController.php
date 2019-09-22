<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = Project::where('user_id', auth()->user()->id)->get();
        return view('Projects.index', ['projects' => $projects]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string'
        ]);
        $project = new Project();
        $project->user_id = auth()->user()->id;
        $project->name = $request->get('name');
        $project->description = $request->get('description');
        $project->save();
        return redirect('/projects')->with('message', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     * @throws AuthorizationException
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $this->authorize('update', $project);
        return view('Projects.show', ['project' => $project]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('Projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     * @throws AuthorizationException
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'

        ]);
        $project = Project::findOrFail($id);
        $project->name = $request->get('name');
        $project->description = $request->get('description');
        $this->authorize('update', $project);
        $project->save();



        return redirect(route('projects.index'))->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     * @throws AuthorizationException
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $this->authorize('destroy', $project);

        $project->delete();


        return redirect(route('projects.index'))->with('success','deleted successfully!');
    }
}
