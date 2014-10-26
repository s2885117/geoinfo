@extends('/../layout')
@section('title')
Transport
@stop
@section('transport')
class="active"
@stop
@section('body')
<h2 style="margin-top: 80px; text-align:center;">Under Construction</h2>
<div>
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
		    Demolition Waste
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
        <label for="DemWasteComment" class="control-label">Describe the demolition waste program and its objectives to be implemented for this development:</label><br />
        @if (isset($waste))
        {{ Form::textarea('DemWasteComment', $waste->DemWasteComment, array('class' => 'form-control', 'style' => 'width:100%')); }}
        @else
        {{ Form::textarea('DemWasteComment', '', array('class' => 'form-control', 'style' => 'width:100%')); }}
        @endif
	      <div class="container-fluid" style="margin-left: -15px; margin-right: -15px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
<!--		<form class="form" role="form">-->
		  <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
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
			Concrete
		      </td>
		      <td style="text-align: center;">
			Steel
		      </td>
		      <td style="text-align: center;">
			Aluminium
		      </td>
		      <td style="text-align: center;">
			Copper
		      </td>
		      <td style="text-align: center;">
			Timber
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
			Conduit
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
            {{ Form::select('unitMessuramentTargetD', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                   $waste->D_Tvolume_Units,
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentTargetD', [
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
            {{ Form::text('concreteTargetD', $waste->D_Tvolume_Concrete, array('class' => 'form-control')); }}
                  @else
                  {{ Form::text('concreteTargetD', '', array('class' => 'form-control')); }}
                  @endif 
		      </td>
		      <td>       
            @if (isset($waste))
            {{ Form::text('steelTargetD', $waste->D_Tvolume_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelTargetD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumTargetD', $waste->D_Tvolume_Aluminium, array('class' => 'form-control')); }} 
            @else
             {{ Form::text('aluminiumTargetD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperTargetD', $waste->D_Tvolume_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperTargetD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberTargetD', $waste->D_Tvolume_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberTargetD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassTargetD', $waste->D_Tvolume_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassTargetD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousTargetD', $waste->D_Tvolume_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousTargetD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardousTargetD', $waste->D_Tvolume_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardousTargetD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicTargetD', $waste->D_Tvolume_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicTargetD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitTargetD', $waste->D_Tvolume_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitTargetD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalTargetD', $waste->totalTargetD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalTargetD', '', array('class' => 'form-control')); }}
            @endif 
		      </td>
		    </tr>
		    <tr>
          <td>
			       Proposed volume for landfill
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentProposedLandD', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->D_PvolumeForLandfill_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentProposedLandD', [
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
            {{ Form::text('concreteProposedLandD', $waste->D_PvolumeForLandfill_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteProposedLandD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelProposedLandD', $waste->D_PvolumeForLandfill_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelProposedLandD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumProposedLandD', $waste->D_PvolumeForLandfill_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumProposedLandD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperProposedLandD', $waste->D_PvolumeForLandfill_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperProposedLandD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberProposedLandD', $waste->D_PvolumeForLandfill_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberProposedLandD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassProposedLandD', $waste->D_PvolumeForLandfill_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassProposedLandD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousProposedLandD', $waste->D_PvolumeForLandfill_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousProposedLandD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardousProposedLandD', $waste->D_PvolumeForLandfill_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardousProposedLandD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicProposedLandD', $waste->D_PvolumeForLandfill_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicProposedLandD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitProposedLandD', $waste->D_PvolumeForLandfill_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitProposedLandD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalProposedLandD', $waste->totalProposedLandD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalProposedLandD', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
		    <tr>
		      <td>
			       Proposed volume for recycle / reuse
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentProposedRecycleD', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->D_PvolumeForRecycle_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentProposedRecycleD', [
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
            {{ Form::text('concreteProposedRecycleD', $waste->D_PvolumeForRecycle_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteProposedRecycleD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelProposedRecycleD', $waste->D_PvolumeForRecycle_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelProposedRecycleD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumProposedRecycleD', $waste->D_PvolumeForRecycle_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumProposedRecycleD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperProposedRecycleD', $waste->D_PvolumeForRecycle_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperProposedRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberProposedRecycleD', $waste->D_PvolumeForRecycle_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberProposedRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassProposedRecycleD', $waste->D_PvolumeForRecycle_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassProposedRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousProposedRecycleD', $waste->D_PvolumeForRecycle_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousProposedRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardousProposedRecycleD', $waste->D_PvolumeForRecycle_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardousProposedRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicProposedRecycleD', $waste->D_PvolumeForRecycle_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicProposedRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitProposedRecycleD', $waste->D_PvolumeForRecycle_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitProposedRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalProposedRecycleD', $waste->totalProposedRecycleD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalProposedRecycleD', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
		    <tr>
		     <td>
			       Actual volume for landfill
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentActualLandfillD', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->D_ActVolumeForLandfill_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentActualLandfillD', [
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
            {{ Form::text('concreteActualLandfillD', $waste->D_ActVolumeForLandfill_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteActualLandfillD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelActualLandfillD', $waste->D_ActVolumeForLandfill_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelActualLandfillD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumActualLandfillD', $waste->D_ActVolumeForLandfill_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumActualLandfillD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperActualLandfillD', $waste->D_ActVolumeForLandfill_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperActualLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberActualLandfillD', $waste->D_ActVolumeForLandfill_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberActualLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassActualLandfillD', $waste->D_ActVolumeForLandfill_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassActualLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousActualLandfillD', $waste->D_ActVolumeForLandfill_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousActualLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardouActualLandfillD', $waste->D_ActVolumeForLandfill_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardouActualLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicActualLandfillD', $waste->D_ActVolumeForLandfill_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicActualLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitActualLandfillD', $waste->D_ActVolumeForLandfill_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitActualLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalActualLandD', $waste->totalActualLandD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalActualLandD', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
          <tr>
            <td>
			       Actual volume for recycle/reuse
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentActualRecycleD', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->D_ActVolumeForRecycle_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentActualRecycleD', [
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
            {{ Form::text('concreteActualRecycleD', $waste->D_ActVolumeForRecycle_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteActualRecycleD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelActualRecycleD', $waste->D_ActVolumeForRecycle_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelActualRecycleD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumActualRecycleD', $waste->D_ActVolumeForRecycle_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumActualRecycleD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperActualRecycleD', $waste->D_ActVolumeForRecycle_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperActualRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberActualRecycleD', $waste->D_ActVolumeForRecycle_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberActualRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassActualRecycleD', $waste->D_ActVolumeForRecycle_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassActualRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousActualRecycleD', $waste->D_ActVolumeForRecycle_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousActualRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardouActualRecycleD', $waste->D_ActVolumeForRecycle_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardouActualRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicActualRecycleD', $waste->D_ActVolumeForRecycle_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicActualRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitActualRecycleD', $waste->D_ActVolumeForRecycle_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitActualRecycleD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalActualRecycleD', $waste->totalActualRecycleD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalActualRecycleD', '', array('class' => 'form-control')); }}
            @endif 
          </td>
          </tr>
          <tr>
            <td>
			       Difference in volume for landfill
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentDifferenceLandfillD', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons',
                  'Tonnes' => 'Tonnes'],
                  $waste->D_DifVolumeForLandfill_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentDifferenceLandfillD', [
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
            {{ Form::text('concreteDifferenceLandfillD', $waste->D_DifVolumeForLandfill_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteDifferenceLandfillD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelDifferenceLandfillD', $waste->D_DifVolumeForLandfill_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelDifferenceLandfillD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumDifferenceLandfillD', $waste->D_DifVolumeForLandfill_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumDifferenceLandfillD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperDifferenceLandfillD', $waste->D_DifVolumeForLandfill_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperDifferenceLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberDifferenceLandfillD', $waste->D_DifVolumeForLandfill_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberDifferenceLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassDifferenceLandfillD', $waste->D_DifVolumeForLandfill_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassDifferenceLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousDifferenceLandfillD', $waste->D_DifVolumeForLandfill_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousDifferenceLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardouDifferenceLandfillD', $waste->D_DifVolumeForLandfill_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardouDifferenceLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicDifferenceLandfillD', $waste->D_DifVolumeForLandfill_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicDifferenceLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitDifferenceLandfillD', $waste->D_DifVolumeForLandfill_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitDifferenceLandfillD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalDifLandD', $waste->totalDifLandD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalDifLandD', '', array('class' => 'form-control')); }}
            @endif 
          </td>
          </tr>
           <tr>
            <td>
			       Difference in volume for recycle/re-use
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentDifferenceD', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons',
                  'Tonnes' => 'Tonnes'],
                  $waste->D_DifVolumeForRecycle_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentDifferenceD', [
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
            {{ Form::text('concreteDifferenceD', $waste->D_DifVolumeForRecycle_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteDifferenceD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelDifferenceD', $waste->D_DifVolumeForRecycle_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelDifferenceD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumDifferenceD', $waste->D_DifVolumeForRecycle_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumDifferenceD', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperDifferenceD', $waste->D_DifVolumeForRecycle_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperDifferenceD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberDifferenceD', $waste->D_DifVolumeForRecycle_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberDifferenceD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassDifferenceD', $waste->D_DifVolumeForRecycle_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassDifferenceD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousDifferenceD', $waste->D_DifVolumeForRecycle_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousDifferenceD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardouDifferenceD', $waste->D_DifVolumeForRecycle_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardouDifferenceD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicDifferenceD', $waste->D_DifVolumeForRecycle_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicDifferenceD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitDifferenceD', $waste->D_DifVolumeForRecycle_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitDifferenceD', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalDifRecycleD', $waste->totalDifRecycleD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalDifRecycleD', '', array('class' => 'form-control')); }}
            @endif 
          </td>
          </tr>
          <tr>
            <td><br />
            </td>
          </tr>
          <tr>
            <td colspan="13">
              <legend style="font-size:16px;">Cost Analysis</legend>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td style="text-align:center;">Concrete</td>
            <td style="text-align:center;">Steel</td>
            <td style="text-align:center;">Aluminium</td>
            <td style="text-align:center;">Copper</td>
            <td style="text-align:center;">Timber</td>
            <td style="text-align:center;">Glass</td>
            <td style="text-align:center;">Hazardous</td>
            <td style="text-align:center;">Non-Hazardous</td>
            <td style="text-align:center;">Organic</td>
            <td style="text-align:center;">Conduit</td>
            <td style="text-align:center;">Total</td>
          </tr>
          <tr>
            <td>
              Value (landfill)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('valueLandfillCurrencyD', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->valueLandfillCurrencyD, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('valueLandfillCurrencyD', [
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
            {{ Form::text('valueLandfillConcreteD', $waste->valueLandfillConcreteD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillConcreteD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillSteelD', $waste->valueLandfillSteelD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillSteelD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillAluminiumD', $waste->valueLandfillAluminiumD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillAluminiumD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillCopperD', $waste->valueLandfillCopperD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillCopperD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillTimberD', $waste->valueLandfillTimberD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillTimberD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillGlassD', $waste->valueLandfillGlassD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillGlassD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillHazardousD', $waste->valueLandfillHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillNonHazardousD', $waste->valueLandfillNonHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillNonHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillOrganicD', $waste->valueLandfillOrganicD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillOrganicD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillConduitD', $waste->valueLandfillConduitD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillConduitD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillTotalD', $waste->valueLandfillTotalD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillTotalD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Value (recycle)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('valueRecycleCurrencyD', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->valueRecycleCurrencyD, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('valueRecycleCurrencyD', [
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
            {{ Form::text('valueRecycleConcreteD', $waste->valueRecycleConcreteD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleConcreteD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleSteelD', $waste->valueRecycleSteelD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleSteelD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleAluminiumD', $waste->valueRecycleAluminiumD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleAluminiumD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleCopperD', $waste->valueRecycleCopperD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleCopperD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleTimberD', $waste->valueRecycleTimberD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleTimberD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleGlassD', $waste->valueRecycleGlassD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleGlassD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleHazardousD', $waste->valueRecycleHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleNonHazardousD', $waste->valueRecycleNonHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleNonHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleOrganicD', $waste->valueRecycleOrganicD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleOrganicD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleConduitD', $waste->valueRecycleConduitD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleConduitD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleTotalD', $waste->valueRecycleTotalD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleTotalD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Actual Value (landfill)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('actualLandfillCurrencyD', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->actualLandfillCurrencyD, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('actualLandfillCurrencyD', [
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
            {{ Form::text('actualLandfillConcreteD', $waste->actualLandfillConcreteD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillConcreteD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillSteelD', $waste->actualLandfillSteelD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillSteelD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillAluminiumD', $waste->actualLandfillAluminiumD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillAluminiumD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillCopperD', $waste->actualLandfillCopperD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillCopperD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillTimberD', $waste->actualLandfillTimberD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillTimberD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillGlassD', $waste->actualLandfillGlassD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillGlassD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillHazardousD', $waste->actualLandfillHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillNonHazardousD', $waste->actualLandfillNonHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillNonHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillOrganicD', $waste->actualLandfillOrganicD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillOrganicD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillConduitD', $waste->actualLandfillConduitD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillConduitD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillTotalD', $waste->actualLandfillTotalD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillTotalD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Actual Value (recycle)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('actualRecycleCurrencyD', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->actualRecycleCurrencyD, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('actualRecycleCurrencyD', [
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
            {{ Form::text('actualRecycleConcreteD', $waste->actualRecycleConcreteD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleConcreteD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleSteelD', $waste->actualRecycleSteelD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleSteelD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleAluminiumD', $waste->actualRecycleAluminiumD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleAluminiumD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleCopperD', $waste->actualRecycleCopperD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleCopperD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleTimberD', $waste->actualRecycleTimberD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleTimberD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleGlassD', $waste->actualRecycleGlassD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleGlassD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleHazardousD', $waste->actualRecycleHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleNonHazardousD', $waste->actualRecycleNonHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleNonHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleOrganicD', $waste->actualRecycleOrganicD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleOrganicD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleConduitD', $waste->actualRecycleConduitD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleConduitD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleTotalD', $waste->actualRecycleTotalD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleTotalD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Total Value Proposed
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('totalValuePropCurrencyD', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->totalValuePropCurrencyD, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('totalValuePropCurrencyD', [
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
            {{ Form::text('totalValuePropConcreteD', $waste->totalValuePropConcreteD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropConcreteD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropSteelD', $waste->totalValuePropSteelD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropSteelD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropAluminiumD', $waste->totalValuePropAluminiumD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropAluminiumD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropCopperD', $waste->totalValuePropCopperD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropCopperD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropTimberD', $waste->totalValuePropTimberD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropTimberD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropGlassD', $waste->totalValuePropGlassD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropGlassD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropHazardousD', $waste->totalValuePropHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropNonHazardousD', $waste->totalValuePropNonHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropNonHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropOrganicD', $waste->totalValuePropOrganicD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropOrganicD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropConduitD', $waste->totalValuePropConduitD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropConduitD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropTotalD', $waste->totalValuePropTotalD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropTotalD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Total Value Actual
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('totalValueActCurrencyD', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->totalValueActCurrencyD, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('totalValueActCurrencyD', [
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
            {{ Form::text('totalValueActConcreteD', $waste->totalValueActConcreteD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActConcreteD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActSteelD', $waste->totalValueActSteelD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActSteelD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActAluminiumD', $waste->totalValueActAluminiumD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActAluminiumD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActCopperD', $waste->totalValueActCopperD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActCopperD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActTimberD', $waste->totalValueActTimberD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActTimberD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActGlassD', $waste->totalValueActGlassD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActGlassD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActHazardousD', $waste->totalValueActHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActNonHazardousD', $waste->totalValueActNonHazardousD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActNonHazardousD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActOrganicD', $waste->totalValueActOrganicD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActOrganicD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActConduitD', $waste->totalValueActConduitD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActConduitD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActTotalD', $waste->totalValueActTotalD, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActTotalD', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          
		  </fieldset>
        <tr>
            <td colspan="13">
              <div class="form-group">
                <div>
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
    
  <!------------------------------------------------------------------------------------------------------------------------------------------------------>

    <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#overview" href="#collapseTwo">
		  <span class="badge pull-right">1</span>
		    Construction Waste
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
        <label for="ConWasteComment" class="control-label">Describe the construction waste management program and its objectives to be implemented for this development:</label><br />
        @if (isset($waste))
        {{ Form::textarea('ConWasteComment', $waste->ConWasteComment, array('class' => 'form-control', 'style' => 'width:100%')); }}
        @else
        {{ Form::textarea('ConWasteComment', '', array('class' => 'form-control', 'style' => 'width:100%')); }}
        @endif
	      <div class="container-fluid" style="margin-left: -15px; margin-right: -15px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
           <table class="table table-hover table-condensed table-responsive" style="font-size: 12px;">
      <!--       <form class="form" role="form">-->
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
			Concrete
		      </td>
		      <td style="text-align: center;">
			Steel
		      </td>
		      <td style="text-align: center;">
			Aluminium
		      </td>
		      <td style="text-align: center;">
			Copper
		      </td>
		      <td style="text-align: center;">
			Timber
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
			Conduit
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
            {{ Form::select('unitMessuramentTargetC', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->C_Tvolume_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentTargetC', [
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
            {{ Form::text('concreteTargetC', $waste->C_Tvolume_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteTargetC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelTargetC', $waste->C_Tvolume_Steel, array('class' => 'form-control')); }}
            @else
            {{ Form::text('steelTargetC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumTargetC', $waste->C_Tvolume_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumTargetC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperTargetC', $waste->C_Tvolume_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperTargetC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberTargetC', $waste->C_Tvolume_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberTargetC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassTargetC', $waste->C_Tvolume_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassTargetC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousTargetC', $waste->C_Tvolume_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousTargetC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardousTargetC', $waste->C_Tvolume_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardousTargetC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicTargetC', $waste->C_Tvolume_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicTargetC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitTargetC', $waste->C_Tvolume_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitTargetC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalTargetC', $waste->totalTargetC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalTargetC', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
		    <tr>
          <td>
			       Proposed volume for landfill
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentProposedLandC', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->C_PvolumeForLandfill_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentProposedLandC', [
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
            {{ Form::text('concreteProposedLandC', $waste->C_PvolumeForLandfill_Concrete, array('class' => 'form-control')); }}
            @else
            {{ Form::text('concreteProposedLandC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelProposedLandC', $waste->C_PvolumeForLandfill_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelProposedLandC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumProposedLandC', $waste->C_PvolumeForLandfill_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumProposedLandC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperProposedLandC', $waste->C_PvolumeForLandfill_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperProposedLandC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberProposedLandC', $waste->C_PvolumeForLandfill_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberProposedLandC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassProposedLandC', $waste->C_PvolumeForLandfill_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassProposedLandC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousProposedLandC', $waste->C_PvolumeForLandfill_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousProposedLandC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardousProposedLandC', $waste->C_PvolumeForLandfill_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardousProposedLandC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicProposedLandC', $waste->C_PvolumeForLandfill_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicProposedLandC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitProposedLandC', $waste->C_PvolumeForLandfill_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitProposedLandC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalProposedLandC', $waste->totalProposedLandC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalProposedLandC', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
		    <tr>
		      <td>
			       Proposed volume for recycle / reuse
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentProposedRecycleC', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->C_PvolumeForRecycle_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentProposedRecycleC', [
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
            {{ Form::text('concreteProposedRecycleC', $waste->C_PvolumeForRecycle_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteProposedRecycleC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelProposedRecycleC', $waste->C_PvolumeForRecycle_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelProposedRecycleC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumProposedRecycleC', $waste->C_PvolumeForRecycle_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumProposedRecycleC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperProposedRecycleC', $waste->C_PvolumeForRecycle_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperProposedRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberProposedRecycleC', $waste->C_PvolumeForRecycle_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberProposedRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassProposedRecycleC', $waste->C_PvolumeForRecycle_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassProposedRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousProposedRecycleC', $waste->C_PvolumeForRecycle_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousProposedRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardousProposedRecycleC', $waste->C_PvolumeForRecycle_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardousProposedRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicProposedRecycleC', $waste->C_PvolumeForRecycle_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicProposedRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitProposedRecycleC', $waste->C_PvolumeForRecycle_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitProposedRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalProposedRecycleC', $waste->totalProposedRecycleC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalProposedRecycleC', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
		    <tr>
		     <td>
			       Actual volume for landfill
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentActualLandfillC', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->C_ActVolumeForLandfill_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentActualLandfillC', [
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
            {{ Form::text('concreteActualLandfillC', $waste->C_ActVolumeForLandfill_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteActualLandfillC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelActualLandfillC', $waste->C_ActVolumeForLandfill_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelActualLandfillC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumActualLandfillC', $waste->C_ActVolumeForLandfill_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumActualLandfillC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperActualLandfillC', $waste->C_ActVolumeForLandfill_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperActualLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberActualLandfillC', $waste->C_ActVolumeForLandfill_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberActualLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassActualLandfillC', $waste->C_ActVolumeForLandfill_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassActualLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousActualLandfillC', $waste->C_ActVolumeForLandfill_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousActualLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardouActualLandfillC', $waste->C_ActVolumeForLandfill_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardouActualLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicActualLandfillC', $waste->C_ActVolumeForLandfill_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicActualLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitActualLandfillC', $waste->C_ActVolumeForLandfill_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitActualLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalActualLandC', $waste->totalActualLandC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalActualLandC', '', array('class' => 'form-control')); }}
            @endif 
          </td>
		    </tr>
          <tr>
            <td>
			       Actual volume for recycle/reuse
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentActualRecycleC', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons', 
                  'Tonnes' => 'Tonnes'],
                  $waste->C_ActVolumeForRecycle_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentActualRecycleC', [
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
            {{ Form::text('concreteActualRecycleC', $waste->C_ActVolumeForRecycle_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteActualRecycleC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelActualRecycleC', $waste->C_ActVolumeForRecycle_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelActualRecycleC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumActualRecycleC', $waste->C_ActVolumeForRecycle_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumActualRecycleC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperActualRecycleC', $waste->C_ActVolumeForRecycle_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperActualRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberActualRecycleC', $waste->C_ActVolumeForRecycle_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberActualRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassActualRecycleC', $waste->C_ActVolumeForRecycle_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassActualRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousActualRecycleC', $waste->C_ActVolumeForRecycle_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousActualRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardouActualRecycleC', $waste->C_ActVolumeForRecycle_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardouActualRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicActualRecycleC', $waste->C_ActVolumeForRecycle_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicActualRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitActualRecycleC', $waste->C_ActVolumeForRecycle_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitActualRecycleC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalActualRecycleC', $waste->totalActualRecycleC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalActualRecycleC', '', array('class' => 'form-control')); }}
            @endif 
          </td>
          </tr>
          <tr>
            <td>
			       Difference in volume for landfill
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentDifferenceLandfillC', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons',
                  'Tonnes' => 'Tonnes'],
                  $waste->C_DifVolumeForLandfill_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentDifferenceLandfillC', [
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
            {{ Form::text('concreteDifferenceLandfillC', $waste->C_DifVolumeForLandfill_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteDifferenceLandfillC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelDifferenceLandfillC', $waste->C_DifVolumeForLandfill_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelDifferenceLandfillC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumDifferenceLandfillC', $waste->C_DifVolumeForLandfill_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumDifferenceLandfillC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperDifferenceLandfillC', $waste->C_DifVolumeForLandfill_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperDifferenceLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberDifferenceLandfillC', $waste->C_DifVolumeForLandfill_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberDifferenceLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassDifferenceLandfillC', $waste->C_DifVolumeForLandfill_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassDifferenceLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousDifferenceLandfillC', $waste->C_DifVolumeForLandfill_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousDifferenceLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardouDifferenceLandfillC', $waste->C_DifVolumeForLandfill_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardouDifferenceLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicDifferenceLandfillC', $waste->C_DifVolumeForLandfill_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicDifferenceLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitDifferenceLandfillC', $waste->C_DifVolumeForLandfill_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitDifferenceLandfillC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalDifLandC', $waste->totalDifLandC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalDifLandC', '', array('class' => 'form-control')); }}
            @endif 
          </td>
          </tr>
           <tr>
            <td>
			       Difference in volume for recycle/re-use
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::select('unitMessuramentDifferenceC', [
                  'Kg' => 'Kg', 
                  'Pounds' => 'Pounds', 
                  'Cubic Feet' => 'Cubic Feet', 
                  'Cubic Meters' => 'Cubic Meters',
                  'Tons' => 'Tons',
                  'Tonnes' => 'Tonnes'],
                  $waste->C_DifVolumeForRecycle_Units, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
            @else
            {{ Form::select('unitMessuramentDifferenceC', [
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
            {{ Form::text('concreteDifferenceC', $waste->C_DifVolumeForRecycle_Concrete, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('concreteDifferenceC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('steelDifferenceC', $waste->C_DifVolumeForRecycle_Steel, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('steelDifferenceC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('aluminiumDifferenceC', $waste->C_DifVolumeForRecycle_Aluminium, array('class' => 'form-control')); }} 
            @else
            {{ Form::text('aluminiumDifferenceC', '', array('class' => 'form-control')); }} 
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('copperDifferenceC', $waste->C_DifVolumeForRecycle_Copper, array('class' => 'form-control')); }}
            @else
            {{ Form::text('copperDifferenceC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('timberDifferenceC', $waste->C_DifVolumeForRecycle_Timber, array('class' => 'form-control')); }}
            @else
            {{ Form::text('timberDifferenceC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
		      <td>
            @if (isset($waste))
            {{ Form::text('glassDifferenceC', $waste->C_DifVolumeForRecycle_Glass, array('class' => 'form-control')); }}
            @else
            {{ Form::text('glassDifferenceC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('hazardousDifferenceC', $waste->C_DifVolumeForRecycle_Hazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('hazardousDifferenceC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('nonHazardouDifferenceC', $waste->C_DifVolumeForRecycle_NonHazardous, array('class' => 'form-control')); }}
            @else
            {{ Form::text('nonHazardouDifferenceC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('organicDifferenceC', $waste->C_DifVolumeForRecycle_Organic, array('class' => 'form-control')); }}
            @else
            {{ Form::text('organicDifferenceC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
           <td>
             @if (isset($waste))
            {{ Form::text('conduitDifferenceC', $waste->C_DifVolumeForRecycle_Conduit, array('class' => 'form-control')); }}
            @else
            {{ Form::text('conduitDifferenceC', '', array('class' => 'form-control')); }}
            @endif
		      </td>
          <td>
            @if (isset($waste))
            {{ Form::text('totalDifRecycleC', $waste->totalDifRecycleC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalDifRecycleC', '', array('class' => 'form-control')); }}
            @endif 
          </td>
          </tr>
          <tr>
            <td><br />
            </td>
          </tr>
          <tr>
            <td colspan="13">
              <legend style="font-size:16px;">Cost Analysis</legend>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td style="text-align:center;">Concrete</td>
            <td style="text-align:center;">Steel</td>
            <td style="text-align:center;">Aluminium</td>
            <td style="text-align:center;">Copper</td>
            <td style="text-align:center;">Timber</td>
            <td style="text-align:center;">Glass</td>
            <td style="text-align:center;">Hazardous</td>
            <td style="text-align:center;">Non-Hazardous</td>
            <td style="text-align:center;">Organic</td>
            <td style="text-align:center;">Conduit</td>
            <td style="text-align:center;">Total</td>
          </tr>
          <tr>
            <td>
              Value (landfill)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('valueLandfillCurrencyC', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->valueLandfillCurrencyC, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('valueLandfillCurrencyC', [
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
            {{ Form::text('valueLandfillConcreteC', $waste->valueLandfillConcreteC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillConcreteC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillSteelC', $waste->valueLandfillSteelC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillSteelC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillAluminiumC', $waste->valueLandfillAluminiumC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillAluminiumC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillCopperC', $waste->valueLandfillCopperC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillCopperC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillTimberC', $waste->valueLandfillTimberC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillTimberC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillGlassC', $waste->valueLandfillGlassC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillGlassC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillHazardousC', $waste->valueLandfillHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillNonHazardousC', $waste->valueLandfillNonHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillNonHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillOrganicC', $waste->valueLandfillOrganicC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillOrganicC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillConduitC', $waste->valueLandfillConduitC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillConduitC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueLandfillTotalC', $waste->valueLandfillTotalC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueLandfillTotalC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Value (recycle)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('valueRecycleCurrencyC', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->valueRecycleCurrencyC, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('valueRecycleCurrencyC', [
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
            {{ Form::text('valueRecycleConcreteC', $waste->valueRecycleConcreteC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleConcreteC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleSteelC', $waste->valueRecycleSteelC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleSteelC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleAluminiumC', $waste->valueRecycleAluminiumC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleAluminiumC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleCopperC', $waste->valueRecycleCopperC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleCopperC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleTimberC', $waste->valueRecycleTimberC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleTimberC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleGlassC', $waste->valueRecycleGlassC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleGlassC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleHazardousC', $waste->valueRecycleHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleNonHazardousC', $waste->valueRecycleNonHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleNonHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleOrganicC', $waste->valueRecycleOrganicC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleOrganicC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleConduitC', $waste->valueRecycleConduitC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleConduitC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('valueRecycleTotalC', $waste->valueRecycleTotalC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('valueRecycleTotalC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Actual Value (landfill)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('actualLandfillCurrencyC', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->actualLandfillCurrencyC, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('actualLandfillCurrencyC', [
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
            {{ Form::text('actualLandfillConcreteC', $waste->actualLandfillConcreteC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillConcreteC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillSteelC', $waste->actualLandfillSteelC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillSteelC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillAluminiumC', $waste->actualLandfillAluminiumC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillAluminiumC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillCopperC', $waste->actualLandfillCopperC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillCopperC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillTimberC', $waste->actualLandfillTimberC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillTimberC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillGlassC', $waste->actualLandfillGlassC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillGlassC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillHazardousC', $waste->actualLandfillHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillNonHazardousC', $waste->actualLandfillNonHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillNonHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillOrganicC', $waste->actualLandfillOrganicC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillOrganicC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillConduitC', $waste->actualLandfillConduitC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillConduitC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualLandfillTotalC', $waste->actualLandfillTotalC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualLandfillTotalC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Actual Value (recycle)/Unit
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('actualRecycleCurrencyC', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->actualRecycleCurrencyC, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('actualRecycleCurrencyC', [
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
            {{ Form::text('actualRecycleConcreteC', $waste->actualRecycleConcreteC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleConcreteC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleSteelC', $waste->actualRecycleSteelC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleSteelC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleAluminiumC', $waste->actualRecycleAluminiumC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleAluminiumC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleCopperC', $waste->actualRecycleCopperC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleCopperC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleTimberC', $waste->actualRecycleTimberC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleTimberC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleGlassC', $waste->actualRecycleGlassC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleGlassC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleHazardousC', $waste->actualRecycleHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleNonHazardousC', $waste->actualRecycleNonHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleNonHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleOrganicC', $waste->actualRecycleOrganicC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleOrganicC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleConduitC', $waste->actualRecycleConduitC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleConduitC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('actualRecycleTotalC', $waste->actualRecycleTotalC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('actualRecycleTotalC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Total Value Proposed
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('totalValuePropCurrencyC', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->totalValuePropCurrencyC, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('totalValuePropCurrencyC', [
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
            {{ Form::text('totalValuePropConcreteC', $waste->totalValuePropConcreteC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropConcreteC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropSteelC', $waste->totalValuePropSteelC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropSteelC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropAluminiumC', $waste->totalValuePropAluminiumC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropAluminiumC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropCopperC', $waste->totalValuePropCopperC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropCopperC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropTimberC', $waste->totalValuePropTimberC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropTimberC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropGlassC', $waste->totalValuePropGlassC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropGlassC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropHazardousC', $waste->totalValuePropHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropNonHazardousC', $waste->totalValuePropNonHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropNonHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropOrganicC', $waste->totalValuePropOrganicC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropOrganicC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropConduitC', $waste->totalValuePropConduitC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropConduitC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValuePropTotalC', $waste->totalValuePropTotalC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValuePropTotalC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
            <td>
              Total Value Actual
            </td>
            <td>
              @if (isset($waste))
              {{ Form::select('totalValueActCurrencyC', [
                  'USD' => 'USD', 
                  'Pounds' => 'Pounds', 
                  'AUD' => 'AUD', 
                  'NZD' => 'NZD', 
                  'CAD' => 'CAD',
                  'Euro' => 'Euro',
                  'DEM' => 'DEM',
                  'Renminbi' => 'Renminbi'],
                  $waste->totalValueActCurrencyC, 
                  ['class' => 'btn btn-default btn-sm', 'style' => 'width:70px']
                ) }}
              @else
              {{ Form::select('totalValueActCurrencyC', [
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
            {{ Form::text('totalValueActConcreteC', $waste->totalValueActConcreteC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActConcreteC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActSteelC', $waste->totalValueActSteelC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActSteelC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActAluminiumC', $waste->totalValueActAluminiumC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActAluminiumC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActCopperC', $waste->totalValueActCopperC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActCopperC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActTimberC', $waste->totalValueActTimberC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActTimberC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActGlassC', $waste->totalValueActGlassC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActGlassC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActHazardousC', $waste->totalValueActHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActNonHazardousC', $waste->totalValueActNonHazardousC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActNonHazardousC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActOrganicC', $waste->totalValueActOrganicC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActOrganicC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActConduitC', $waste->totalValueActConduitC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActConduitC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
            <td>
              @if (isset($waste))
            {{ Form::text('totalValueActTotalC', $waste->totalValueActTotalC, array('class' => 'form-control')); }}
            @else
            {{ Form::text('totalValueActTotalC', '', array('class' => 'form-control')); }}
            @endif 
            </td>
          </tr>
          <tr>
        <td colspan="13">
          <div class="form-group">
            <div>
            </div>
          </div>
        </td>
      </tr>
		  </fieldset>
      
		  </table>
<!--		</form>-->
        </div>
	      </div>
   </div>
 </div>
    
    
    <!------------------------------------------------------------------------------------------------------------------------------------------------------>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		<span class="badge pull-right">14</span>
		Approval Process Activities
	    </a>
	    </h4>
	  </div>
	 <div id="collapseThree" class="panel-collapse collapse">
    <div id="collapseThree">
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
		Significant Environmental Risk(s)
	</a>
	    </h4>
	  </div>
  <div id="collapseFour" class="panel-collapse collapse">
    <div id="collapseFour">
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
		<span class="badge pull-right">2</span>
		Receiving Environment Management Plan(s) (REMP)
	</a>
	    </h4>
	  </div>
  <div id="collapseFive" class="panel-collapse collapse">
    <div id="collapseFive">
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
@stop