@extends('homeLayout')
@section('title')
Sign In
@stop
@section('body')
<div class="jumbotron" id="signIn">
  {{ Form::open(array('route' => 'user.login', 'class' => 'form-horizontal')) }}
  <div class="form-group">
    <p class="lead">Sign In</p>
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      {{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => $errors->first('email'))) }}
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      {{ Form::password('password', array('class' => 'form-control', 'placeholder' => $errors->first('password') )) }}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox pull-left">
        {{ Form::checkbox('remember', '1') }} Remember Me?
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      {{ Form::submit('Sign in', array('class', 'btn btn-default pull-right')) }}
    </div>
  </div>
  {{ Form::close() }}
</div>
@stop
