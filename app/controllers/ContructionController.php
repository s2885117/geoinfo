<?php

class ContructionController extends \BaseController {

	public function index() {}

  public function update()
	{
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
		$input = Input::all();
    if(is_null(DB::table('constructions')->where('project_id', $id)->first()))
       {
         $construction = new Construction;
         $construction->project_id = ($id);
       }
    else
       $construction = Project::find($id)->construction;
    return View::make('portal.constructionWaste', compact('construction', 'id'));
	}
  
  public function show()
  {
    if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    $construction = DB::table('constructions')->where('project_id', $id)->first();
    return View::make('portal.construction', compact('construction', 'id'));
    }
    else return Redirect::to('index');
  }

	
}
