@extends('homeLayout')
@section('title')
Create Project
@stop
@section('body') 
<div class="jumbotron" id="createCompany">
  {{ Form::open(array('action' => 'CompanyController@update', 'class' => 'form-horizontal')) }}
  <div class="form-group">
    <p class="lead">Edit My Company</p>

    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      {{ Form::text('company_name', $company->company_name , array('class' => 'form-control', 'placeholder' => 'Name of your Company')); }}
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Cost No.</label>
    <div class="col-sm-10">
      {{ Form::text('company_address', $company->company_address, array('class' => 'form-control', 'placeholder' => 'Your Companies Address')); }}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      {{ Form::submit('Commit Changes', array('class' => 'btn btn-default pull-right')) }}
    </div>
  </div>
  {{ Form::close(); }}
</div>
@stop