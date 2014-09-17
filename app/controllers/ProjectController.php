<?php

class ProjectController extends \BaseController {

  public function index()
  {
    if (Auth::user()->admin = true)
    {
      $projects = User::find(Auth::user()->id)->projects;
      if(is_null($projects))
        return Redirect::action('ProjectController@create');
      return View::make('project.project', compact('projects'));
    }
    else
    {
      $project = Project::find(Auth::user()->project_id);
    $users = DB::table('Users')->where('project_id', $project->id)->get();
    return View::make('project.project', compact('project', 'users'));
    }
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
    //variable to create sub-Users
    $project = Project::find($id);
    $users = DB::table('Users')->where('project_id', $project->id)->get();
    return View::make('project.project', compact('project', 'users'));
  }

  public function destroy($id)
  {
    $project = Project::find($id);
    $project->delete();
    return View::make('index');
  }
}