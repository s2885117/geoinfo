@extends('homeLayout')
@section('title')
Create Company
@stop
@section('body')
<div class="container">      
  <div class="jumbotron" id="signIn">
      {{ Form::open(array('action' => 'CompanyController@store', 'class' => 'form-horizontal', 'role' => 'form')) }}
      <p class="lead">Create Company Account</p>
      <div class="table-responsive">
        <div class="form-group">
          <label for="company_name" class="col-sm-2 col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            {{ Form::text('company_name', '', array('class' => 'form-control', 'placeholder' => 'Company Name')); }}
          </div>
        </div>

        <div class="form-group">
          <label for="company_address" class="col-sm-2 control-label">Address</label>
          <div class="col-sm-10">
            {{ Form::text('company_address', '', array('class' => 'form-control', 'placeholder' => 'Company Address')); }}
          </div>
        </div>
      </div>
      <div class="table-responsive">	
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Save and Create Project', array('class' => 'btn btn-default pull-right')) }}
          </div>
        </div>
      </div>
    {{ Form::close(); }}
  </div>
</div>