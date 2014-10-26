<?php

class AccessController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{}

  public function update($id)
	{
		
	}
  
  //Function to display the Acces Recource page
	public function show()
  {
    if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    $access = DB::table('accesses')->where('project_id', $id)->first();
    return View::make('portal.access', compact('access', 'id'));
    }
    else return Redirect::to('index');
  }
}
