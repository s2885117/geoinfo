@extends('homeLayout')
@section('title')
Company
@stop
@section('body')
<h2>Company Name: {{ $company->company_name }}</h2><br/>
<h3>Company Address: {{ $company->company_address }}</h3><br/>
<h4>{{ link_to_route('company.edit', 'Edit') }}</h4><br/>
<p>This Companies Projects <br/></p>
<ul>
 @foreach ($projects as $project)
  <li> {{ link_to_route('project.show', $project->project_name, array($project->id)) }}
  </li>
 @endforeach
</ul>
@stop