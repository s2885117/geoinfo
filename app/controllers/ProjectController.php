<?php

class ProjectController extends \BaseController {

  public function index()
  {
    /*
    if (Auth::user()->admin == true)
    {
      $projects = User::find(Auth::user()->id)->projects;
      if(is_null($projects))
        return Redirect::action('ProjectController@create');
      return View::make('project.project', compact('projects'));
    }
    else 
    */
    {
      //retrives projects, if no project exsists with the user logged in, create a new project, otherwise get all uploads and users and diplay them on the project page
      if ((Auth::user()) !== null)
      {
      $project = Project::find(Auth::user()->project_id);
      if(is_null($project))
        return Redirect::action('ProjectController@create');
      //$uploads = Upload::all();
      $uploads = DB::table('Uploads')->where('projects_id', $project->id)->get();
      $users = DB::table('Users')->where('project_id', $project->id)->get();
      //$users = Project::find($project->id)->users;
      return View::make('project.project', compact('project', 'users', 'uploads'));
      }
      else return Redirect::to('index');
      }
    }

    public function create()
    {
      return View::make('project.projectCreate');
    }

    //stores all inputs from the user inputs, validator checks all inputs are correct, prints error message in not, allows the store if correct
    public function store()
    {

      $input = Input::all();
      $company = User::find(Auth::id())->company;
      $project = new Project;
      $project->project_name = $input['project_name'];
      $project->cost_center = $input['cost_center'];
      $project->company_id = $company->id;
      $rules = array(
        'cost_center' => 'unique:projects||required',
        'project_name' => 'required'
      );
      $validation = Validator::make($input,$rules);

      if($validation->passes())
      {
        $project->save();
        $project->users()->attach(Auth::user()->id);
        $user = User::find(Auth::id());
        $user->project_id = $project->id;
        $user->save();

        return Redirect::action('ProjectController@index');
      } 
      else 
      {
        return Redirect::to('projectCreate')->withErrors($validation)->withInput();
      }
    }

    //displays the edit page
    public function edit($id)
    {
      $project = Project::find($id);
      return View::make('project.projectEdit', compact('project'));
    }

    //takes inputs from the user and updates the correct project
    public function update($id)
    {
      $project = Project::find($id);
      $input = Input::all();
      $project->project_name = $input['project_name'];
      $project->cost_center = $input['cost_center'];
      $project->save();
      return View::make('project.project');
    }

    public function show()
    {
      if ((Auth::user()) !== null)
      {
      //variable to create sub-Users
      $project = Project::find(Auth::user()->project_id);
      $users = DB::table('Users')->where('project_id', $project->id)->get();
      return View::make('project.project', compact('project', 'users'));
      }
      else return Redirect::to('index');
    }

    public function destroy($id)
    {
      $project = Project::find($id);
      $project->delete();
      return View::make('index');
    }
  }