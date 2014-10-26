<?php

class GenerateSummaryController extends \BaseController {

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


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
    if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    return View::make('portal.sideBar.generate_summary', compact('id'));
    }
    else return Redirect::to('index');
	}
  
  public function generate()
    {
    if ((Auth::user()) !== null)
      {

    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
      
      
      $input = Input::all();
      
      $projectName = DB::table('overviews')->where('project_id', $id)->pluck('projectName');
      if ($projectName == ""){
        $projectName = "HaBUtek Project";
      }
      
      if((isset($input['Project_overview']))){
        $overview = DB::table('overviews')->where('project_id', $id)->first();
      }
      
      if((isset($input['App_activities']))){
        $activity = DB::table('activities')->where('project_id', $id)->first();
      }
      
      if((isset($input['Site_conditions']))){
        $siteCondition = DB::table('site_conditions')->where('project_id', $id)->first();
      }
      
      if((isset($input['Infrastructure']))){
        $infrastructure = DB::table('infrastructures')->where('project_id', $id)->first();
      }
      
      if((isset($input['Climate']))){
        $climate = DB::table('climates')->where('project_id', $id)->first();
      }
      
      if((isset($input['Operations']))){
        $operation = DB::table('wastes')->where('project_id', $id)->first();
      }
      
      if((isset($input['Construction_indicators']))){
        $waste = DB::table('wastes')->where('project_id', $id)->first();
      }
      
      return View::make('portal.summary', compact('overview', 'activity', 'siteCondition', 'infrastructure', 'climate', 'operation', 'waste', 'projectName', 'id'));

   /* return Redirect::action('SummaryController@gen', array($id, $Project_overview, $App_activities, $Site_conditions, $Infrastructure, $Climate, $Operations, $Construction_indicators));*/
     

                            
 //   return "Testing";
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
