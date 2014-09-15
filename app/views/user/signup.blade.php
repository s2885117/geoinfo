@extends('homeLayout')
@section('title')
Sign Up
@stop
@section('body')
<div class="jumbotron" id="signUp">
  {{ Form::open(array('action' => 'UserController@store', 'class' => 'form-horizontal')) }}
  <div class="form-group">
    <p class="lead">Sign Up</p>

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
      {{ Form::submit('Sign Up', array('class' => 'btn btn-default pull-right')) }}
    </div>
  </div>
  {{ Form::close(); }}
</div>
@stop
