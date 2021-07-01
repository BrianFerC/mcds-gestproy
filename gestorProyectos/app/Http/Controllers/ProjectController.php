<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tracing;
use App\Http\Requests\ProjectRequest;
use PDF;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('projects.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tracing = Tracing::all();
        return view('projects.create')->with('categories', $categories)
                                      ->with('tracings', $tracing);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $project = new Project;
        $project->category_id = $request->category_id;
        $project->tracing_id = $request->tracing_id;
        $project->code = $request->code;
        $project->name = $request->name;
        $project->area = $request->area;
        $project->class = $request->class;
        $project->description = $request->description;
        $project->budget = $request->budget;
        $project->state = $request->state;

        if ($project->save()) {
            return redirect('projects')->with('message', 'The Project: ' . $project->name . ' was successfully added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        $tracing = Tracing::all();
        return view('projects.edit')->with('project', $project)
                                    ->with('categories', $categories)
                                    ->with('tracings', $tracing);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $project->category_id = $request->category_id;
        $project->tracing_id = $request->tracing_id;
        $project->code = $request->code;
        $project->name = $request->name;
        $project->area = $request->area;
        $project->class = $request->class;
        $project->description = $request->description;
        $project->budget = $request->budget;
        $project->state = $request->state;

        if ($project->save()) {
            return redirect('projects')->with('message', 'The Project: ' . $project->name . ' was successfully edited');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->delete()) {
            return redirect('projects')->with('message', 'The Project: ' . $project->name . ' was successfully deleted');
        }
    }

    public function search(Request $request) {
        $projects = Project::names($request->q)->orderBy('id', 'DESC')->paginate(10);
        return view('projects.search')->with('projects', $projects);
    }

    public function pdf() {
        $projects = Project::all();
        $pdf = PDF::loadView('projects.pdf', compact('projects'));
        return $pdf->download('allprojects.pdf');
    }
}