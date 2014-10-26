<?php

class CompanyController extends \BaseController {

  public function index()
  {
    if ((Auth::user()) !== null)
      {
    $company = User::find(Auth::user()->id)->company;
    $projects = Company::find($company->id)->projects;
    return View::make('company.company', compact('company', 'projects'));
    }
    else return Redirect::to('index');
  }
  
  public function store()
  {
    $input = Input::all();
    $company = new Company;
    $company->company_name = $input['company_name'];
    $company->company_address = $input['company_address'];
    $company->user_id = Auth::user()->id;
    $rules = array(
      'company_name' => 'required',
      'company_address' => 'required'
    );
    $validation = Validator::make($input, $rules);

    if($validation->passes())
    {
      
      $company->save();
      return View::make('project.projectCreate');
    } 
    else 
    {
      return Redirect::to('companyCreate')->withErrors($validation)->withInput();
    }
  }
  
  public function edit()
  {
    $company = User::find(Auth::user()->id)->company;
    return View::make('company.companyEdit', compact('company'));
  }

  public function update()
  {
    $company = User::find(Auth::user()->id)->company;
    $company = Company::find($company->id);
    $input = Input::all();
    $company->company_name = $input['company_name'];
    $company->company_address = $input['company_address'];
    $company->save();
    return Redirect::action('company.index');
  }
}
