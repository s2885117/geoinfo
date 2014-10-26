<?php

class UserController extends \BaseController {

  public function index()
  {
    return View::make('user.login');
  }
  
  public function create() 
  {
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
    $user->creator = true;
    $user->tech = false;
    $user->finance = false;
    $rules = array(
      'email' => 'unique:users,email||required',
      'password' => 'required|min:8',
      'name' => 'required|alpha',
      'surname' => 'required|alpha',
    );
    $validation = Validator::make($input,$rules);

    if($validation->passes())
    {
      $user->save();
      Auth::attempt(array('email' => $input['email'], 'password' => $input['password']));
      return View::make('company.companyCreate');
    } 
    else 
    {
      return Redirect::to('signup')->withErrors($validation)->withInput();
    }

  }
 
  
  public function savePosition(){
   // return "This is coming later";
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;

    $users = DB::table('users')->where('project_id', '=', $project->id)->lists('id');
    $input = Input::all();
    
    foreach ($users as $user) {
     $userPos = User::find($user); 
      if ((isset($input[$user])) && ($input[$user] === "admin")) {
          $userPos->finance = false;
          $userPos->admin = true;
          $userPos->tech = false;
          $userPos->save(); 
      }
      else if ((isset($input[$user])) && ($input[$user] === "finance")) {
          $userPos->finance = true;
          $userPos->admin = false;
          $userPos->tech = false;
          $userPos->save(); 
      }
      else if ((isset($input[$user])) && ($input[$user] === "tech")) {
          $userPos->finance = false;
          $userPos->admin = false;
          $userPos->tech = true;
          $userPos->save(); 
      }
      else if ((isset($input[$user])) && ($input[$user] === "default")) {
          $userPos->finance = false;
          $userPos->admin = false;
          $userPos->tech = false;
          $userPos->save(); 
      }
    }
    return Redirect::action('ProjectController@index');
  }
  
  public function login()
  { 
    $user = array(
      'email' => Input::get('email'),
      'password' => Input::get('password')
    );
    $rules = array(
      'email' => array( 'required', 'email' ),
      'password' => array( 'required', 'alpha-dash', 'min:8'),
    );
    
    $validation = Validator::make($user, $rules);
    if ($validation->passes()) {
      // Try to log the user in.
      if (Auth::attempt($user))
        return Redirect::to('/');
      else
        return Redirect::to('login')->withErrors(array('password' => 'The email or password is invalid'))->withInput(Input::except('password'));
    }
    //return $validation->messages()->all();
    return Redirect::to('login')->withErrors($validation)->withInput();
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
    $admin = false;
    $creator = false;
    $input = Input::all();
    $password = $input['password'];
    $encrypted = Hash::make($password);
    $user = new User;
    $user->name = $input['name'];
    $user->password = $encrypted;
    $user->surname = $input['surname'];
    $user->email = $input['email']; 
    $user->admin = $admin;
    $user->creator = $creator;
    $user->tech = false;
    $user->finance = false;
    $user->project_id = $project_id;
    $rules = array(
      'email' => 'unique:users,email||required',
      'password' => 'required|min:8',
      'name' => 'required|alpha',
      'surname' => 'required|alpha',
    );
    $validation = Validator::make($input,$rules);
    if($validation->passes())
    {
      $user->save();
      $project = User::find($project_id);
      return Redirect::action('ProjectController@show', compact('project'));
    } 
    else 
    {
      return View::make('user.signup', compact('project_id'));
    }
  }
}
