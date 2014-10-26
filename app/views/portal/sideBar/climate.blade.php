@extends('/../layout')
@section('title')
Climate
@stop
@section('climate')
class="active"
@stop
@section('body')
<div class="LearnMore">
  <h4>Learn More</h4>
  <p>
    <!-- Change Learn more here -->
    
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.
<br /><br />
    {{ HTML::image('images/reference_scale.jpg', 'Reference Scale', array('style' => 'width:100%;')) }}

  
  <!-- End Change Learn more here -->
  </p>
</div>
	  <div class="panel panel-default" style="margin-top: 20px;">
	    <div class="panel-heading">
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#overview" href="#collapseOne">
		  <span class="badge pull-right">1</span>
		    Energy Management - Community Strategies for Passive Cooling and Heating
		</a>
	      </h4>
	    </div>
	  <div id="collapseOne" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
		  5%
		</div>
	      </div>
       {{ Form::open(array('action' => array('ClimateController@update', $id), 'class' => 'form')) }}
        <label for="ClimateComment" class="control-label">Describe the passive cooling and heating program that is to be implemented for this development:</label><br />
        @if (isset($climate))
        {{ Form::textarea('ClimateComment', $climate->ClimateComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @else
        {{ Form::textarea('ClimateComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @endif
        <div class="container-fluid" style="margin-left: -15px; margin-right: -15px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
<!--		<form class="form" role="form">-->
		  <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
		    <fieldset id="pOfficeWasteComposition">
		      <legend><span style="font-size: 16px;">Community Strategies for Passive Cooling and Heating - Design</span></legend>
          <tr>
            <p style="font-size: 11px; color:red" >Note: The term "Target volume to be generated" could be defined as either the requirements imposed by a regulator or a self-imposed objective established by the developer/ owner of the project.  Given this, the term "Proposed volume to be generated ... " would be the same measurement for both "Target" and "Proposed" volumes where the self imposed "Target" is defined.</p>
            </tr>
		    <tr>
           <td colspan="3">
			
		      </td>
		      <td style="text-align: center;">
			Target
		      </td>
		      <td style="text-align: center;">
			Proposed
		      </td>
		      <td style="text-align: center;">
			Actual
		      </td>
		      <td style="text-align: center;">
			Gap
		      </td>
		     
        <tr>
		      <td colspan="3">
			       Enter the number of passive cooling strategies listed that have been incorporated into the community design.
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('coolingStratTarget', $climate->coolingStratTarget, array('class' => 'form-control')); }}
            @else
            {{ Form::text('coolingStratTarget', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('coolingStratProposed', $climate->coolingStratProposed, array('class' => 'form-control')); }}
            @else
            {{ Form::text('coolingStratProposed', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('coolingStratActual', $climate->coolingStratActual, array('class' => 'form-control')); }}
            @else
            {{ Form::text('coolingStratActual', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('coolingStratGap', $climate->coolingStratGap, array('class' => 'form-control')); }}
            @else
            {{ Form::text('coolingStratGap', '', array('class' => 'form-control')); }}
            @endif 
		      </td>
		    </tr>
        <tr>
		      <td colspan="3">
			       Enter the number of passive heating strategies listed that have been incorporated into the community design.
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('heatingStratTarget', $climate->heatingStratTarget, array('class' => 'form-control')); }}
            @else
            {{ Form::text('heatingStratTarget', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('heatingStratProposed', $climate->heatingStratProposed, array('class' => 'form-control')); }}
            @else
            {{ Form::text('heatingStratProposed', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('heatingStratActual', $climate->heatingStratActual, array('class' => 'form-control')); }}
            @else
            {{ Form::text('heatingStratActual', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('heatingStratGap', $climate->heatingStratGap, array('class' => 'form-control')); }}
            @else
            {{ Form::text('heatingStratGap', '', array('class' => 'form-control')); }}
            @endif 
		      </td>
		    </tr>
        <tr>
		      <td colspan="3">
			       Enter the percentage of community hardscape (excluding roads) that has utilised strategies to reduce the build up of heat.
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('comHardscapeHeatTarget', $climate->comHardscapeHeatTarget, array('class' => 'form-control')); }}
            @else
            {{ Form::text('comHardscapeHeatTarget', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('comHardscapeHeatProposed', $climate->comHardscapeHeatProposed, array('class' => 'form-control')); }}
            @else
            {{ Form::text('comHardscapeHeatProposed', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('comHardscapeHeatActual', $climate->comHardscapeHeatActual, array('class' => 'form-control')); }}
            @else
            {{ Form::text('comHardscapeHeatActual', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('comHardscapeHeatGap', $climate->comHardscapeHeatGap, array('class' => 'form-control')); }}
            @else
            {{ Form::text('comHardscapeHeatGap', '', array('class' => 'form-control')); }}
            @endif 
		      </td>
		    </tr>
     <!--   <tr>
          <td><br /></td>
        </tr>-->
        </fieldset>
       </table>
          <br />
       <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
         <legend><span style="font-size: 16px;">Technical Requirements</span></legend>
          <tr>
            <td colspan="3">
              
            </td>
            <td style="text-align: center;">
              Required
            </td>
            <td style="text-align: center;">
              Document Title and Revision / <br />Drawing Number, Title and Revision
            </td>
            <td style="text-align: center;">
              Responsible Party
            </td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3">
              Annual weather conditions for the site including solar azimuth and altitude,<br /> solar radiation, prevailing wind direction, wind speeds, wind temperatures<br /> and humidity have been considered in the design of the proposed development.
            </td>
            <td>
              @if (isset($climate))
            {{ Form::select('annualWeatherConReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->annualWeatherConReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('annualWeatherConReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('annualWeatherConDoc', $climate->annualWeatherConDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('annualWeatherConDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('annualWeatherConParty', $climate->annualWeatherConParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('annualWeatherConParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
          </tr>
         <tr>
          <td colspan="3">
            Site map illustrating the annual onsite wind conditions.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('siteMapAnnualWeatherConReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->siteMapAnnualWeatherConReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('siteMapAnnualWeatherConReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('siteMapAnnualWeatherConDoc', $climate->siteMapAnnualWeatherConDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('siteMapAnnualWeatherConDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('siteMapAnnualWeatherConParty', $climate->siteMapAnnualWeatherConParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('siteMapAnnualWeatherConParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Conceptual solar and wind analysis report including studies for all adopted <br /> strategies and evidence of how the community design promotes shading and wind <br /> flows for passive cooling and improved pedestrian comfort.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('ConSolarWindAnalysisReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->ConSolarWindAnalysisReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('ConSolarWindAnalysisReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('ConSolarWindAnalysisDoc', $climate->ConSolarWindAnalysisDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('ConSolarWindAnalysisDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('ConSolarWindAnalysisParty', $climate->ConSolarWindAnalysisParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('ConSolarWindAnalysisParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Site plan illustrating how the adopted strategies will be implemented.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('sitePlanAdoptStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->sitePlanAdoptStratReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('sitePlanAdoptStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('sitePlanAdoptStratDoc', $climate->sitePlanAdoptStratDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('sitePlanAdoptStratDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('sitePlanAdoptStratParty', $climate->sitePlanAdoptStratParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('sitePlanAdoptStratParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Conceptual shadow effect on neighbouring properties is completed and provided <br />for regulator and community assessment (if required).
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('conShadowEffectReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->conShadowEffectReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('conShadowEffectReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('conShadowEffectDoc', $climate->conShadowEffectDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conShadowEffectDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('conShadowEffectParty', $climate->conShadowEffectParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conShadowEffectParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
          </table>
          <br />
          <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
         <legend><span style="font-size: 16px;">Advanced Analysis Techniques</span></legend>
          <tr>
            <td colspan="3">
              
            </td>
            <td style="text-align: center;">
              Required
            </td>
            <td style="text-align: center;">
              Document Title and Revision / <br />Drawing Number, Title and Revision
            </td>
            <td style="text-align: center;">
              Responsible Party
            </td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3">
              Narrative of the advanced solar and wind analysis describing how the results <br /> informed the final community design.
            </td>
            <td>
              @if (isset($climate))
            {{ Form::select('advSolarWindAnalysisReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->advSolarWindAnalysisReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('advSolarWindAnalysisReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('advSolarWindAnalysisDoc', $climate->advSolarWindAnalysisDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('advSolarWindAnalysisDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('advSolarWindAnalysisParty', $climate->advSolarWindAnalysisParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('advSolarWindAnalysisParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
 
		      </td>
          </tr>
         <tr>
          <td colspan="3">
            Technical report containing outputs from the advanced solar and wind modeling <br />analysis for all adopted strategies, demonstrating an improved level of performance.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('advSolarWindOutReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->advSolarWindOutReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('advSolarWindOutReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('advSolarWindOutDoc', $climate->advSolarWindOutDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('advSolarWindOutDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('advSolarWindOutParty', $climate->advSolarWindOutParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('advSolarWindOutParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Site plan indicating how the strategies will be implemented for passive cooling <br /> and heating, and landscaping.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('sitePlanHeatCoolStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->sitePlanHeatCoolStratReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('sitePlanHeatCoolStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('sitePlanHeatCoolStratDoc', $climate->sitePlanHeatCoolStratDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('sitePlanHeatCoolStratDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('sitePlanHeatCoolStratParty', $climate->sitePlanHeatCoolStratParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('sitePlanHeatCoolStratParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            As-built street sections illustrating urban heat reduction strategies.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('streetUrbanHeatReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->streetUrbanHeatReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('streetUrbanHeatReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('streetUrbanHeatDoc', $climate->streetUrbanHeatDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('streetUrbanHeatDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('streetUrbanHeatParty', $climate->streetUrbanHeatParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('streetUrbanHeatParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
       
		      </td>
         </tr>
          </table>
          <br />
          <!-- Next spot -->
       <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
         <legend><span style="font-size: 16px;">Regulator requirements</span></legend>
          <tr>
            <td colspan="3">
              
            </td>
            <td style="text-align: center;">
              Required
            </td>
            <td style="text-align: center;">
              Document Title and Revision / <br />Drawing Number, Title and Revision
            </td>
            <td style="text-align: center;">
              Responsible Party
            </td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3">
              Does the proposed development meet and/or exceed national design guidelines for <br />"green" buiding ratings/ "green" infrastructure targets.
            </td>
            <td>
              @if (isset($climate))
            {{ Form::select('PropDevGreenGuideReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->PropDevGreenGuideReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('PropDevGreenGuideReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('PropDevGreenGuideDoc', $climate->PropDevGreenGuideDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PropDevGreenGuideDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('PropDevGreenGuideParty', $climate->PropDevGreenGuideParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PropDevGreenGuideParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
          </tr>
         <tr>
          <td colspan="3">
            Does the Local Government/ Regional Government Planning Systems define design guidelines?
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('GovPlanDefGuideReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->GovPlanDefGuideReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('GovPlanDefGuideReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('GovPlanDefGuideDoc', $climate->GovPlanDefGuideDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('GovPlanDefGuideDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('GovPlanDefGuideParty', $climate->GovPlanDefGuideParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('GovPlanDefGuideParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Does the Local Government/ Regional Government Planning Systems define infrastructure charging regimes?
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('GovPlanDefInfraReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->GovPlanDefInfraReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('GovPlanDefInfraReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('GovPlanDefInfraDoc', $climate->GovPlanDefInfraDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('GovPlanDefInfraDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('GovPlanDefInfraParty', $climate->GovPlanDefInfraParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('GovPlanDefInfraParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Do these guidelines provide incentives for energy and waste efficient buildings?
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('IncEnergyWasteEffReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->IncEnergyWasteEffReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('IncEnergyWasteEffReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('IncEnergyWasteEffDoc', $climate->IncEnergyWasteEffDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('IncEnergyWasteEffDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('IncEnergyWasteEffParty', $climate->IncEnergyWasteEffParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('IncEnergyWasteEffParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
          If yes to incentives, are there monetary or development incentives that assist in <br />the promotion of efficient buildings/ developments?
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('MonDevIncAssistReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->MonDevIncAssistReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('MonDevIncAssistReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('MonDevIncAssistDoc', $climate->MonDevIncAssistDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('MonDevIncAssistDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('MonDevIncAssistParty', $climate->MonDevIncAssistParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('MonDevIncAssistParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
          Does the proposed development meet or exceed the guidelines to allow incentive <br /> opportunities to be implemented?
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('PropDevguideIncReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->PropDevguideIncReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('PropDevguideIncReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('PropDevguideIncDoc', $climate->PropDevguideIncDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PropDevguideIncDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('PropDevguideIncParty', $climate->PropDevguideIncParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PropDevguideIncParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
          If the monetary incentives are available, what is the value of <br /> these incentives for this development?
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('MonIncValueDevCurrency', [
                  'N/A' => 'N/A', 
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $climate->MonIncValueDevCurrency, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('MonIncValueDevCurrency', [
                  'N/A' => 'N/A', 
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
           <td>
            @if (isset($climate))
            {{ Form::text('MonIncValueDev', $climate->MonIncValueDev, array('class' => 'form-control')); }}
            @else
            {{ Form::text('MonIncValueDev', '', array('class' => 'form-control')); }}
            @endif
		      </td>
         </tr>
         <tr>
         <td colspan="3">
          If other development incentives are available, how are these applied <br /> to the proposed development?
          </td>
          <td colspan="2">
            @if (isset($climate))
            {{ Form::text('OtherDevIncApp', $climate->OtherDevIncApp, array('class' => 'form-control')); }}
            @else
            {{ Form::text('OtherDevIncApp', '', array('class' => 'form-control')); }}
            @endif
		      </td>
         </tr>
         <tr>
           <td colspan="7">
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

<!------------------------------------------------------------------------------------------------------------------------------------------->

<div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#overview" href="#collapseTwo">
		  <span class="badge pull-right">1</span>
		     Community Strategies for Passive Cooling and Heating - Construction
		</a>
	      </h4>
	    </div>
	  <div id="collapseTwo" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
		  5%
		</div>
        </div>
          
          <div class="container-fluid" style="margin-left: -15px; margin-right: -15px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">

		  <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
		    <fieldset id="pOfficeWasteComposition">
		      <legend><span style="font-size: 16px;">Submission Requirements</span></legend>
          <tr>
            <td colspan="3" style="font-size:14px;">
              Conceptual Solar and Wind Analysis
            </td>
            <td style="text-align: center;">
              Achieved <br />&amp; <br />Submitted?
            </td>
            <td style="text-align: center;">
              Document Title and Revision / <br />Drawing Number, Title and Revision
            </td>
            <td style="text-align: center;">
              Responsible Party
            </td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3">
              Revised documentation as per design rating including as-built site plans illustrating <br />how the adopted strategies were integrated into the design
            </td>
            <td>
              @if (isset($climate))
            {{ Form::select('DocRateAdoptStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->DocRateAdoptStratReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('DocRateAdoptStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('DocRateAdoptStratDoc', $climate->DocRateAdoptStratDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('DocRateAdoptStratDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('DocRateAdoptStratParty', $climate->DocRateAdoptStratParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('DocRateAdoptStratParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
		      </td>
          </tr>
         <tr>
          <td colspan="3">
            Photographic evidence of linear parks or vegetated corridors, shelter belts and <br />wind towers where applicable
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('PhotoEvParkReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->PhotoEvParkReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('PhotoEvParkReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('PhotoEvParkDoc', $climate->PhotoEvParkDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PhotoEvParkDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('PhotoEvParkParty', $climate->PhotoEvParkParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PhotoEvParkParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
		      </td>
         </tr>
          <tr>
            <td>
              <br />
            </td>
          </tr>
         <tr>
           <td colspan="7" style="font-size:14px;">
             Advanced Analysis Techniques			
           </td>
          </tr>
          <tr>
         <td colspan="3">
            Revised documentation as per design rating including as-built site plans illustrating <br />how the adopted strategies were integrated into the design.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('RevDocSitePlanStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->RevDocSitePlanStratReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('RevDocSitePlanStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('RevDocSitePlanStratDoc', $climate->RevDocSitePlanStratDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('RevDocSitePlanStratDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('RevDocSitePlanStratParty', $climate->RevDocSitePlanStratParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('RevDocSitePlanStratParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Photographic evidence of alternative passive cooling strategies where applicable.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('PhotoEvAltCoolStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->PhotoEvAltCoolStratReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('PhotoEvAltCoolStratReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('PhotoEvAltCoolStratDoc', $climate->PhotoEvAltCoolStratDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PhotoEvAltCoolStratDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('PhotoEvAltCoolStratParty', $climate->PhotoEvAltCoolStratParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PhotoEvAltCoolStratParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
           Plan drawings highlighting the extent of all hardscape surfaces, overlaid with <br />clearly identifiable 'hashed' areas denoting the coverage of the various measures.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('DrawHardSurfHashReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->DrawHardSurfHashReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('DrawHardSurfHashReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('DrawHardSurfHashDoc', $climate->DrawHardSurfHashDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('DrawHardSurfHashDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('DrawHardSurfHashParty', $climate->DrawHardSurfHashParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('DrawHardSurfHashParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
          Typical street sections illustrating urban heat reduction strategies.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('StreetSectUrbanHeadRedReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->StreetSectUrbanHeadRedReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('StreetSectUrbanHeadRedReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('StreetSectUrbanHeadRedDoc', $climate->StreetSectUrbanHeadRedDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('StreetSectUrbanHeadRedDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('StreetSectUrbanHeadRedParty', $climate->StreetSectUrbanHeadRedParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('StreetSectUrbanHeadRedParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
		      </td>
         </tr>
          </fieldset>
          </table>
            <br />
             <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
         <legend><span style="font-size: 16px;">Technical Factors</span></legend>
          <tr>
            <td colspan="3">
              
            </td>
            <td style="text-align: center;">
              Required
            </td>
            <td style="text-align: center;">
              Document Title and Revision / <br />Drawing Number, Title and Revision
            </td>
            <td style="text-align: center;">
              Responsible Party
            </td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3">
              Calculations from Community Energy Strategy confirming the total annual energy consumption <br /> of all community infrastructure.
            </td>
            <td>
              @if (isset($climate))
            {{ Form::select('CalcComEnStratAnConsReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->CalcComEnStratAnConsReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('CalcComEnStratAnConsReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('CalcComEnStratAnConsDoc', $climate->CalcComEnStratAnConsDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('CalcComEnStratAnConsDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('CalcComEnStratAnConsParty', $climate->CalcComEnStratAnConsParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('CalcComEnStratAnConsParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
          </tr>
         <tr>
          <td colspan="3">
            Building Guidelines to comply with legislated requirements.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('BuildGuideLegRequireReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->BuildGuideLegRequireReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('BuildGuideLegRequireReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('BuildGuideLegRequireDoc', $climate->BuildGuideLegRequireDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('BuildGuideLegRequireDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('BuildGuideLegRequireParty', $climate->BuildGuideLegRequireParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('BuildGuideLegRequireParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Demonstrate the mechanism for ensuring compliance with building guidelines.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('DemMechComGuideReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->DemMechComGuideReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('DemMechComGuideReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('DemMechComGuideDoc', $climate->DemMechComGuideDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('DemMechComGuideDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('DemMechComGuideParty', $climate->DemMechComGuideParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('DemMechComGuideParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Draft of building guidelines highlighting energy model outputs and iterative steps in optimising <br/>the designs in order to achieve the targeted reductions have been developed <br />and submitted. At a minimum this should include: <br />
- Design drawings and model screenshots illustrating representative buildings. <br />
- Details on the baseline and proposed building elements including: building envelope, lighting, <br />HVAC, service water heating and receptacle and process loads. <br />
- Summary table highlighting the most effective strategies.<br />
- Energy consumption of proposed and baseline buildings confirming the percentage reduction.
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('EnOutOpTarRedReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->EnOutOpTarRedReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('EnOutOpTarRedReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('EnOutOpTarRedDoc', $climate->EnOutOpTarRedDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('EnOutOpTarRedDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('EnOutOpTarRedParty', $climate->EnOutOpTarRedParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('EnOutOpTarRedParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
          </table>
            <br />
            <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
         <legend><span style="font-size: 16px;">Regulator requirements</span></legend>
          <tr>
            <td colspan="3">
              
            </td>
            <td style="text-align: center;">
              Required
            </td>
            <td style="text-align: center;">
              Document Title and Revision / <br />Drawing Number, Title and Revision
            </td>
            <td style="text-align: center;">
              Responsible Party
            </td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3">
              Has the proposed development met and/or exceeded national design guidelines for "green" <br /> buiding ratings/ "green" infrastructure targets?
            </td>
            <td>
              @if (isset($climate))
            {{ Form::select('PropDevNatDesGuideGreenReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->PropDevNatDesGuideGreenReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('PropDevNatDesGuideGreenReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('PropDevNatDesGuideGreenDoc', $climate->PropDevNatDesGuideGreenDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PropDevNatDesGuideGreenDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('PropDevNatDesGuideGreenParty', $climate->PropDevNatDesGuideGreenParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('PropDevNatDesGuideGreenParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
          </tr>
         <tr>
          <td colspan="3">
            Has the development met Local Government/ Regional Government Planning Systems define <br/>design guidelines for energy and water efficient buildings/ developments/ infrastructure?
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('GovPlanSysDesGuideReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->GovPlanSysDesGuideReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('GovPlanSysDesGuideReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('GovPlanSysDesGuideDoc', $climate->GovPlanSysDesGuideDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('GovPlanSysDesGuideDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('GovPlanSysDesGuideParty', $climate->GovPlanSysDesGuideParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('GovPlanSysDesGuideParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            Local Government/ Regional Government Planning Systems define infrastructure charging /<br /> incentive regimes for energy and water efficient buildings/ developments/ infrastructure?
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('GovPlanSysInfraCharIncReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  $climate->GovPlanSysInfraCharIncReq, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('GovPlanSysInfraCharIncReq', [
                  'N/A' => 'N/A', 
                  'Yes' => 'Yes', 
                  'No' => 'No'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('GovPlanSysInfraCharIncDoc', $climate->GovPlanSysInfraCharIncDoc, array('class' => 'form-control')); }}
            @else
            {{ Form::text('GovPlanSysInfraCharIncDoc', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($climate))
            {{ Form::text('GovPlanSysInfraCharIncParty', $climate->GovPlanSysInfraCharIncParty, array('class' => 'form-control')); }}
            @else
            {{ Form::text('GovPlanSysInfraCharIncParty', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
		      </td>
         </tr>
         <tr>
         <td colspan="3">
            If the monetary incentives are available, what was the total value of these incentives <br />for this development in agreement with the regulator?
          </td>
          <td>
            @if (isset($climate))
            {{ Form::select('TotValIncDevAgreeCurrency', [
                  'N/A' => 'N/A', 
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $climate->TotValIncDevAgreeCurrency, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('TotValIncDevAgreeCurrency', [
                  'N/A' => 'N/A', 
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
          <td>
            @if (isset($climate))
            {{ Form::text('TotValIncDevAgreeValue', $climate->TotValIncDevAgreeValue, array('class' => 'form-control')); }}
            @else
            {{ Form::text('TotValIncDevAgreeValue', '', array('class' => 'form-control')); }}
            @endif
		      </td>
         </tr>
          <tr>
         <td colspan="3">
          If the monetary incentives are available, how were these incentives considered and <br />implemented for this development in agreement with the regulator?
          </td>
          <td colspan="2">
            @if (isset($climate))
            {{ Form::text('MonIncImpDevReg', $climate->MonIncImpDevReg, array('class' => 'form-control')); }}
            @else
            {{ Form::text('MonIncImpDevReg', '', array('class' => 'form-control')); }}
            @endif
		      </td>
         </tr>
          <tr>
         <td colspan="3">
          If other development incentives are available, how were these incentives considered and <br />implented for this development in agreement with the regulator?
          </td>
          <td colspan="2">
            @if (isset($climate))
            {{ Form::text('OtherIncImpDevReg', $climate->OtherIncImpDevReg, array('class' => 'form-control')); }}
            @else
            {{ Form::text('OtherIncImpDevReg', '', array('class' => 'form-control')); }}
            @endif
		      </td>
         </tr>
          <tr>
           <td colspan="7">
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