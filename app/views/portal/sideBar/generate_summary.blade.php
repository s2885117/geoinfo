@extends('/../layout')
@section('title')
Summary
@stop
@section('summary')
class="active"
@stop
@section('body')
<h1 style="margin-top: 100px; text-align: center;">Generate the Summary Report</h1>
{{ Form::open(array('action' => array('GenerateSummaryController@generate', $id), 'class' => 'form')) }}
<div style="margin-top: 30px; width: 70%; margin: 0px auto;">
  
        <legend style="text-align:center; margin-top:60px;"><span>Please select which sections to generate in the summary report.</span></legend>
  <div class="col-xs-6 col-sm-6" >
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Project_overview" value="Project_overview">
            Project Overview
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="App_activities" value="App_activities">
            Approval Activities
          </label>
        </div>
    <div class="checkbox">
          <label>
            <input type="checkbox" name="Site_conditions" value="Site_conditions">
            Site Conditions
          </label>
        </div>
    <div class="checkbox">
          <label>
            <input type="checkbox" name="Infrastructure" value="Infrastructure">
            Infrastructure
          </label>
        </div>
  </div>
  <div class="col-xs-6 col-sm-6">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Climate" value="Climate">
            Climate
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Operations" value="Operations">
            Operations
          </label>
        </div>
    <div class="checkbox">
          <label>
            <input type="checkbox" name="Construction_indicators" value="Construction_indicators">
            Construction Indicators
          </label>
        </div>
    {{ Form::submit('Generate', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
    
  </div>
</div>
@stop