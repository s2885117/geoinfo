<?php

class ContructionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('portal.contructionWaste');
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
public function show($id)
  {
    $construction = DB::table('constructions')->where('project_id', $id)->first();
    return View::make('portal.construction', compact('construction', 'id'));
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
    if(is_null(DB::table('constructions')->where('project_id', $id)->first()))
       {
         $construction = new Construction;
         $construction->project_id = ($id);
       }
    else
       $construction = DB::table('constructions')->where('project_id', $id)->first();

    $construction->save(); 
    
    return View::make('portal.constructionWaste', compact('construction', 'id'));
	}


}
