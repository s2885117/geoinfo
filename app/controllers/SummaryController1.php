<?php

class SummaryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

  public function show()
    {
    
  }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function gen($id)
	{
		//
    return $Operations;
    if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;

    $waste = DB::table('wastes')->where('project_id', $id)->first();
    $overview = DB::table('overviews')->where('project_id', $id)->first();
    $activity = DB::table('activities')->where('project_id', $id)->first();
    $siteCondition = DB::table('site_conditions')->where('project_id', $id)->first();
    $infrastructure = DB::table('infrastructures')->where('project_id', $id)->first();
    $climate = DB::table('climates')->where('project_id', $id)->first();
    //return $project->id;
 //   $summary = DB::table('summaries')->where('project_id', $id)->first();
 //   $user_var = User::find(Auth::user()->id);
 //   $user = array('finance' => $user_var->finance);
 //   $user = array_add($user, 'admin', $user_var->admin);
 //   $user = array_add($user, 'tech', $user_var->tech);


    return View::make('portal.summary', compact('overview', 'activity', 'siteCondition', 'infrastructure', 'climate', 'waste', 'id'));
    }
    else return Redirect::to('index');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
