@extends('homeLayout')
@section('title')
Create Project
@stop
@section('body')      
  <div class="jumbotron" id="logoImg">
      {{ Form::open(array('action' => 'ProjectController@store', 'class' => 'form-horizontal', 'role' => 'form')) }}
      <p class="lead">Project Creation</p>
      <div class="table-responsive">
        <div class="form-group">
          <label for="project_name" class="col-sm-2 col-sm-2 control-label">Project</label>
          <div class="col-sm-10">
            {{ Form::text('project_name', '', array('class' => 'form-control', 'placeholder' => 'Project')); }}
          </div>
        </div>

        <div class="form-group">
          <label for="cost_centre" class="col-sm-2 control-label">Cost Centre</label>
          <div class="col-sm-10">
            {{ Form::text('cost_centre', '', array('class' => 'form-control', 'placeholder' => 'Cost Centre')); }}
          </div>
        </div>
      </div>
      <div class="table-responsive">	
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Save', array('class' => 'btn btn-default pull-right')) }}
          </div>
        </div>
      </div>
    {{ Form::close(); }}
  </div>