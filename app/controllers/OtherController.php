<?php

class OtherController extends \BaseController {

	public function index() {}

  //Stores the input from the user, if no row exsists with project_id create a new one, if it does retrieve that row and store values into that row
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
    if ((Auth::user()) !== null)
      {
    $other = DB::table('others')->where('project_id', $id)->first();
    return View::make('portal.other', compact('other', 'id'));
    }
    else return Redirect::to('index');
  }


}
