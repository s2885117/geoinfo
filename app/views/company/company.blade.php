@extends('homeLayout')
@section('title')
Company
@stop
@section('body')
<div class="company">
  <div id="head">
    <h1 id="name">{{ $company->company_name }}</h1><br/>
    <h3><span id="address_label">Company Address:</span> <span id="address">{{ $company->company_address }}</span></h3>
  </div>
  <br/>
  <!-- <h4>{{ link_to_route('company.edit', 'Edit') }}</h4><br/> -->
  <h4 id="project_label">{{ $company->company_name }}'s Projects <br/></h4>
  <ul class="no_list">
    @foreach ($projects as $project)
    <div class="project">
      <li> {{ link_to_route('project.index', $project->project_name, array($project->id)) }}
      </li>
    </div>
    @endforeach
  </ul>
</div>
@stop