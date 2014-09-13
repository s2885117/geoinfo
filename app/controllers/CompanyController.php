<?php

class CompanyController extends \BaseController {

  public function index()
  {
    return View::make('company.companyCreate');
  }
  public function store()
  {
    $input = Input::all();
    $company = new Company;
    $company->company_name = $input['company_name'];
    $company->company_address = $input['company_address'];
    $company->user_id = Auth::user()->id;
    $company->remember_token = "default";
    $company->save();
    return Redirect::to('/');
  }
}
