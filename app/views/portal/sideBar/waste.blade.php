@extends('/../layout')
@section('title')
Waste
@stop
@section('waste')
class="active"
@stop
@section('body')
<div class="row main">
	<div class="col-sm- panel-group" id="mainInfo">
	  <div class="panel panel-default">
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
	      <div class="container-fluid" style="background-color: #fcf8e3; margin-left: -15px; margin-right: -15px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
		<form class="form col-xs-6 col-md-4" role="form">
		  <table class="table-condensed">
		    <fieldset id="pOffice">
		      <legend><span style="font-size: 18px;">Office</span></legend>
		    <tr>
		      <td colspan="2">
			Office Gross Floor Area
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('officeDGrossUnit', [
            'N/A' => 'Unit', 
            'Square Meter' => 'Square Meter', 
            'Square Kilometer' => 'Square Kilometer',
            'Square Mile' => 'Square Mile',
            'Square Foot' => 'Square Foot'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		      <td>
            {{ Form::text('officeDGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Office Gross Value')); }}
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			Office Net Floor Area
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('officeDNetUnit', [
            'N/A' => 'Unit', 
            'Square Meter' => 'Square Meter', 
            'Square Kilometer' => 'Square Kilometer',
            'Square Mile' => 'Square Mile',
            'Square Foot' => 'Square Foot'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		      <td>
            {{ Form::text('officeDNetArea', '', array('class' => 'form-control', 'placeholder' => 'Office Net Value')); }}
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			Override default operational waste values for offices
		      </td>
		    </tr>
		    <tr>
		      <td>
             {{ Form::select('overrideDOfficeValue', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
		<form class="form col-xs-6 col-sm-6 col-md-6" style="min-width:460px;" role="form">
		  <table class="table-condensed">
		    <fieldset id="pOfficeWasteComposition">
		      <legend><span style="font-size: 18px;">Waste Composition and Generation for Offices</span></legend>
		    <tr>
		      <td>
			
		      </td>
		      <td style="text-align: center;">
			Cardboard
		      </td>
		      <td style="text-align: center;">
			Metal
		      </td>
		      <td style="text-align: center;">
			Glass
		      </td>
		      <td style="text-align: center;">
			Plastic
		      </td>
		      <td style="text-align: center;">
			Organic
		      </td>
		      <td style="text-align: center;">
			Other
		      </td>
		    </tr>
		    <tr>
		      <td>
			Target
		      </td>
		      <td>
            {{ Form::text('officeDPaperT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }} 
		      </td>
		      <td>
            {{ Form::text('officeDMetalT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }} 
		      </td>
		      <td>
            {{ Form::text('officeDGlassT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }} 
		      </td>
		      <td>
            {{ Form::text('officeDPlasticT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDOrganicT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDOtherT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Propose
		      </td>
		      <td>
            {{ Form::text('officeDPaperP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDMetalP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDGlassP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDPlasticP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDOrganicP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDOtherP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Change
		      </td>
		      <td>
            {{ Form::text('officeDPaperC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDMetalC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDGlassC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDPlasticC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDOrganicC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('officeDOtherC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Actual
		      </td>
		      <td>
             {{ Form::text('officeDPaperA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('officeDMetalA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('officeDGlassA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('officeDPlasticA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('officeDOrganicA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('officeDOtherA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Quantity
		      </td>
		      <td colspan="3">
            {{ Form::text('officeDQuantity', '', array('class' => 'form-control', 'style' => 'margin: auto;', 'placeholder' => 'kg/m2/year')); }}
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="container-fluid" style="margin-left: -15px; margin-right: -15px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
		<form class="form col-xs-6 col-md-4" role="form">
		  <table class="table-condensed">
		    <fieldset id="pRetail">
		      <legend><span style="font-size: 18px;">Retail</span></legend>
		    <tr>
		      <td colspan="2">
			Retail Gross Floor Area
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('retailDGrossUnit', [
            'N/A' => 'Unit', 
            'Square Meter' => 'Square Meter', 
            'Square Kilometer' => 'Square Kilometer',
            'Square Mile' => 'Square Mile',
            'Square Foot' => 'Square Foot'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		      <td>
			<input type="text" class="form-control" id="retailGrossArea" placeholder="Retail Gross Value">
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			Retail Net Floor Area
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('retailDNetUnit', [
            'N/A' => 'Unit', 
            'Square Meter' => 'Square Meter', 
            'Square Kilometer' => 'Square Kilometer',
            'Square Mile' => 'Square Mile',
            'Square Foot' => 'Square Foot'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		      <td>
			<input type="text" class="form-control" id="retailNetArea" placeholder="Retail Net Value">
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			Override default operational waste values for retail
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('overrideDRetailValue', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
		<form class="form col-xs-6 col-sm-6 col-md-6" style="min-width:460px;" role="form">
		  <table class="table-condensed">
		    <fieldset id="pRetailWasteComposition">
		      <legend><span style="font-size: 18px;">Waste Composition and Generation for Retail</span></legend>
		    <tr>
		      <td>
			
		      </td>
		      <td style="text-align: center;">
			Cardboard
		      </td>
		      <td style="text-align: center;">
			Metal
		      </td>
		      <td style="text-align: center;">
			Glass
		      </td>
		      <td style="text-align: center;">
			Plastic
		      </td>
		      <td style="text-align: center;">
			Organic
		      </td>
		      <td style="text-align: center;">
			Other
		      </td>
		    </tr>
		    <tr>
		      <td>
			Target
		      </td>
		      <td>
            {{ Form::text('retailDPaperT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDMetalT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDGlassT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDPlasticT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDOrganicT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDOtherT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Propose
		      </td>
		      <td>
            {{ Form::text('retailDPaperP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDMetalP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDGlassP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDPlasticP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDOrganicP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDOtherP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Change
		      </td>
		      <td>
            {{ Form::text('retailDPaperC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDMetalC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDGlassC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDPlasticC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDOrganicC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDOtherC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Actual
		      </td>
		      <td>
            {{ Form::text('retailDPaperA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDMetalA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDGlassA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDPlasticA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDrganicA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('retailDOtherA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Quantity
		      </td>
		      <td colspan="3">
             {{ Form::text('retailDQuantity', '', array('class' => 'form-control', 'style' => 'margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="container-fluid" style="background-color: #fcf8e3; margin-left: -15px; margin-right: -15px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
		<form class="form col-xs-6 col-md-4" role="form">
		  <table class="table-condensed">
		    <fieldset id="pSchool">
		      <legend><span style="font-size: 18px;">School</span></legend>
		    <tr>
		      <td colspan="2">
			School Gross Floor Area
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('schoolDGrossUnit', [
            'N/A' => 'Unit', 
            'Square Meter' => 'Square Meter', 
            'Square Kilometer' => 'Square Kilometer',
            'Square Mile' => 'Square Mile',
            'Square Foot' => 'Square Foot'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		      <td>
			<input type="text" class="form-control" id="schoolGrossArea" placeholder="School Gross Value">
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			School Net Floor Area
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('schoolDNetUnit', [
            'N/A' => 'Unit', 
            'Square Meter' => 'Square Meter', 
            'Square Kilometer' => 'Square Kilometer',
            'Square Mile' => 'Square Mile',
            'Square Foot' => 'Square Foot'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		      <td>
			<input type="text" class="form-control" id="schoolNetArea" placeholder="School Net Value">
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			Override default operational waste values for school
		      </td>
		    </tr>
		    <tr>
		      <td>
             {{ Form::select('overrideDSchoolValue', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
		<form class="form col-xs-6 col-sm-6 col-md-6" style="min-width:460px;" role="form">
		  <table class="table-condensed">
		    <fieldset id="pSchoolWasteComposition">
		      <legend><span style="font-size: 18px;">Waste Composition and Generation for School</span></legend>
		    <tr>
		      <td>
			
		      </td>
		      <td style="text-align: center;">
			Cardboard
		      </td>
		      <td style="text-align: center;">
			Metal
		      </td>
		      <td style="text-align: center;">
			Glass
		      </td>
		      <td style="text-align: center;">
			Plastic
		      </td>
		      <td style="text-align: center;">
			Organic
		      </td>
		      <td style="text-align: center;">
			Other
		      </td>
		    </tr>
		    <tr>
		      <td>
			Target
		      </td>
		      <td>
             {{ Form::text('schoolDPaperT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('schoolDMetalT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('schoolDGlassT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('schoolDPlasticT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('schoolDOrganicT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('schoolDOtherT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Propose
		      </td>
		      <td>
            {{ Form::text('schoolDPaperP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDMetalP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDGlassP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDPlasticP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDOrganicP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDOtherP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Change
		      </td>
		      <td>
            {{ Form::text('schoolDPaperC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDMetalC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDGlassC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDPlasticC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDOrganicC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDOtherC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Actual
		      </td>
		      <td>
            {{ Form::text('schoolDPaperA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDMetalA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDGlassA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDPlasticA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDOrganicA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
            {{ Form::text('schoolDOtherA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Quantity
		      </td>
		      <td colspan="3">
            {{ Form::text('schoolDQuantity', '', array('class' => 'form-control', 'style' => 'margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="container-fluid" style="margin-left: -15px; margin-right: -15px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px;">
		<form class="form col-xs-6 col-md-4" role="form">
		  <table class="table-condensed">
		    <fieldset id="pOther">
		      <legend><span style="font-size: 18px;">Other Building Types</span></legend>
		    <tr>
		      <td colspan="2">
			Other Building Gross Floor Area
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('otherDGrossUnit', [
            'N/A' => 'Unit', 
            'Square Meter' => 'Square Meter', 
            'Square Kilometer' => 'Square Kilometer',
            'Square Mile' => 'Square Mile',
            'Square Foot' => 'Square Foot'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		      <td>
			<input type="text" class="form-control" id="otherGrossArea" placeholder="Other Building Gross Value">
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			Other Building Net Floor Area
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('otherDNetUnit', [
            'N/A' => 'Unit', 
            'Square Meter' => 'Square Meter', 
            'Square Kilometer' => 'Square Kilometer',
            'Square Mile' => 'Square Mile',
            'Square Foot' => 'Square Foot'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		      <td>
			<input type="text" class="form-control" id="otherNetArea" placeholder="Other Building Net Value">
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			Override default operational waste values for Other Building
		      </td>
		    </tr>
		    <tr>
		      <td>
            {{ Form::select('overrideDOtherValue', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
		<form class="form col-xs-6 col-sm-6 col-md-6" style="min-width:460px;" role="form">
		  <table class="table-condensed">
		    <fieldset id="pOtherWasteComposition">
		      <legend><span style="font-size: 18px;">Waste Composition and Generation for Other Building</span></legend>
		    <tr>
		      <td>
			
		      </td>
		      <td style="text-align: center;">
			Cardboard
		      </td>
		      <td style="text-align: center;">
			Metal
		      </td>
		      <td style="text-align: center;">
			Glass
		      </td>
		      <td style="text-align: center;">
			Plastic
		      </td>
		      <td style="text-align: center;">
			Organic
		      </td>
		      <td style="text-align: center;">
			Other
		      </td>
		    </tr>
		    <tr>
		      <td>
			Target
		      </td>
		      <td>
					<td>
             {{ Form::text('otherDPaperT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDMetalT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDGlassT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDPlasticT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDOrganicT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDOtherT', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Propose
		      </td>
		      <td>
             {{ Form::text('otherDPaperP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDMetalP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDGlassP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDPlasticP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDOrganicP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDOtherP', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Change
		      </td>
		      <td>
             {{ Form::text('otherDPaperC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDMetalC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDGlassC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDPlasticC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDOrganicC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDOtherC', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Actual
		      </td>
		      <td>
             {{ Form::text('otherDPaperA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDMetalA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDGlassA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDPlasticA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDOrganicA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		      <td>
             {{ Form::text('otherDOtherA', '', array('class' => 'form-control', 'style' => 'text-align: center; width: 60px; margin: auto;', 'placeholder' => '%')); }}
		      </td>
		    </tr>
		    <tr>
		      <td>
			Quantity
		      </td>
		      <td colspan="3">
            {{ Form::text('otherDQuantity', '', array('class' => 'form-control', 'style' => 'margin: auto;', 'placeholder' => 'kg/m2/year')); }}
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="landscapeGeneration">
		      <legend><span>Landscape Waste Generation</span></legend>
		    <tr>
		      <td colspan="2">
			<div class="form-group">
			  <label for="landscape" class="control-label">Quantity: </label>
        {{ Form::text('landscapeDQuantity', '', array('class' => 'form-control', 'style' => 'margin: auto;', 'placeholder' => 'kg/m2/year')); }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
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
		Construction and Demolition waste recycling and salvage rates
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
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="salvageDemolition">
		      <legend><span>Salvage and recycling of Construction and Demolition waste</span></legend>
		      <tr>
			<td>
			  <label for="salvage" class="control-label">Will a construction and demolition waste management plan be written? (Required SM-R2) </label>
			</td>
			<td>
			  {{ Form::select('demolitionPlanR2', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="salvage" class="control-label">Will waste education be provided to construction contractors?</label>
			</td>
			<td>
			  {{ Form::select('constructionEducation', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="salvage" class="control-label">Will waste education be provided to demolition contractors?</label>
			</td>
			<td>
			  {{ Form::select('demolitionEducation', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="salvage" class="control-label">Will waste be adequately segregated and temporarily stored on-site during construction?</label>
			</td>
			<td>
			  {{ Form::select('wasteSegregationConstruction', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="salvage" class="control-label">Will waste be adequately segregated and temporarily stored on-site during demolition?</label>
			</td>
			<td>
			  {{ Form::select('wasteSegregationDemolition', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="salvage" class="control-label">Will there be a person responsible of C&D waste management?</label>
			</td>
			<td>
			  {{ Form::select('personResponsableWaste', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		    </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="technicalFactors">
		      <legend><span>Technical factors</span></legend>
		      <tr>
			<td>
			  <label for="technical" class="control-label">What percentage of material from existing community elements/buildings will be reused in the new one?</label>
			</td>
			<td>
        {{ Form::text('wastePercentage', '', array('class' => 'form-control', 'placeholder' => 'Percentage')); }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="technical" class="control-label">Will construction waste be segregated in a recycling plant?</label>
			</td>
			<td>
			  {{ Form::select('constructionRecyclingPlant', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="technical" class="control-label">Which plant(s)?</label>
			</td>
			<td>
        {{ Form::text('constructionRecyclingPlantName', '', array('class' => 'form-control', 'placeholder' => 'Percentage')); }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="technical" class="control-label">Will demolition waste be segregated in a recycling plant?</label>
			</td>
			<td>
			  {{ Form::select('demolitionRecyclingPlant', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="technical" class="control-label">Which plant(s)?</label>
			</td>
			<td>
	       {{ Form::text('demolitionRecyclingPlantName', '', array('class' => 'form-control', 'placeholder' => 'Percentage')); }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="technical" class="control-label">Override automatic values and enter customised capture rates?</label>
			</td>
			<td>
			    {{ Form::select('overrideWasteValues', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
			    </br>
          {{ Form::text('constructionRecyclingPercentage', '', array('class' => 'form-control', 'placeholder' => 'Construction(%)')); }} 
			    </br>
	          {{ Form::text('demolitionRecyclingPercentage', '', array('class' => 'form-control', 'placeholder' => 'Demolition(%)')); }}
			  </td>
		      </tr>
		    </fieldset>
		  </table>
		</form>
	      </div>
	    </div>
	  </div>
	</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		<span class="badge pull-right">1</span>
		Operational waste diversion from landfill rates
	      </a>
	    </h4>
	  </div>
	  <div id="collapseThree" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
		  10%
		</div>
	      </div>
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="wasteDiversion">
		      <legend><span>General</span></legend>
		      <tr>
			<td>
			  <label for="diversion" class="control-label">Will an operational waste management plan be written? (Required SM-R3)</label>
			<td>
			  {{ Form::select('demolitionPlanR3', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="diversion" class="control-label">Will adequate access be provided for refuse collection vehicles? (Required SM-R3)</label>
			</td>
			<td>
			    {{ Form::select('collectionVehicleAccess', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
			  </td>
		      </tr>
		      <tr>
			<td>
			  <label for="diversion" class="control-label">Will landscape waste be collected?</label>
			</td>
			<td>
			  {{ Form::select('landscapeCollection', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="diversion" class="control-label">Will landscape waste be treated in a suitable facility, e.g. composting?</label>
			</td>
			<td>
			  {{ Form::select('landscapeWasteTreatment', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="diversion" class="control-label">Will at least one collection point will be provided to collect hazardous waste from the community?</label>
			</td>
			<td>
			  {{ Form::select('collectionPoint', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="diversion" class="control-label">Will adequately sized collection and storage waste facilities be provided? (Required SM-R3)</label>
			</td>
			<td>
			  {{ Form::select('wasteCollectionStorage', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="diversion" class="control-label">If appropriate, will adequately sized treatment waste treatment facilities be provided? (Required SM-R3)</label>
			</td>
			<td>
			  {{ Form::select('wasteTreatmentFacilities', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		    </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="nonResidential">
		      <legend><span>Non-residential</span></legend>
		      <tr>
			<td>
			  <label for="nonResidential" class="control-label">Will waste education be provided to staff, guests, students, etc., e.g. leaflets?</label>
			</td>
			<td>
			  {{ Form::select('wasteEducationStaff', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="nonResidential" class="control-label">Will non-residential non-organic waste be stored and collected as separate streams?</label>
			</td>
			<td>
			    {{ Form::select('organicWasteStorage', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
			  </td>
		      </tr>
		      <tr>
			<td>
			  <label for="nonResidential" class="control-label">Will organic waste from all non-residential building uses be stored and collected separately?</label>
			</td>
			<td>
			  {{ Form::select('organicWasteCollection', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="nonResidential" class="control-label">Will there be a facilities manager responsible for waste in the building?</label>
			</td>
			<td>
			  {{ Form::select('wasteManager', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		    </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="technicalFactorsNonResidential">
		      <legend><span>Technical Factors Non-Residential</span></legend>
		      <tr>
			<td>
			  <label for="technicalFactorsNonResidential" class="control-label">Will non-organic recyclable waste be segregated manually on-site or mechanically in a recycling plant?</label>
			</td>
			<td>
			  {{ Form::select('wasteSegregationManually', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="technicalFactorsNonResidential" class="control-label">Will organic waste be composted, and if so will it be done on-site or off-site??</label>
			</td>
			<td>
			    {{ Form::select('wasteComposted', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			  </td>
		      </tr>
		    </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="residential">
		      <legend><span>Residential</span></legend>
		      <tr>
			<td>
			  <label for="residential" class="control-label">Will waste education be provided to residents, e.g. leaflets?</label>
			</td>
			<td>
			  {{ Form::select('wasteEducationResident', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="residential" class="control-label">Will non-organic residential waste be stored and collected as separate streams?</label>
			</td>
			<td>
			    {{ Form::select('wasteNonOrganicStorage', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			  </td>
		      </tr>
		      <tr>
			<td>
			  <label for="residential" class="control-label">Will organic residential waste be stored and collected separately?</label>
			</td>
			<td>
			    {{ Form::select('wasteOrganicStorage', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			  </td>
		      </tr>
		    </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="residentialTechnicalFactors">
		      <legend><span>Residential Technical Factors</span></legend>
		      <tr>
			<td>
			  <label for="residentialTechnicalFactors" class="control-label">Will non-organic recyclable waste be segregated manually on-site or mechanically in a recycling plant?</label>
			</td>
			<td>
			  {{ Form::select('wasteSegregationMechanically', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</td>
		      </tr>
		      <tr>
			<td>
			  <label for="residentialTechnicalFactors" class="control-label">Will organic waste be composted, and if so will it be done on-site or off-site?</label>
			</td>
			<td>
			    {{ Form::select('wasteCompostedOnsite', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
			  </td>
		      </tr>
		    </fieldset>
		  </table>
		</form>
	      </div>
	    </div>
	  </div>
	</div>

