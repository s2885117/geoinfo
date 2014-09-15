@extends('homeLayout')
@section('title')
Create a New Project
@stop
@section('body')
<div class="jumbotron" id="createProject">
  {{ Form::open(array('action' => 'ProjectController@store', 'class' => 'form-horizontal')) }}
  <div class="form-group">
    <p class="lead">Create a Project</p>

    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      {{ Form::text('project_name', '', array('class' => 'form-control', 'placeholder' => 'Name of Project')); }}
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Cost No.</label>
    <div class="col-sm-10">
      {{ Form::text('cost_center', '', array('class' => 'form-control', 'placeholder' => 'Cost Center Number')); }}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      {{ Form::submit('Create Project', array('class' => 'btn btn-default pull-right')) }}
    </div>
  </div>
  {{ Form::close(); }}
</div>
@stop