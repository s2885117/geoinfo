<?php

class ProjectController extends \BaseController {

  public function index()
  {
    $projects = User::find(Auth::user()->id)->projects;
    return View::make('project.project', compact('projects'));
  }

  public function create()
  {
    return View::make('project.projectCreate');
  }

  public function store()
  {

    $input = Input::all();
    $company = User::find(Auth::user()->id)->company;
    $project = new Project;
    $project->project_name = $input['project_name'];
    $project->cost_center = $input['cost_center'];
    $project->company_id = $company->id;
    $project->save();
    $project->users()->attach(Auth::user()->id);
    return Redirect::action('ProjectController@index');
  }

  public function edit($id)
  {
    $project = Project::find($id);
    return View::make('project.projectEdit', compact('project'));
  }

  public function update($id)
  {
    $project = Project::find($id);
    $input = Input::all();
    $project->project_name = $input['project_name'];
    $project->cost_center = $input['cost_center'];
    $project->save();
    return View::make('project.project');
  }

  public function show($id)
  {
    $project = Project::find($id);
    return View::make('project.project', compact('project'));
  }
  
  public function destroy($id)
    {
    $project = Project::find($id);
    $project->delete();
    return View::make('index');
  }
}