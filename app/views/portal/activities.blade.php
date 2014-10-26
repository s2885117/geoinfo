@extends('layout')
@section('title')
Approval Activities
@stop
@section('activState')
class="active"
@stop
@section('body')
<div class="LearnMore">
  <h4>Learn More</h4>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
</div>
	  <div class="panel panel-default" style="margin-top: 20px;">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	<a data-toggle="collapse" data-parent="#overview" href="#collapseOne">
		  <span class="badge pull-right">1</span>
		    Applicable Legislation
	</a>
	      </h4>
	    </div>
	<div id="collapseOne" class="panel-collapse collapse">
      <div id="collapseOne">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
		  5%
		</div>
	      </div>
        {{ Form::open(array('action' => array('ActivitiesController@update', $id), 'class' => 'form')) }}
        <label for="legislationIndicators" class="control-label">Describe the relation of these indicators to the proposed development:</label><br />
        @if (isset($activity))
          {{ Form::textarea('legislationIndicators', $activity->legislationIndicators, array('class' => 'form-control', 'style' => 'width:100%')); }}
        @else
          {{ Form::textarea('legislationIndicators', '', array('class' => 'form-control', 'style' => 'width:100%')); }}
        @endif
	      <div class="table-responsive">
		  <table class="table table-condensed table-hover">
        <tr>
          <td>
            National Legislation
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('nationalLegislation', $activity->nationalLegislation, array('class' => 'form-control')); }}
            @else
              {{ Form::text('nationalLegislation', '', array('class' => 'form-control')); }}
            @endif
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
         <tr>
          <td>
            State / Territory/ Provence/ Department (Fr) Legislation
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('stateTerritory', $activity->stateTerritory, array('class' => 'form-control')); }}
            @else
              {{ Form::text('stateTerritory', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
            Planning Legislation
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('planningLegislation', $activity->planningLegislation, array('class' => 'form-control')); }}
            @else
              {{ Form::text('planningLegislation', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
            Environmental Legislation
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('environmentalLegislation', $activity->environmentalLegislation, array('class' => 'form-control')); }}
            @else
              {{ Form::text('environmentalLegislation', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
            Other Legislation
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('otherLegislation', $activity->otherLegislation, array('class' => 'form-control')); }}
            @else
              {{ Form::text('otherLegislation', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
        <td colspan="3">
          <div class="form-group">
            <div>
               {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
            </div>
          </div>
        </td>
      </tr>
		    
		  </table>
	      </div>
	    </div>
    </div>
          </div>
        </div>
	  
	  <!------------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		<span class="badge pull-right">14</span>
		Approval Process Activities
	    </a>
	    </h4>
	  </div>
	 <div id="collapseTwo" class="panel-collapse collapse">
    <div id="collapseTwo">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
		  10%
		</div>
	      </div>
        <label for="activitiesIndicator" class="control-label">Describe the relation of these indicators to the proposed development:</label><br />
        @if (isset($activity))
          {{ Form::textarea('activitiesIndicator', $activity->activitiesIndicator, array('class' => 'form-control', 'style' => 'width:100%')); }}
        @else
          {{ Form::textarea('activitiesIndicator', '', array('class' => 'form-control', 'style' => 'width:100%')); }}
        @endif
	      <div class="table-responsive">
		  <table class="table table-condensed table-hover">
		  <tr>
          <td>
            Applicable Planning Scheme
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('planningScheme', $activity->planningScheme, array('class' => 'form-control')); }}
            @else
              {{ Form::text('planningScheme', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
           Applicable Planning Scheme Land Use Definitions
          </td>
          <td>
            @if (isset($activity))
               {{ Form::text('planningSchemeLand', $activity->planningSchemeLand, array('class' => 'form-control')); }}
            @else
               {{ Form::text('planningSchemeLand', '', array('class' => 'form-control')); }}
            @endif
           
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
         <tr>
          <td>
           Applicable Land use Zones/ Domains/ Precincts/ Land-Use Plan Areas
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('applicableLand', $activity->applicableLand, array('class' => 'form-control')); }}
            @else
              {{ Form::text('applicableLand', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
            Applicable Development Codes
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('applicableDevelopment', $activity->applicableDevelopment, array('class' => 'form-control')); }}
            @else
              {{ Form::text('applicableDevelopment', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
            Applicable Planning Scheme Policies
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('applicablePolicies', $activity->applicablePolicies, array('class' => 'form-control')); }}
            @else
              {{ Form::text('applicablePolicies', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
            Applicable Environmental Approvals required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('applicableEnvironmental', $activity->applicableEnvironmental, array('class' => 'form-control')); }}
            @else
              {{ Form::text('applicableEnvironmental', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
            Applicable Local Law permits required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('applicableLaw', $activity->applicableLaw, array('class' => 'form-control')); }}
            @else
              {{ Form::text('applicableLaw', '', array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
             Any other permits/ licenses required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('applicablePermits', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->applicablePermits, array('class' => 'form-control')); }}
            @else
              {{ Form::select('applicablePermits', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
         <tr>
          <td>
             Is an entry notice/ permit to traverse required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('entryNoticePermit', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->entryNoticePermit, array('class' => 'form-control')); }}
            @else
              {{ Form::select('entryNoticePermit', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
         <tr>
          <td>
             Is an occupation permit required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('occupationPermit', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->occupationPermit, array('class' => 'form-control')); }}
            @else
              {{ Form::select('occupationPermit', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
        <td colspan="3">
          <div class="form-group">
            <div>
               {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
            </div>
          </div>
        </td>
      </tr>
		  </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>
	<!------------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	 <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		<span class="badge pull-right">2</span>
		Significant Environmental Risk(s)
	</a>
	    </h4>
	  </div>
  <div id="collapseThree" class="panel-collapse collapse">
    <div id="collapseThree">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
		  35%
		</div>
	      </div>
        <label for="environmentalIndicators" class="control-label">Describe the relation of these indicators to the proposed development:</label><br />
        @if (isset($activity))
          {{ Form::textarea('environmentalIndicators', $activity->environmentalIndicators, array('class' => 'form-control', 'style' => 'width:100%')); }}
        @else
          {{ Form::textarea('environmentalIndicators', '', array('class' => 'form-control', 'style' => 'width:100%')); }}
        @endif
	      <div class="table-responsive">
		  <table class="table table-condensed table-hover">
		  <tr>
          <td>
             Is this site affected by planning scheme bushfire overlays?
          </td>
          <td colspan="2">
            @if (isset($activity))
              {{ Form::select('bushfireOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->bushfireOverlays, array('class' => 'form-control')); }}
            @else
              {{ Form::select('bushfireOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
        </tr>
        <tr>
          <td>
             Is this site affected by planning scheme flood overlays?
          </td>
          <td colspan="2">
            @if (isset($activity))
              {{ Form::select('floodOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->floodOverlays, array('class' => 'form-control')); }}
            @else
              {{ Form::select('floodOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
        </tr>
        <tr>
          <td>
            Is this site affected by planning scheme landslip overlays?
          </td>
          <td colspan="2">
            @if (isset($activity))
              {{ Form::select('landslipOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->landslipOverlays, array('class' => 'form-control')); }}
            @else
              {{ Form::select('landslipOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
        </tr>
        <tr>
          <td>
            Is this site affected by planning scheme acid sulfate soils overlays?
          </td>
          <td colspan="2">
            @if (isset($activity))
              {{ Form::select('soilsOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->soilsOverlays, array('class' => 'form-control')); }}
            @else
              {{ Form::select('soilsOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
        </tr>
        <tr>
          <td>
           Is this site affected by planning scheme or related party protected vegetation overlays?
          </td>
          <td colspan="2">
            @if (isset($activity))
              {{ Form::select('vegetationOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->vegetationOverlays, array('class' => 'form-control')); }}
            @else
              {{ Form::select('vegetationOverlays', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
        </tr>
        <tr>
          <td>
           Is this site affected by contaminated lands considerations?
          </td>
          <td colspan="2">
            @if (isset($activity))
              {{ Form::select('siteContaminated', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->siteContaminated, array('class' => 'form-control')); }}
            @else
              {{ Form::select('siteContaminated', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
        </tr>
        <tr>
          <td>
           Any other matters that require consideration?
          </td>
          <td colspan="2">
            @if (isset($activity))
              {{ Form::select('requireConsideration', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->requireConsideration, array('class' => 'form-control')); }}
            @else
              {{ Form::select('requireConsideration', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is an Ecological Survey Required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('ecologicalSurvey', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->ecologicalSurvey, array('class' => 'form-control')); }}
            @else
              {{ Form::select('ecologicalSurvey', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('ecologicalEntity', $activity->ecologicalEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('ecologicalEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is an Environmental Constraints Assessment Required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('environmentalConstraints', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->environmentalConstraints, array('class' => 'form-control')); }}
            @else
              {{ Form::select('environmentalConstraints', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('environmentalEntity', $activity->environmentalEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('environmentalEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
        <td colspan="4">
          <div class="form-group">
            <div>
               {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
            </div>
          </div>
        </td>
      </tr>
		  </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>
	<!------------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	 <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
		<span class="badge pull-right">2</span>
		Receiving Environment Management Plan(s) (REMP)
	</a>
	    </h4>
	  </div>
  <div id="collapseFour" class="panel-collapse collapse">
    <div id="collapseFour">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
		  90%
		</div>
	      </div>
        <label for="managementIndicators" class="control-label">Describe the relation of these indicators to the proposed development:</label><br />
        @if (isset($activity))
          {{ Form::textarea('managementIndicators', $activity->managementIndicators, array('class' => 'form-control', 'style' => 'width:100%')); }}
        @else
          {{ Form::textarea('managementIndicators', '', array('class' => 'form-control', 'style' => 'width:100%')); }}
        @endif
	    <div class="table-responsive">
		  <table class="table table-condensed table-hover">
        <tr>
          <td>
           Is a Receiving Environment Management Plan required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('environmentalManagementPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->environmentalManagementPlan, array('class' => 'form-control')); }}
            @else
              {{ Form::select('environmentalManagementPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('environmentalManagementPlanEntity', $activity->environmentalManagementPlanEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('environmentalManagementPlanEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a direct toxicity assessment required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('toxicityAssessment', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->toxicityAssessment, array('class' => 'form-control')); }}
            @else
              {{ Form::select('toxicityAssessment', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('toxicityAssessmentEntity', $activity->toxicityAssessmentEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('toxicityAssessmentEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a receiving waters monitoring plan required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('watersMonitoringPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->watersMonitoringPlan, array('class' => 'form-control')); }}
            @else
              {{ Form::select('watersMonitoringPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('watersMonitoringPlanEntity', $activity->watersMonitoringPlanEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('watersMonitoringPlanEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a Near-field Monitoring Program Required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('fieldMonitoringProgram', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->fieldMonitoringProgram, array('class' => 'form-control')); }}
            @else
              {{ Form::select('fieldMonitoringProgram', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('fieldMonitoringProgramEntity', $activity->fieldMonitoringProgramEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('fieldMonitoringProgramEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a Far-field Monitoring Program Required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('farfieldMonitoringProgram', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->farfieldMonitoringProgram, array('class' => 'form-control')); }}
            @else
              {{ Form::select('farfieldMonitoringProgram', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('farfieldMonitoringProgramEntity', $activity->farfieldMonitoringProgramEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('farfieldMonitoringProgramEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
        <td colspan="4">
          <div class="form-group">
            <div>
               {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
            </div>
          </div>
        </td>
      </tr>
          </table>
	    </div>
	  </div>
	</div>
      </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
		<span class="badge pull-right">8</span>
		Management and Monitoring Programs (MMP) 
	 </a>
	    </h4>
	  </div>
	<div id="collapseFive" class="panel-collapse collapse">
    <div id="collapseFive">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
		  30%
		</div>
	      </div>
        <label for="monitoringIndicators" class="control-label">Describe the relation of these indicators to the proposed development:</label><br />
        @if (isset($activity))
          {{ Form::textarea('monitoringIndicators', $activity->monitoringIndicators, array('class' => 'form-control', 'style' => 'width:100%')); }}
        @else
          {{ Form::textarea('monitoringIndicators', '', array('class' => 'form-control', 'style' => 'width:100%')); }}
        @endif
	    <div class="table-responsive">
		  <table class="table table-condensed table-hover">
        <tr>
          <td>
          Is an Off-set Monitoring Program Required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('offsetMonitoringProgram', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->offsetMonitoringProgram, array('class' => 'form-control')); }}
            @else
              {{ Form::select('offsetMonitoringProgram', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('offsetMonitoringProgramEntity', $activity->offsetMonitoringProgramEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('offsetMonitoringProgramEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a Off-set Management Program Required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('offsetManagementProgram', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->offsetManagementProgram, array('class' => 'form-control')); }}
            @else
              {{ Form::select('offsetManagementProgram', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('offsetManagementProgramEntity', $activity->offsetManagementProgramEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('offsetManagementProgramEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a Rehabilitation management and Monitoring Plan required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('rehabilitationManagement', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->rehabilitationManagement, array('class' => 'form-control')); }}
            @else
              {{ Form::select('rehabilitationManagement', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('rehabilitationManagementEntity', $activity->rehabilitationManagementEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('rehabilitationManagementEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a Waste Management Monitoring Program Required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('wasteManagementMonitoring', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->wasteManagementMonitoring, array('class' => 'form-control')); }}
            @else
              {{ Form::select('wasteManagementMonitoring', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('wasteManagementMonitoringEntity', $activity->wasteManagementMonitoringEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('wasteManagementMonitoringEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a Threatened Fauna Management Monitoring Program Required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('faunaManagement', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->faunaManagement, array('class' => 'form-control')); }}
            @else
              {{ Form::select('faunaManagement', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('faunaManagementEntity', $activity->faunaManagementEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('faunaManagementEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
                <tr>
          <td>
           Is a Threatened Flora Management Monitoring Program Required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('floraManagement', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->floraManagement, array('class' => 'form-control')); }}
            @else
              {{ Form::select('floraManagement', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('floraManagementEntity', $activity->floraManagementEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('floraManagementEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
                <tr>
          <td>
           Is an Ecological Communities/ species Management Monitoring Program Required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('ecologicalCommunities', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->ecologicalCommunities, array('class' => 'form-control')); }}
            @else
              {{ Form::select('ecologicalCommunities', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('ecologicalCommunitiesEntity', $activity->ecologicalCommunitiesEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('ecologicalCommunitiesEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
                <tr>
          <td>
           Is a Water Management Monitoring Program Required
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('waterManagement', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->waterManagement, array('class' => 'form-control')); }}
            @else
              {{ Form::select('waterManagement', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('waterManagementEntity', $activity->waterManagementEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('waterManagementEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
        <td colspan="4">
          <div class="form-group">
            <div>
               {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
            </div>
          </div>
        </td>
      </tr>
          </table>
	    </div>
	  </div>
	</div>
    </div>
      </div>
  <!------------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
		<span class="badge pull-right">8</span>
		Land Access
	</a>
	    </h4>
	  </div>
  <div id="collapseSix" class="panel-collapse collapse">
    <div id="collapseSix">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
		  35%
		</div>
	      </div>
        <label for="landIndicators" class="control-label">Describe the relation of these indicators to the proposed development:</label><br />
        @if (isset($activity))
          {{ Form::textarea('landIndicators', $activity->landIndicators, array('class' => 'form-control', 'style' => 'width:100%')); }}
        @else
          {{ Form::textarea('landIndicators', '', array('class' => 'form-control', 'style' => 'width:100%')); }}
        @endif
	    <div class="table-responsive">
		  <table class="table table-condensed table-hover">
        <tr>
          <td>
          Has land-owner consent been granted for the development?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('landownerConsent', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->landownerConsent, array('class' => 'form-control')); }}
            @else
              {{ Form::select('landownerConsent', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('landownerConsentEntity', $activity->landownerConsentEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('landownerConsentEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is local government land administration related consent required for the development? 
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('governmentLandAdministration', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->governmentLandAdministration, array('class' => 'form-control')); }}
            @else
              {{ Form::select('governmentLandAdministration', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('governmentLandAdministrationEntity', $activity->governmentLandAdministrationEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('governmentLandAdministrationEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is local government land tenure related consent required for the development?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('localLandTenure', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->localLandTenure, array('class' => 'form-control')); }}
            @else
              {{ Form::select('localLandTenure', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('localLandTenureEntity', $activity->localLandTenureEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('localLandTenureEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is state government land administration related consent required for the development?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('stateLandAdministration', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->stateLandAdministration, array('class' => 'form-control')); }}
            @else
              {{ Form::select('stateLandAdministration', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('stateLandAdministrationEntity', $activity->stateLandAdministrationEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('stateLandAdministrationEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is state government land tenure related consent required for the development?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('stateLandTenure', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->stateLandTenure, array('class' => 'form-control')); }}
            @else
              {{ Form::select('stateLandTenure', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('stateLandTenureEntity', $activity->stateLandTenureEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('stateLandTenureEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
                <tr>
          <td>
           Is national government land administration related consent required for the development?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('nationalLandAdministration', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->nationalLandAdministration, array('class' => 'form-control')); }}
            @else
              {{ Form::select('nationalLandAdministration', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('nationalLandAdministrationEntity', $activity->nationalLandAdministrationEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('nationalLandAdministrationEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
                <tr>
          <td>
           Is national government land tenure related consent required for the development?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('nationalLandTenure', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->nationalLandTenure, array('class' => 'form-control')); }}
            @else
              {{ Form::select('nationalLandTenure', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('nationalLandTenureEntity', $activity->nationalLandTenureEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('nationalLandTenureEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
        <td colspan="4">
          <div class="form-group">
            <div>
               {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
            </div>
          </div>
        </td>
      </tr>
          </table>
	    </div>
	  </div>
	</div>
    </div>
      </div>
	  <!------------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	 <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
		<span class="badge pull-right">3</span>
		Cultural Heritage/Native Title Team
	</a>
	    </h4>
	  </div>
  <div id="collapseSeven" class="panel-collapse collapse">
    <div id="collapseSeven">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		  60%
		</div>
	      </div>
        <label for="heritageIndicators" class="control-label">Describe the relation of these indicators to the proposed development:</label><br />
        @if (isset($activity))
          {{ Form::textarea('heritageIndicators', $activity->heritageIndicators, array('class' => 'form-control', 'style' => 'width:100%')); }}
        @else
          {{ Form::textarea('heritageIndicators', '', array('class' => 'form-control', 'style' => 'width:100%')); }}
        @endif
	    <div class="table-responsive">
		  <table class="table table-condensed table-hover">
        <tr>
          <td>
          Is the site affected by Native Title/ First Nations consent requirements under law?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('nativeTitle', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->nativeTitle, array('class' => 'form-control')); }}
            @else
              {{ Form::select('nativeTitle', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('nativeTitleEntity', $activity->nativeTitleEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('nativeTitleEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a land use agreement or similar authority required from the Traditional Owners/ First Nations representatives? 
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('traditionalOwners', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->traditionalOwners, array('class' => 'form-control')); }}
            @else
              {{ Form::select('traditionalOwners', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('traditionalOwnersEntity', $activity->traditionalOwnersEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('traditionalOwnersEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a cultural heritage scout in compliance with Traditional Owners/ First Nations related legislation required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('heritageScout', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->heritageScout, array('class' => 'form-control')); }}
            @else
              {{ Form::select('heritageScout', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('heritageScoutEntity', $activity->heritageScoutEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('heritageScoutEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is the site affected by any other cultural heritage considerations?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('culturalHeritage', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->culturalHeritage, array('class' => 'form-control')); }}
            @else
              {{ Form::select('culturalHeritage', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('culturalHeritageEntity', $activity->culturalHeritageEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('culturalHeritageEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is any other form of cultural heritage scout required?
          </td>
          <td>
            @if (isset($activity))
              {{ Form::select('culturalHeritageScout', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $activity->culturalHeritageScout, array('class' => 'form-control')); }}
            @else
              {{ Form::select('culturalHeritageScout', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
            
          </td>
          <td>
            @if (isset($activity))
              {{ Form::text('culturalHeritageScoutEntity', $activity->culturalHeritageScoutEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
              {{ Form::text('culturalHeritageScoutEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
            
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
        <td colspan="4">
          <div class="form-group">
            <div>
               {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
            </div>
          </div>
        </td>
      </tr>
          </table>
	    </div>
	  </div>
	</div>
      </div>
@stop