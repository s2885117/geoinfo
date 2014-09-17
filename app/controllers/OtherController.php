<?php

class OtherController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('portal.other');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
    if(is_null(DB::table('others')->where('project_id', $id)->first()))
       {
         $other = new Other;
         $other->project_id = ($id);
       }
    else
       $other = DB::table('others')->where('project_id', $id)->first();

    $other->save(); 
    
    return View::make('portal.other', compact('other', 'id'));
	}

  public function show($id)
  {
    $other = DB::table('others')->where('project_id', $id)->first();
    return View::make('portal.other', compact('other', 'id'));
  }


}
