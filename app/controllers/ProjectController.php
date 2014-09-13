<?php

class ProjectController extends \BaseController {

  public function index()
  {
    return View::make('project.projectCreate');
  }
  public function store()
  {
    $input = Input::all();
    $project = new Project;
    $project->name = $input['name'];
    $project->cost_center = $input['cost_center'];
    $project->company_id; //Find this from last project;
    $project->remember_token = "default";
    $project->save(); 
    return Redirect::to('/');
  }
}
