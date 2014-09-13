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
		    Proposed Community Details
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
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table col-md-6">
		    <fieldset id="pOffice">
		      <legend><span>Office</span></legend>
		    <tr>
		      <td>
			<div class="form-inline" id="totalOfficeGross">
			  <label for="office" class="control-label">Office Gross Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('officeGrossUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
				) }}
          {{ Form::text('officeGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Office Gross Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline" id="totalOfficeNet">
			  <label for="office" class="control-label">Office Net Floor Area: </label>
			  <div class="form-group">
			   {{ Form::select('officeNetUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('officeNetArea', '', array('class' => 'form-control', 'placeholder' => 'Office Net Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline">
			  <label for="office" class="control-label">Override default operational waste values for offices: </label>
			  {{ Form::select('overrideOfficeValue', [
            'N/A' => 'N/A', 
            'No' => 'No', 
            'Yes' => 'Yes'],
            null, 
            ['class' => 'form-control']
          ) }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="pOfficeWasteComposition">
		      <legend><span>Waste Composition and Generation for Offices</span></legend>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="office" class="control-label">Paper/Cardboard: </label>
			  <div class="form-group">
          {{ Form::text('officePaper', '', array('class' => 'form-control', 'placeholder' => 'Paper/Cardboard(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="office" class="control-label">Metal: </label>
			  <div class="form-group">
          {{ Form::text('officeMetal', '', array('class' => 'form-control', 'placeholder' => 'Metal(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="office" class="control-label">Glass: </label>
			  <div class="form-group">
			    {{ Form::text('officeGlass', '', array('class' => 'form-control', 'placeholder' => 'Glass(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="office" class="control-label">Plastic: </label>
			  <div class="form-group">
          {{ Form::text('officePlastic', '', array('class' => 'form-control', 'placeholder' => 'Plastic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="office" class="control-label">Organic: </label>
			  <div class="form-group">
          {{ Form::text('officeOrganic', '', array('class' => 'form-control', 'placeholder' => 'Organic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="office" class="control-label">Other non-haz: </label>
			  <div class="form-group">
          {{ Form::text('officeOther', '', array('class' => 'form-control', 'placeholder' => 'Non-Haz(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			<div class="form-group">
			  <label for="office" class="control-label">Quantity: </label>
        {{ Form::text('officeQuantity', '', array('class' => 'form-control', 'placeholder' => 'kg/m2/year')); }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		  <fieldset id="pRetail">
		    <legend><span>Retail</span></legend>
		    <tr>
		      <td>
			<div class="form-inline" id="totalRetailGross">
			  <label for="retail" class="control-label">Retail Gross Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('retailGrossUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('retailGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Retail Gross Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline" id="totalRetailNet">
			  <label for="retail" class="control-label">Retail Net Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('retailNetUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('retailNetArea', '', array('class' => 'form-control', 'placeholder' => 'Retail Net Value')); }}
			 </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline">
			  <label for="retail" class="control-label">Override default operational waste values for retail: </label>
			  {{ Form::select('overrideRetailValue', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="pRetailWasteComposition">
		      <legend><span>Waste Composition and Generation for Retail</span></legend>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="retail" class="control-label">Paper/Cardboard: </label>
			  <div class="form-group">
          {{ Form::text('retailPaper', '', array('class' => 'form-control', 'placeholder' => 'Paper/Cardboard(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="retail" class="control-label">Metal: </label>
			  <div class="form-group">
			    <input type="text" class="form-control" id="retailMetal" placeholder="Metal(%)">
          {{ Form::text('retailMetal', '', array('class' => 'form-control', 'placeholder' => 'Metal(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="retail" class="control-label">Glass: </label>
			  <div class="form-group">
          {{ Form::text('retailGlass', '', array('class' => 'form-control', 'placeholder' => 'Glass(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="retail" class="control-label">Plastic: </label>
			  <div class="form-group">
          {{ Form::text('retailPlastic', '', array('class' => 'form-control', 'placeholder' => 'Plastic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="retail" class="control-label">Organic: </label>
			  <div class="form-group">
          {{ Form::text('retailOrganic', '', array('class' => 'form-control', 'placeholder' => 'Organic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="retail" class="control-label">Other non-haz: </label>
			  <div class="form-group">
          {{ Form::text('retailOther', '', array('class' => 'form-control', 'placeholder' => 'Non-Haz(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			<div class="form-group">
			  <label for="retail" class="control-label">Quantity: </label>
        {{ Form::text('retailQuantity', '', array('class' => 'form-control', 'placeholder' => 'kg/m2/year')); }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		  </table>
		</form>
	      </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		  <fieldset id="pSchool">
		    <legend><span>School</span></legend>
		    <tr>
		      <td>
			<div class="form-inline" id="totalSchoolGross">
			  <label for="school" class="control-label">School Gross Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('schoolGrossUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('schoolGrossArea', '', array('class' => 'form-control', 'placeholder' => 'School Gross Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline" id="totalSchoolNet">
			  <label for="school" class="control-label">School Net Floor Area: </label>
			  <div class="form-group">
			   {{ Form::select('schoolNetUnit', [
					'N/A' => 'Unit', 
					'Square Metre' => 'Square Metre', 
					'Square Kilometre' => 'Square Kilometre',
					'Square Mile' => 'Square Mile',
					'Square Yard' => 'Square Yard'], //??
					null, 
					['class' => 'form-control']
				) }}
          {{ Form::text('schoolNetArea', '', array('class' => 'form-control', 'placeholder' => 'School Net Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline">
			  <label for="school" class="control-label">Override default operational waste values for school: </label>
			  {{ Form::select('overrideSchoolValue', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="pSchoolWasteComposition">
		      <legend><span>Waste Composition and Generation for School</span></legend>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="school" class="control-label">Paper/Cardboard: </label>
			  <div class="form-group">
          {{ Form::text('schoolPaper', '', array('class' => 'form-control', 'placeholder' => 'Paper/Cardboard(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="school" class="control-label">Metal: </label>
			  <div class="form-group">
          {{ Form::text('schoolMetal', '', array('class' => 'form-control', 'placeholder' => 'Metal(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="school" class="control-label">Glass: </label>
			  <div class="form-group">
          {{ Form::text('schoolGlass', '', array('class' => 'form-control', 'placeholder' => 'Glass(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="school" class="control-label">Plastic: </label>
			  <div class="form-group">
          {{ Form::text('schoolPlastic', '', array('class' => 'form-control', 'placeholder' => 'Plastic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="school" class="control-label">Organic: </label>
			  <div class="form-group">
          {{ Form::text('schoolOrganic', '', array('class' => 'form-control', 'placeholder' => 'Organic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="school" class="control-label">Other non-haz: </label>
			  <div class="form-group">
          {{ Form::text('schoolOther', '', array('class' => 'form-control', 'placeholder' => 'Non-Haz(%')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			<div class="form-group">
			  <label for="school" class="control-label">Quantity: </label>
        {{ Form::text('schoolQuantity', '', array('class' => 'form-control', 'placeholder' => 'kg/m2/year')); }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		  <fieldset id="pResidential">
		    <legend><span>Residential</span></legend>
		    <tr>
		      <td>
			<div class="form-inline" id="totalResidentialGross">
			  <label for="residential" class="control-label">Residential Gross Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('residentialGrossUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('residentialGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Residential Gross Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline" id="totalResidentialNet">
			  <label for="residential" class="control-label">Residential Net Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('residentialNetUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('residentialNetArea', '', array('class' => 'form-control', 'placeholder' => 'Residential Net Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline">
			  <label for="residential" class="control-label">Override default operational waste values for residential: </label>
			  {{ Form::select('overrideResidentialValue', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	  </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="pResidentialWasteComposition">
		      <legend><span>Waste Composition and Generation for Residential</span></legend>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="residential" class="control-label">Paper/Cardboard: </label>
			  <div class="form-group">
          {{ Form::text('residentialPaper', '', array('class' => 'form-control', 'placeholder' => 'Paper/Cardboard(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="residential" class="control-label">Metal: </label>
			  <div class="form-group">
          {{ Form::text('residentialMetal', '', array('class' => 'form-control', 'placeholder' => 'Metal(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="residential" class="control-label">Glass: </label>
			  <div class="form-group">
			    <input type="text" class="form-control" id="residentialGlass" placeholder="Glass(%)">
          {{ Form::text('residentialGlass', '', array('class' => 'form-control', 'placeholder' => 'Glass(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="residential" class="control-label">Plastic: </label>
			  <div class="form-group">
          {{ Form::text('residentialPlastic', '', array('class' => 'form-control', 'placeholder' => 'Plastic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="residential" class="control-label">Organic: </label>
			  <div class="form-group">
          {{ Form::text('residentialOrganic', '', array('class' => 'form-control', 'placeholder' => 'Organic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="residential" class="control-label">Other non-haz: </label>
			  <div class="form-group">
          {{ Form::text('residentialOther', '', array('class' => 'form-control', 'placeholder' => 'Non-Haz(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			<div class="form-group">
			  <label for="residential" class="control-label">Quantity: </label>
        {{ Form::text('residentialQuantity', '', array('class' => 'form-control', 'placeholder' => 'kg/m2/year')); }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		  <fieldset id="pOtherBuildingsTypes1">
		    <legend><span>Other Building Types</span></legend>
		    <tr>
		      <td>
			<div class="form-inline" id="totalOtherBuildingsTypes1Gross">
			  <label for="otherBuildingsTypes1" class="control-label">Gross Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('otherBuildingsTypes1GrossUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('otherBuildingsTypes1GrossArea', '', array('class' => 'form-control', 'placeholder' => 'Other Gross Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline" id="totalOtherBuildingsTypes1Net">
			  <label for="otherBuildingsTypes1" class="control-label">Net Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('otherBuildingsTypes1NetUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('otherBuildingsTypes1NetArea', '', array('class' => 'form-control', 'placeholder' => 'Other Net Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="pOther1WasteComposition">
		      <legend><span>Waste Composition and Generation for Other</span></legend>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="other1" class="control-label">Paper/Cardboard: </label>
			  <div class="form-group">
	          {{ Form::text('other1Paper', '', array('class' => 'form-control', 'placeholder' => 'Paper/Cardboard(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other1" class="control-label">Metal: </label>
			  <div class="form-group">
          {{ Form::text('other1Metal', '', array('class' => 'form-control', 'placeholder' => 'Metal(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other1" class="control-label">Glass: </label>
			  <div class="form-group">
	          {{ Form::text('other1Glass', '', array('class' => 'form-control', 'placeholder' => 'Glass(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="other1" class="control-label">Plastic: </label>
			  <div class="form-group">
	        {{ Form::text('other1Plastic', '', array('class' => 'form-control', 'placeholder' => 'Plastic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other1" class="control-label">Organic: </label>
			  <div class="form-group">
	          {{ Form::text('other1Organic', '', array('class' => 'form-control', 'placeholder' => 'Organic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other1" class="control-label">Other non-haz: </label>
			  <div class="form-group">
          {{ Form::text('other1Other', '', array('class' => 'form-control', 'placeholder' => 'Non-Haz(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			<div class="form-group">
			  <label for="other1" class="control-label">Quantity: </label>
        {{ Form::text('other1Quantity', '', array('class' => 'form-control', 'placeholder' => 'kg/m2/year')); }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
	      <form class="form" role="form">
		<table class="table">
		  <fieldset id="pOtherBuildingsTypes2">
		    <legend><span>Other Building Types</span></legend>
		    <tr>
		      <td>
			<div class="form-inline" id="totalOtherBuildingsTypes2Gross">
			  <label for="otherBuildingsTypes2" class="control-label">Gross Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('otherBuildingsTypes2GrossUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('otherBuildingsTypes2GrossArea', '', array('class' => 'form-control', 'placeholder' => 'Other Gross Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline" id="totalOtherBuildingsTypes2Net">
			  <label for="otherBuildingsTypes2" class="control-label">Net Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('otherBuildingsTypes2NetUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
	        {{ Form::text('otherBuildingsTypes2NetArea', '', array('class' => 'form-control', 'placeholder' => 'Other Net Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="pOther2WasteComposition">
		      <legend><span>Waste Composition and Generation for Other</span></legend>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="other2" class="control-label">Paper/Cardboard: </label>
			  <div class="form-group">
          {{ Form::text('other2Paper', '', array('class' => 'form-control', 'placeholder' => 'Paper/Cardboard(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other2" class="control-label">Metal: </label>
			  <div class="form-group">
          {{ Form::text('other2Metal', '', array('class' => 'form-control', 'placeholder' => 'Metal(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other2" class="control-label">Glass: </label>
			  <div class="form-group">
          {{ Form::text('other2Glass', '', array('class' => 'form-control', 'placeholder' => 'Glass(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="other2" class="control-label">Plastic: </label>
			  <div class="form-group">
          {{ Form::text('other2Plastic', '', array('class' => 'form-control', 'placeholder' => 'Plastic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other2" class="control-label">Organic: </label>
			  <div class="form-group">
          {{ Form::text('other2Organic', '', array('class' => 'form-control', 'placeholder' => 'Organic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other2" class="control-label">Other non-haz: </label>
			  <div class="form-group">
          {{ Form::text('other2Other', '', array('class' => 'form-control', 'placeholder' => 'Non-Haz(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			<div class="form-group">
			  <label for="other2" class="control-label">Quantity: </label>
        {{ Form::text('other2Quantity', '', array('class' => 'form-control', 'placeholder' => 'kg/m2/year')); }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
	      <form class="form" role="form">
		<table class="table">
		  <fieldset id="pOtherBuildingsTypes3">
		    <legend><span>Other Building Types</span></legend>
		    <tr>
		      <td>
			<div class="form-inline" id="totalOtherBuildingsTypes3Gross">
			  <label for="otherBuildingsTypes3" class="control-label">Gross Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('otherBuildingsTypes3GrossUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('otherBuildingsTypes3GrossArea', '', array('class' => 'form-control', 'placeholder' => 'Other Gross Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-inline" id="totalOtherBuildingsTypes3Net">
			  <label for="otherBuildingsTypes3" class="control-label">Net Floor Area: </label>
			  <div class="form-group">
			    {{ Form::select('otherBuildingsTypes3NetUnit', [
            'N/A' => 'Unit', 
            'Square Metre' => 'Square Metre', 
            'Square Kilometre' => 'Square Kilometre',
            'Square Mile' => 'Square Mile',
            'Square Yard' => 'Square Yard'], //??
            null, 
            ['class' => 'form-control']
          ) }}
          {{ Form::text('otherBuildingsTypes3NetArea', '', array('class' => 'form-control', 'placeholder' => 'Other Net Value')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="pOther3WasteComposition">
		      <legend><span>Waste Composition and Generation for Other</span></legend>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="other3" class="control-label">Paper/Cardboard: </label>
			  <div class="form-group">
	          {{ Form::text('other3Paper', '', array('class' => 'form-control', 'placeholder' => 'Paper/Cardboard(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other3" class="control-label">Metal: </label>
			  <div class="form-group">
			    <input type="text" class="form-control" id="other3Metal" placeholder="Metal(%)">
          {{ Form::text('other3Metal', '', array('class' => 'form-control', 'placeholder' => 'Metal(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other3" class="control-label">Glass: </label>
			  <div class="form-group">
          {{ Form::text('other3Glass', '', array('class' => 'form-control', 'placeholder' => 'Glass(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="other3" class="control-label">Plastic: </label>
			  <div class="form-group">
          {{ Form::text('other3Plastic', '', array('class' => 'form-control', 'placeholder' => 'Plastic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other3" class="control-label">Organic: </label>
			  <div class="form-group">
          {{ Form::text('other3Organic', '', array('class' => 'form-control', 'placeholder' => 'Organic(%)')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="other3" class="control-label">Other non-haz: </label>
			  <div class="form-group">
	          {{ Form::text('other3Other', '', array('class' => 'form-control', 'placeholder' => 'Non-Haz(%)')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
			<div class="form-group">
			  <label for="other3" class="control-label">Quantity: </label>
	        {{ Form::text(other3Quantity'', '', array('class' => 'form-control', 'placeholder' => 'kg/m2/year')); }}
			</div>
		      </td>
		    </tr>
		  </fieldset>
		</table>
	      </form>
	    </div>
	      <div class="table-responsive col-md-6">
	      <form class="form" role="form">
		<table class="table">
		  <fieldset id="pLandscape">
		    <legend><span>Other Building Types</span></legend>
		    <tr>
		      <td>
			<div class="form-inline" id="totalLandscapeArea">
			  <label for="plandscape" class="control-label">Total Landscape Area: </label>
			  <div class="form-group">
			    {{ Form::select('landscapeAreaUnit', [
              'N/A' => 'Unit', 
              'Square Metre' => 'Square Metre', 
              'Square Kilometre' => 'Square Kilometre',
              'Square Mile' => 'Square Mile',
              'Square Yard' => 'Square Yard'], //??
              null, 
              ['class' => 'form-control']
            ) }}
          {{ Form::text('landscapeAreaValue', '', array('class' => 'form-control', 'placeholder' => 'Landscape Area Value')); }}
			  </div>
			</div>
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
        {{ Form::text('landscapeQuantity', '', array('class' => 'form-control', 'placeholder' => 'kg/m2/year')); }}
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

