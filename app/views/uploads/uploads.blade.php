@extends('homeLayout')
@section('title')
Upload
@stop
@section('body')
<h1>Upload document please</h1>
    
     {{ Form::open(array('url'=>'/upload/uploading/' . $project->id,'files'=>true)) }}
  
  {{ Form::label('file','File',array('id'=>'','class'=>'')) }}
  {{ Form::file('file','',array('id'=>'','class'=>'')) }}
  <br/>
  <!-- submit buttons -->
  {{ Form::submit('Upload') }}
  
  <!-- reset buttons -->
  {{ Form::reset('Reset') }}
  
  {{ Form::close() }}
<br />
{{ link_to_action('ProjectController@index', "Back to Project Page")}}

@stop