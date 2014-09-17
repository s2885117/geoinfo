@extends('homeLayout')
@section('title')
Sign Up
@stop
@section('body')
<div class="jumbotron" id="signUp">
  @if (isset($project_id))
  {{ Form::open(array('action' => array('UserController@update', $project_id), 'class' => 'form-horizontal')) }}
  @else
  {{ Form::open(array('action' => 'UserController@store', 'class' => 'form-horizontal')) }}
  @endif
  <div class="form-group">
    @if (isset($project_id))
    <p class="lead">Create Sub-User</p>
    @else
    <p class="lead">Sign Up</p>
    @endif
    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'First Name')); }}
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Surname</label>
    <div class="col-sm-10">
      {{ Form::text('surname', '', array('class' => 'form-control', 'placeholder' => 'Last Name')); }}
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      {{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email')); }}
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')); }}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      @if (isset($project_id))
      {{ Form::submit('Create and Return', array('class' => 'btn btn-default pull-right')) }}
      @else
      {{ Form::submit('Sign Up', array('class' => 'btn btn-default pull-right')) }}
      @endif
    </div>
  </div>
  {{ Form::close(); }}
</div>
@stop