@extends('/../layout')
@section('title')
Operations
@stop
@section('Operations')
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
		    Operational Waste
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
        {{ Form::open(array('action' => array('OperationController@update', $id), 'class' => 'form')) }}
        <label for="OpWasteComment" class="control-label">Describe the operation waste program activities to be implemented for this development:</label><br />
        @if (isset($waste))
        {{ Form::textarea('OpWasteComment', $waste->OpWasteComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @else
        {{ Form::textarea('OpWasteComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @endif
	      <div class="container-fluid" style="margin-left: -15px; margin-right: -15px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
           <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
 <!--            <form class="form" role="form">-->
		    <fieldset id="pOfficeWasteComposition">
		      <legend><span style="font-size: 16px;">Waste Composition</span></legend>
          <tr>
            <p style="font-size: 11px; color:red" >Note: The term "Target volume to be generated" could be defined as either the requirements imposed by a regulator or a self-imposed objective established by the developer/ owner of the project.  Given this, the term "Proposed volume to be generated ... " would be the same measurement for both "Target" and "Proposed" volumes where the self imposed "Target" is defined.</p>
            </tr>
		    <tr>
           <td>
			
		      </td>
		      <td>
			
		      </td>
		      <td style="text-align: center;">
			Paper / Cardboard
		      </td>
		      <td style="text-align: center;">
			Aluminum
		      </td>
		      <td style="text-align: center;">
			Glass
		      </td>
		      <td style="text-align: center;">
			Hazardous
		      </td>
		      <td style="text-align: center;">
			Non-Hazardous 
		      </td>
		      <td style="text-align: center;">
			Organic
		      </td>
          <td style="text-align: center;">
            Total
          </td>
		    </tr>
		    <tr>
		      <td>
			       Target volume
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentTargetO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->O_Tvolume_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentTargetO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('paperTargetO', $waste->O_Tvolume_Paper, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('paperTargetO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminumTargetO', $waste->O_Tvolume_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminumTargetO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassTargetO', $waste->O_Tvolume_Glass, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('glassTargetO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('hazardousTargetO', $waste->O_Tvolume_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousTargetO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('nonhazardousTargetO', $waste->O_Tvolume_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonhazardousTargetO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('organicTargetO', $waste->O_Tvolume_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicTargetO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalTargetO', $waste->totalTargetO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalTargetO', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
		    <tr>
          <td>
			       Proposed volume for landfill
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentProposedLandO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->O_PvolumeForLandfill_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentProposedLandO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
		     <td>
           @if (isset($waste))
            {{ Form::text('paperProposedO', $waste->O_PvolumeForLandfill_Paper, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('paperProposedO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminumProposedO', $waste->O_PvolumeForLandfill_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminumProposedO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassProposedO', $waste->O_PvolumeForLandfill_Glass, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('glassProposedO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('hazardousProposedO', $waste->O_PvolumeForLandfill_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousProposedO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('nonhazardousProposedO', $waste->O_PvolumeForLandfill_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonhazardousProposedO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('organicProposedO', $waste->O_PvolumeForLandfill_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicProposedO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalProposedLandO', $waste->totalProposedLandO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalProposedLandO', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
		    <tr>
		      <td>
			       Proposed volume for recycle / reuse
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentProposedRecycleO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->O_PvolumeForRecycle_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentProposedRecycleO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('paperProposedRecycleO', $waste->O_PvolumeForRecycle_Paper, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('paperProposedRecycleO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminumProposedRecycleO', $waste->O_PvolumeForRecycle_Aluminium, array('class' => 'form-control')); }}
            @else
            {{ Form::text('aluminumProposedRecycleO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassProposedRecycleO', $waste->O_PvolumeForRecycle_Glass, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('glassProposedRecycleO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('hazardousProposedRecycleO', $waste->O_PvolumeForRecycle_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousProposedRecycleO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('nonhazardousProposedRecycleO', $waste->O_PvolumeForRecycle_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonhazardousProposedRecycleO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('organicProposedRecycleO', $waste->O_PvolumeForRecycle_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicProposedRecycleO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalProposedRecycleO', $waste->totalProposedRecycleO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalProposedRecycleO', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
		    <tr>
		     <td>
			       Actual volume for landfill
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentActualLandfillO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->O_ActVolumeForLandfill_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentActualLandfillO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
		       <td>
             @if (isset($waste))
            {{ Form::text('paperActualLandfillO', $waste->O_ActVolumeForLandfill_Paper, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('paperActualLandfillO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminumActualLandfillO', $waste->O_ActVolumeForLandfill_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminumActualLandfillO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassActualLandfillO', $waste->O_ActVolumeForLandfill_Glass, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('glassActualLandfillO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('hazardousActualLandfillO', $waste->O_ActVolumeForLandfill_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousActualLandfillO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('nonhazardousActualLandfillO', $waste->O_ActVolumeForLandfill_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonhazardousActualLandfillO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('organicActualLandfillO', $waste->O_ActVolumeForLandfill_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicActualLandfillO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalActualLandO', $waste->totalActualLandO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalActualLandO', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
          <tr>
            <td>
			       Actual volume for recycle/reuse
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentActualRecycleO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->O_ActVolumeForRecycle_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentActualRecycleO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
		     <td>
           @if (isset($waste))
            {{ Form::text('paperActualRecycleO', $waste->O_ActVolumeForRecycle_Paper, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('paperActualRecycleO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminumActualRecycleO', $waste->O_ActVolumeForRecycle_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminumActualRecycleO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassActualRecycleO', $waste->O_ActVolumeForRecycle_Glass, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('glassActualRecycleO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('hazardousActualRecycleO', $waste->O_ActVolumeForRecycle_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousActualRecycleO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('nonhazardousActualRecycleO', $waste->O_ActVolumeForRecycle_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonhazardousActualRecycleO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('organicActualRecycleO', $waste->O_ActVolumeForRecycle_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicActualRecycleO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalActualRecycleO', $waste->totalActualRecycleO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalActualRecycleO', '', array('class' => 'form-control')); }}
            @endif 
          </td>
          </tr>
          <tr>
            <td>
			       Difference in volume for landfill
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentDifferenceLandfillO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons',
                  'Tonnes' => 'Tonnes'],
                  $waste->O_DifVolumeForLandfill_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentDifferenceLandfillO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons',
                  'Tonnes' => 'Tonnes'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('paperDifferenceLandfillO', $waste->O_DifVolumeForLandfill_Paper, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('paperDifferenceLandfillO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminumDifferenceLandfillO', $waste->O_DifVolumeForLandfill_Aluminium, array('class' => 'form-control')); }}
            @else
            {{ Form::text('aluminumDifferenceLandfillO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassDifferenceLandfillO', $waste->O_DifVolumeForLandfill_Glass, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('glassDifferenceLandfillO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('hazardousDifferenceLandfillO', $waste->O_DifVolumeForLandfill_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousDifferenceLandfillO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('nonhazardousDifferenceLandfillO', $waste->O_DifVolumeForLandfill_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonhazardousDifferenceLandfillO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('organicDifferenceLandfillO', $waste->O_DifVolumeForLandfill_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicDifferenceLandfillO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalDifLandO', $waste->totalDifLandO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalDifLandO', '', array('class' => 'form-control')); }}
            @endif 
          </td>
          </tr>
           <tr>
            <td>
			       Difference in volume for recycle/re-use
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentDifferenceO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons',
                  'Tonnes' => 'Tonnes'],
                  $waste->O_DifVolumeForRecycle_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentDifferenceO', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons',
                  'Tonnes' => 'Tonnes'],
                  null, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('paperDifferenceO', $waste->O_DifVolumeForRecycle_Paper, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('paperDifferenceO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminumDifferenceO', $waste->O_DifVolumeForRecycle_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminumDifferenceO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassDifferenceO', $waste->O_DifVolumeForRecycle_Glass, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('glassDifferenceO', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('hazardousDifferenceO', $waste->O_DifVolumeForRecycle_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousDifferenceO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('nonhazardousDifferenceO', $waste->O_DifVolumeForRecycle_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonhazardousDifferenceO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('organicDifferenceO', $waste->O_DifVolumeForRecycle_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicDifferenceO', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalDifRecycleO', $waste->totalDifRecycleO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalDifRecycleO', '', array('class' => 'form-control')); }}
            @endif 
          </td>
          </tr>
           @if ((isset($user)) && ($user['finance'] == 1) || ($user['admin'] == 1)) 
          <tr>
            <td><br />
            </td>
          </tr>
          <tr>
            <td colspan="9">
              <legend style="font-size:16px;">Cost Analysis</legend>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td style="text-align:center;">Paper / Cardboard</td>
            <td style="text-align:center;">Aluminium</td>
            <td style="text-align:center;">Glass</td>
            <td style="text-align:center;">Hazardous</td>
            <td style="text-align:center;">Non-Hazardous</td>
            <td style="text-align:center;">Organic</td>
            <td style="text-align:center;">Total</td>
          </tr>
          <tr>
            <td>
              Value (landfill)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('valueLandfillCurrencyO', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->valueLandfillCurrencyO, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('valueLandfillCurrencyO', [
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
              @if (isset($waste))
            {{ Form::text('valueLandfillPaperO', $waste->valueLandfillPaperO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillPaperO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillAluminiumO', $waste->valueLandfillAluminiumO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillAluminiumO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillGlassO', $waste->valueLandfillGlassO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillGlassO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillHazardousO', $waste->valueLandfillHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillNonHazardousO', $waste->valueLandfillNonHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillNonHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillOrganicO', $waste->valueLandfillOrganicO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillOrganicO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillTotalO', $waste->valueLandfillTotalO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillTotalO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Value (recycle)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('valueRecycleCurrencyO', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->valueRecycleCurrencyO, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('valueRecycleCurrencyO', [
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
              @if (isset($waste))
            {{ Form::text('valueRecyclePaperO', $waste->valueRecyclePaperO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecyclePaperO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleAluminiumO', $waste->valueRecycleAluminiumO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleAluminiumO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleGlassO', $waste->valueRecycleGlassO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleGlassO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleHazardousO', $waste->valueRecycleHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleNonHazardousO', $waste->valueRecycleNonHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleNonHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleOrganicO', $waste->valueRecycleOrganicO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleOrganicO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleTotalO', $waste->valueRecycleTotalO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleTotalO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Actual Value (landfill)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('actualLandfillCurrencyO', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->actualLandfillCurrencyO, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('actualLandfillCurrencyO', [
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
              @if (isset($waste))
            {{ Form::text('actualLandfillPaperO', $waste->actualLandfillPaperO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillPaperO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillAluminiumO', $waste->actualLandfillAluminiumO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillAluminiumO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillGlassO', $waste->actualLandfillGlassO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillGlassO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillHazardousO', $waste->actualLandfillHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillNonHazardousO', $waste->actualLandfillNonHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillNonHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillOrganicO', $waste->actualLandfillOrganicO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillOrganicO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillTotalO', $waste->actualLandfillTotalO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillTotalO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Actual Value (recycle)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('actualRecycleCurrencyO', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->actualRecycleCurrencyO, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('actualRecycleCurrencyO', [
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
              @if (isset($waste))
            {{ Form::text('actualRecyclePaperO', $waste->actualRecyclePaperO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecyclePaperO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleAluminiumO', $waste->actualRecycleAluminiumO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleAluminiumO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleGlassO', $waste->actualRecycleGlassO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleGlassO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleHazardousO', $waste->actualRecycleHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleNonHazardousO', $waste->actualRecycleNonHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleNonHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleOrganicO', $waste->actualRecycleOrganicO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleOrganicO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleTotalO', $waste->actualRecycleTotalO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleTotalO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Total Value Proposed
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('totalValuePropCurrencyO', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->totalValuePropCurrencyO, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('totalValuePropCurrencyO', [
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
              @if (isset($waste))
            {{ Form::text('totalValuePropPaperO', $waste->totalValuePropPaperO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropPaperO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropAluminiumO', $waste->totalValuePropAluminiumO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropAluminiumO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropGlassO', $waste->totalValuePropGlassO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropGlassO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropHazardousO', $waste->totalValuePropHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropNonHazardousO', $waste->totalValuePropNonHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropNonHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropOrganicO', $waste->totalValuePropOrganicO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropOrganicO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropTotalO', $waste->totalValuePropTotalO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropTotalO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Total Value Actual
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('totalValueActCurrencyO', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->totalValueActCurrencyO, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('totalValueActCurrencyO', [
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
              @if (isset($waste))
            {{ Form::text('totalValueActPaperO', $waste->totalValueActPaperO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActPaperO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActAluminiumO', $waste->totalValueActAluminiumO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActAluminiumO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActGlassO', $waste->totalValueActGlassO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActGlassO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActHazardousO', $waste->totalValueActHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActNonHazardousO', $waste->totalValueActNonHazardousO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActNonHazardousO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActOrganicO', $waste->totalValueActOrganicO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActOrganicO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActTotalO', $waste->totalValueActTotalO, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActTotalO', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          @endif
		  </fieldset>
      <tr>
        <td colspan="9">
          <div class="form-group">
            <div>
               {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
            </div>
          </div>
        </td>
      </tr>
		  </table>
	<!--	</form>-->
          <div>
            <div id="piechartOp"></div>
            <div id="pie-link-op"></div>
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
		<span class="badge pull-right">1</span>
		Operational waste diversion from landfill rates
	      </a>
	    </h4>
	  </div>
	  <div id="collapseTwo" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
		  10%
		</div>
	      </div>
        <label for="OpLandWasteComment" class="control-label">Comments:</label><br />
        @if (isset($waste))
        {{ Form::textarea('OpLandWasteComment', $waste->OpLandWasteComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @else
        {{ Form::textarea('OpLandWasteComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @endif
	      <div class="table-condensed">
	<!--	<form class="form" role="form">-->
		  <table class="table-condensed">
		    <fieldset id="wasteDiversion">
		      <legend><span>General</span></legend>
		      <tr>
			<td>
			  Will an operational waste management plan be written?
			<td>
        @if (isset($waste))
        {{ Form::select('demolitionPlanR3', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->O_WasteManagementPlan, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('demolitionPlanR3', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			  Will adequate access be provided for refuse collection vehicles?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('collectionVehicleAccess', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            $waste->AccessProvCollectVehicles, 
            ['class' => 'form-control']
          ) }}
        @else
        {{ Form::select('collectionVehicleAccess', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
        @endif
			  </td>
		      </tr>
		      <tr>
			<td>
			  Will landscape waste be collected?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('landscapeCollection', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->LandscapeWasteCollect, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('landscapeCollection', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			  Will landscape waste be treated in a suitable facility, e.g. composting?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('landscapeWasteTreatment', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->LandscapeWasteTreated, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('landscapeWasteTreatment', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			  Will at least one collection point will be provided to collect hazardous waste from the community?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('collectionPoint', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->CollectionPointHazardousWaste, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('collectionPoint', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			   Will adequately sized collection and storage waste facilities be provided?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteCollectionStorage', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->CollectionStorageWasteFacilities, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteCollectionStorage', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			  If appropriate, will adequately sized treatment waste treatment facilities be provided?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteTreatmentFacilities', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->TreatmentWasteFacilities, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteTreatmentFacilities', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		    </fieldset>
		  </table>
	<!--	</form>-->
	      </div>
	      <div class="table-condensed">
<!--		<form class="form" role="form">-->
		  <table class="table-condensed">
		    <fieldset id="nonResidential">
		      <legend><span>Non-residential</span></legend>
		      <tr>
			<td>
			  Will waste education be provided to staff, guests, students, etc., e.g. leaflets?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteEducationStaff', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->WasteEdNonResident, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteEducationStaff', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			  Will non-residential non-organic waste be stored and collected as separate streams?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('organicWasteStorage', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            $waste->NonResidentNonorganicWasteCollectedSep, 
            ['class' => 'form-control']
          ) }}
        @else
        {{ Form::select('organicWasteStorage', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
        @endif
			  </td>
		      </tr>
		      <tr>
			<td>
			  Will organic waste from all non-residential building uses be stored and collected separately?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('organicWasteCollection', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->NonResidentOrganicWasteCollectedSep, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('organicWasteCollection', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			  Will there be a facilities manager responsible for waste in the building?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteManager', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->NonResidentFacilityManager, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteManager', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		    </fieldset>
		  </table>
<!--		</form>-->
	      </div>
	      <div class="table-condensed">
<!--		<form class="form" role="form">-->
		  <table class="table-condensed">
		    <fieldset id="technicalFactorsNonResidential">
		      <legend><span>Technical Factors Non-Residential</span></legend>
		      <tr>
			<td>
			  Will non-organic recyclable waste be segregated manually on-site or mechanically in a recycling plant?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteSegregationManually', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->NonResidentNonorganicRecycleWasteSegManOrMechPlant, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteSegregationManually', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			  Will organic waste be composted, and if so will it be done on-site or off-site?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteComposted', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->NonResidentOrganicWasteComposted, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteComposted', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			  </td>
		      </tr>
		    </fieldset>
		  </table>
<!--		</form>-->
	      </div>
	      <div class="table-condensed">
<!--		<form class="form" role="form">-->
		  <table class="table-condensed">
		    <fieldset id="residential">
		      <legend><span>Residential</span></legend>
		      <tr>
			<td>
			  Will waste education be provided to residents, e.g. leaflets?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteEducationResident', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->WasteEdResident, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteEducationResident', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			  Will non-organic residential waste be stored and collected as separate streams?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteNonOrganicStorage', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->ResidentNonorganicWasteCollectedSep, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteNonOrganicStorage', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			  </td>
		      </tr>
		      <tr>
			<td>
        Will organic residential waste be stored and collected separately?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteOrganicStorage', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->ResidentOrganicWasteCollectedSep, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteOrganicStorage', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			  </td>
		      </tr>
		    </fieldset>
		  </table>
	<!--	</form>-->
	      </div>
	      <div class="table-responsive">
<!--		<form class="form" role="form">-->
		  <table class="table-condensed">
		    <fieldset id="residentialTechnicalFactors">
		      <legend><span>Residential Technical Factors</span></legend>
		      <tr>
			<td>
			  Will non-organic recyclable waste be segregated manually on-site or mechanically in a recycling plant?
			</td>
			<td>
        @if (isset($waste))
        {{ Form::select('wasteSegregationMechanically', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					$waste->ResidentNonorganicRecycleWasteSegManOrMechPlant, 
					['class' => 'form-control']
				) }}
        @else
        {{ Form::select('wasteSegregationMechanically', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
        @endif
			</td>
		      </tr>
		      <tr>
			<td>
			  Will organic waste be composted, and if so will it be done on-site or off-site?
			</td>
        <td>
          @if (isset($waste))
        {{ Form::select('wasteCompostedOnsite', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            $waste->ResidentOrganicWasteComposted, 
            ['class' => 'form-control']
          ) }}
        @else
        {{ Form::select('wasteCompostedOnsite', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
        @endif
			  </td>
		      </tr>
		    </fieldset>
       <tr>
        <td colspan="2">
          <div class="form-group">
            <div>
               {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
            </div>
          </div>
        </td>
      </tr>
		  </table>
      
<!--		</form>-->
	      </div>
	    </div>
	  </div>
	</div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript" src="../js/graphs.js"></script>
@stop