@extends('homeLayout')
@section('title')
Projects
@stop
@section('body')
@if (isset($projects))
<h3>Your Projects</h3>
<ul>
 @foreach ($projects as $project)
  <li> {{ link_to_route('project.show', $project->project_name, array($project->id)) }}
  </li>
 @endforeach
</ul>
@else
<h1>{{ link_to_route('overview.show', 'Enter This Project', array($project->id)) }}<h1>
<h2>Project Name: {{ $project->project_name }} </h2><br/>
<h3>Cost Center: {{ $project->cost_center }}</h3>
@endif
<br/><br/>
{{ link_to_route('project.index', 'Back' ) }} <br/>
{{ link_to_route('project.create', 'Create a New Project' ) }}
@stop