@extends('homeLayout')
@section('title')
Create Company
@stop
@section('body')
<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
  66%
</div>
<div class="jumbotron" id="createCompany">
  {{ Form::open(array('action' => 'CompanyController@store', 'class' => 'form-horizontal')) }}
  <div class="form-group">
    <p class="lead">Create my Company</p>

    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      {{ Form::text('company_name', Input::old('company_name'), array('class' => 'form-control', 'placeholder' => $errors->first('company_name'))); }}
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
      {{ Form::text('company_address', Input::old('company_address'), array('class' => 'form-control', 'placeholder' => $errors->first('company_address'))); }}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      {{ Form::submit('Create Company', array('class' => 'btn btn-default pull-right')) }}
    </div>
  </div>
  {{ Form::close(); }}
</div>
@stop