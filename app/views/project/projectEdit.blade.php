@extends('homeLayout')
@section('title')
Edit Project
@stop
@section('body') 
<div class="jumbotron" id="editProject">
  {{ Form::open(array('action' => 'ProjectController@update', 'class' => 'form-horizontal')) }}
  <div class="form-group">
    <p class="lead">Edit Project</p>

    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      {{ Form::text('name', $project.name, array('class' => 'form-control')); }}
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Cost No.</label>
    <div class="col-sm-10">
      {{ Form::text('surname', $project.cost_center, array('class' => 'form-control', 'placeholder' => 'Cost Center Number')); }}
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