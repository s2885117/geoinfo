<?php

class UserController extends \BaseController {

  public function index()
  {
    return View::make('user.login');
  }
  public function create() 
  {
    $admin = true;
    return View::make('user.signup', compact('admin'));
  }
  public function store()
  {
    $input = Input::all();
    $password = $input['password'];
    $encrypted = Hash::make($password);
    $user = new User;
    $user->name = $input['name'];
    $user->password = $encrypted;
    $user->surname = $input['surname'];
    $user->email = $input['email']; 
    $user->admin = true;
    $user->tech = false;
    $user->finance = false;
    $user->save(); 
    Auth::attempt(array('email' => $input['email'], 'password' => $input['password']));
    return View::make('company.companyCreate');
  }
  public function login()
  {
    $input = Input::all();
    $email = $input['email'];
    $password = $input['password'];
    if (isset($input['remember']))
      $remember = $input['remember'];
    else
      $remember = 0;
    if ($remember = 1)
      Auth::attempt(array('email' => $email, 'password' => $password), true);
    else
      Auth::attempt(array('email' => $email, 'password' => $password));
    if(Auth::check())
      return Redirect::to('/');
    else
      return Redirect::to('failedLogin');
  }
  public function logout()
  {
    Auth::logout();
    return Redirect::to('/');
  }
  public function edit($project_id)
  {
    return View::make('user.signup', compact('project_id'));
  }
  //Method to create sub-User
  public function update($project_id)
  {
    $input = Input::all();
    $password = $input['password'];
    $encrypted = Hash::make($password);
    $user = new User;
    $user->name = $input['name'];
    $user->password = $encrypted;
    $user->surname = $input['surname'];
    $user->email = $input['email']; 
    $user->admin = false;
    $user->tech = false;
    $user->finance = false;
    $user->project_id = $project_id;
    $user->save(); 
    $project = User::find($project_id);
    return Redirect::action('ProjectController@show', compact('project'));
  }
}
