<?php

class WasteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('portal.sideBar.waste');
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
  public function show($id)
  {
    $waste = DB::table('wastes')->where('project_id', $id)->first();
    return View::make('portal.sidebar.waste', compact('waste', 'id'));
  }
}
