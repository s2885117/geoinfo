<?php

class CompanyController extends \BaseController {

  public function index()
  {
    $company = User::find(Auth::user()->id)->company;
    $projects = Company::find($company->id)->projects;
    return View::make('company.company', compact('company', 'projects'));
  }
  public function store()
  {
    $input = Input::all();
    $company = new Company;
    $company->company_name = $input['company_name'];
    $company->company_address = $input['company_address'];
    $company->user_id = Auth::user()->id;
    $company->save();
    return View::make('project.projectCreate');
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
