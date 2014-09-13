@extends('layout')
@section('title')
Project Overview
@stop
@section('projectState')
class="active"
@stop
@section('body')
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#overview" href="#collapseOne">
		  <span class="badge pull-right">16</span>
		    General Information
		</a>
	      </h4>
	    </div>
	  <div id="collapseOne" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		  60%
		</div>
	      </div>
	      <form class="form" role="form">
		<div class="table-responsive">
		  <table class="table">
		    <tr>
		      <td colspan="2">
			<div class="form-group">
			  <label for="projectName" class="control-label">Project Name:</label>
			  <div>
          {{ Form::text('projectName', '', array('class' => 'form-control', 'placeholder' => 'Gold Coast University Hospital')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="startDate" class="control-label">Target Project Start Date:</label>
			  <div>
          {{ Form::text('startDate', '', array('class' => 'form-control', 'placeholder' => 'YYYY-MM-DD')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="approvalCost" class="control-label">Approval Cost Code:</label>
			  <div>
          {{ Form::text('approvalCost', '', array('class' => 'form-control', 'placeholder' => '972582')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="projectManager" class="control-label">Initiating Project Manager:</label>
			  <div>
          {{ Form::text('projectManager', '', array('class' => 'form-control', 'placeholder' => 'Peter Roberts')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="contactNumber" class="control-label">Contact Number:</label>
			  <div>
          {{ Form::text('contactNumber', '', array('class' => 'form-control', 'placeholder' => '0456 743 865')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="projectTeam" class="control-label">Project Team:</label>
			  <div>
          {{ Form::text('projectTeam', '', array('class' => 'form-control', 'placeholder' => 'Comunities, Energy, Commercial Services')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="stateGovernment" class="control-label">State Government:</label>
			  <div>
          {{ Form::text('stateGoverment', '', array('class' => 'form-control', 'placeholder' => 'Queensland')); }}
			  </div>
			</div>
		 </td>
		</tr>
		 <tr>
		    <td>
			<div class="form-group">
			  <label for="propertyName" class="control-label">Property Name:</label>
			  <div>
          {{ Form::text('propertyName', '', array('class' => 'form-control', 'placeholder' => 'Gold Coast Hospital')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="landTenureDrop" class="control-label">Land Tenure:</label>
			  <div class="form-inline">
			  <select class="form-control" id="typeLandTenure">
			    <option value='N/A' selected>N/A</option>
			    <option value='Free Hold'>Free Hold</option>
			    <option value='Lease Hold'>Lease Hold</option>
			    <option value='Indigenous Hold'>Indigenous Hold</option>
			    <option value='Mining Lease'>Mining Lease</option>
			    <option value='Petroleum Lease'>Petroleum Lease</option>
			    <option value='Pipeline Lease'>Pipeline Lease</option>
			    <option value='Water Lease'>Water Lease</option>
			  </select>
          {{ Form::text('landTenureText', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="landownerName" class="control-label">Landowner Name:</label>
			  <div>
          {{ Form::text('landownerName', '', array('class' => 'form-control', 'placeholder' => 'Mike Freeman')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="regulatoryAuthority" class="control-label">Regulatory Authority:</label>
			  <div>
          {{ Form::text('regulatoryAuthority', '', array('class' => 'form-control', 'placeholder' => 'Southport Council')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="landownerDetails" class="control-label">Landowner Contact Details:</label>
			  <div>
          {{ Form::text('landownerDetails', '', array('class' => 'form-control', 'placeholder' => '0449 023 457')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="localGovernment" class="control-label">Local Government:</label>
			  <div>
          {{ Form::text('localGovernment', '', array('class' => 'form-control', 'placeholder' => 'Gold Coast')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="documentsReference" id="docs" class="control-label">Reference to Documents/Maps:</label>
			  <div>
          {{ Form::text('docsReference', '', array('class' => 'form-control', 'placeholder' => '1397265')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="areaLot" class="control-label">Area per Lot (mˆ2):</label>
			  <div>
          {{ Form::text('areaLot', '', array('class' => 'form-control', 'placeholder' => '200')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="gpsCoordinates" class="control-label">GPS Coordinates:</label>
			  <div>
          {{ Form::text('gpsCoordinates', '', array('class' => 'form-control', 'placeholder' => '2 5 28.797')); }}
			  </div>
			  <a id="loadMap" onclick='initialize();' href="#docs">Load Google Maps</a>
			  <a id="showMap" onclick='showMap();' href="#docs" hidden=true>Show Google Maps</a>
			  <a id="hideMap" onclick='hideMap();' href="#docs" hidden=true>Hide Google Maps</a>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="lotPlan" class="control-label">Lot on Plan:</label>
			  <div class="form-inline" id="lots">
          {{ Form::text('lotPlan1', '', array('class' => 'form-control', 'placeholder' => '')); }}
			    {{ Form::text('lotPlan2', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			    <div class="form-group">
			      <div>
				<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addLot()' data-toggle="tooltip"  data-placement="right" title="Add more Lots"></button>
			      </div>
			      </br>
			    </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td id="googleMap" colspan="2" style="height: 500px;" hidden="true">
			<input id="pac-input" class="controls" type="text" placeholder="Search Box">
			<div id="map-canvas" style="width:90%; height:100%;"></div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group" id="printV">
			  <div>
			    <button type="button" onclick='printVersion();' class="btn btn-default">Print Friendly Version</button>
			  </div>
			</div>
			<div class="form-group" id="exitV" hidden=true>
			  <div>
			    <button type="button" onclick='exitPrintVersion();' class="btn btn-default" hidden=true>Exit Print Version</button>
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <div>
			    <button type="submit" style="float: right" class="btn btn-success">Save</button>
			  </div>
			</div>
		      </td>
		    </tr>
		  </table>
		</div>
	      </form>
	    </div>
          </div>
        </div>
	  
	  <!------------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		<span class="badge pull-right">18</span>
		Design Team Details
	      </a>
	    </h4>
	  </div>
	  <div id="collapseTwo" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
		  20%
		</div>
	      </div>
	      <form class="form" role="form">
		<div class="table-responsive">
		  <table class="table" >
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="developName" class="control-label">Developer:</label>
			  <div>
          {{ Form::text('developerName', '', array('class' => 'form-control', 'placeholder' => 'Sophia Celli')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="urbanPlannerN" class="control-label">Urban Planner:</label>
			  <div>
          {{ Form::text('urbanPlannerName', '', array('class' => 'form-control', 'placeholder' => 'Christine Bezic')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="architectN" class="control-label">Architect:</label>
			  <div>
          {{ Form::text('architectName', '', array('class' => 'form-control', 'placeholder' => 'James Hook')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="accountantN" class="control-label">Accountant:</label>
			  <div>
          {{ Form::text('accountantName', '', array('class' => 'form-control', 'placeholder' => 'Henry Gomez')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="legalTeam" class="control-label">Legal Team:</label>
			  <div>
          {{ Form::text('legalTeam', '', array('class' => 'form-control', 'placeholder' => 'Peter White')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="civilEngineer" class="control-label">Civil Engineer:</label>
			  <div>
          {{ Form::text('civilEngineer', '', array('class' => 'form-control', 'placeholder' => 'Andrew Hawk')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="structuralConstructionE" class="control-label">Structural/Construction Engineer:</label>
			  <div>
          {{ Form::text('structuralConstructionEngineer', '', array('class' => 'form-control', 'placeholder' => 'Thomas Ellite')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="ecologistN" class="control-label">Ecologist:</label>
			  <div>
          {{ Form::text('ecologistName', '', array('class' => 'form-control', 'placeholder' => 'Susane Harryson')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="landscapeAr" class="control-label">Landscape Architect:</label>
			  <div>
			    <input type="text" class="form-control" id="landscapeArchitect" placeholder="Victor Hanz">
          {{ Form::text('landscapeArchitect', '', array('class' => 'form-control', 'placeholder' => 'Victor Hanz')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="trafficEngineer" class="control-label">Traffic Engineer:</label>
			  <div>
			    <input type="text" class="form-control" id="trafficEngineer" placeholder="Thomas Robert">
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="Surveyor" class="control-label">Surveyor:</label>
			  <div>
			    <input type="text" class="form-control" id="Surveyor" placeholder="Michael Collins">
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="geotechnicalSpecialist" class="control-label">Geotechnical Specialist:</label>
			  <div>
			    <input type="text" class="form-control" id="geotechnicalSpecialist" placeholder="Harry Jackson">
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="relationsAdvisor" class="control-label">Developer Landowner Relations Advisor:</label>
			  <div>
			    <input type="text" class="form-control" id="relationsAdvisor" placeholder="Phil Potter">
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="acousticEngineer" class="control-label">Acoustic Engineer:</label>
			  <div>
			    <input type="text" class="form-control" id="acousticEngineer" placeholder="Laura Hills">
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="hydrologyEngineer" class="control-label">Hydrology Engineer:</label>
			  <div>
			    <input type="text" class="form-control" id="hydrologyEngineer" placeholder="Tim Allan">
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="airQualitySpecialist" class="control-label">Air Quality Specialist:</label>
			  <div>
			    <input type="text" class="form-control" id="airQualitySpecialist" placeholder="Francisco Tall">
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <div>
			    <button type="submit" class="btn glyphicon glyphicon-plus btn-default" data-toggle="tooltip"  data-placement="right" title="Add more Professionals"></button>
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <div>
			    <button type="submit" class="btn btn-default">Save</button>
			  </div>
			</div>
		      </td>
		    </tr>
		  </table>
		</div>
	      </form>
	    </div>
	  </div>
	</div>
	<!------------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		<span class="badge pull-right">42</span>
		Type of Development
	      </a>
	    </h4>
	  </div>
	  <div id="collapseThree" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
		  20%
		</div>
	      </div>
	      <fieldset id="siteType">
	      <legend><span>Site Type</span></legend>
	      <div class="checkbox">
		<label>
		  <input type="checkbox" name="siteType" id="singleSite" onclick='checkSiteFields()' value="Single Site Development">
		    Single Site Development
		</label>
	      </div>
	      <div class="checkbox">
		<label>
		  <input type="checkbox" name="subdivisionType" id="subdivisionSite" onclick='checkLandFields()' value="Land Subdivision Site Development">
		    Land Subdivision Site Development
		</label>
	      </div>
	      </fieldset>
	      <fieldset id="developmentType">
	      <legend><span>Development Type</span></legend>
	      <div class="checkbox">
		<label>
		  <input type="checkbox" name="residentialType" id="residential" onclick='checkResidentialFields()' value="Residential Work">
		    Residential
		</label>
	      </div>
	      <div class="checkbox">
		<label>
		  <input type="checkbox" name="commercialType" id="commercial" onclick='checkCommercialFields()' value="Commercial Work">
		    Commercial
		</label>
	      </div>
	      <div class="checkbox">
		<label>
		  <input type="checkbox" name="industrialType" id="industrial" onclick='checkIndustrialFields()' value="Industrial Work">
		    Industrial
		</label>
	      </div>
	      <div class="checkbox">
		<label id="infrastructureRadio">
		  <input type="checkbox" name="infrastructureType" id="infrastructure" onclick='checkInfrastructureFields()' value="Infrastructure Work">
		    Infrastructure
		</label>
	      </div>
	    </fieldset>
	    <div class="table-responsive">
	      <form class="form" role="form">
		<fieldset id="singleSiteSummary" hidden=true>
		  <legend><span>Single Site Summary</span></legend>
		  <table class="table">
		    <tr>
		    <td>
		      <div class="form-group">
			<label for="tSiteArea" class="control-label">Total Site Area:</label>
			<div>
			  <input type="text" class="form-control" id="tSiteArea" placeholder="430">
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="numberBuildings" class="control-label">Number of Buildings:</label>
			<div>
			  <input type="text" class="form-control" id="numberBuildings" placeholder="350">
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="tBuildingGFA" class="control-label">Total Building GFA:</label>
			<div>
			  <input type="text" class="form-control" id="tBuildingGFA" placeholder="430">
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="tBuildingSite" class="control-label">Total Building Site Coverage:</label>
			<div>
			  <input type="text" class="form-control" id="tBuildingSite" placeholder="350">
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="tBuildingHeight" class="control-label">Total Building Height:</label>
			<div>
			  <input type="text" class="form-control" id="tBuildingHeight" placeholder="150">
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="tLandscapeSite" class="control-label">Total landscape site coverage:</label>
			<div>
			  <input type="text" class="form-control" id="tLandscapeSite" placeholder="3000">
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="tHardstandSite" class="control-label">Total hardstand site coverage:</label>
			<div>
			  <input type="text" class="form-control" id="tHardstandSite" placeholder="530">
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="tIngroundInfrastructure" class="control-label">Total in-ground infrastructure length :</label>
			<div>
			  <input type="text" class="form-control" id="tIngroundInfrastructure" placeholder="230">
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="sewerageTreatmentPlan" class="control-label">Onsite Sewerage Treatment Plan:</label>
			<div>
			  <select class="form-control" id="sewerageTreatmentPlan">
			    <option value='N/A' selected>N/A</option>
			    <option value='No'>No</option>
			    <option value='Yes'>Yes</option>
			  </select>
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="waterTreatmentPlant" class="control-label">Onsite Water Treatment Plant:</label>
			<div>
			  <select class="form-control" id="waterTreatmentPlant">
			    <option value='N/A' selected>N/A</option>
			    <option value='No'>No</option>
			    <option value='Yes'>Yes</option>
			  </select>
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="waterStorageUnit" class="control-label">Onsite Water Sotrage Units:</label>
			<div>
			  <select class="form-control" id="waterStorageUnit">
			    <option value='N/A' selected>N/A</option>
			    <option value='No'>No</option>
			    <option value='Yes'>Yes</option>
			  </select>
			</div>
		      </div>
		    </td>
		  </tr>
		</table>
	      </fieldset>
	      <fieldset id="buildingResidentialFormat" hidden=true>
		<legend><span>Building Residential Format</span></legend>
		<table class="table">
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="nFourBeds" class="control-label">No of 4 bedroom plus units:</label>
			<div>
			  <select class="form-control" id="nFourBeds">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="nThreeBeds" class="control-label">No of 3 bedroom units:</label>
			<div>
			  <select class="form-control" id="nThreeBeds">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="nTwoBeds" class="control-label">No of 2 bedroom units:</label>
			<div>
			  <select class="form-control" id="nTwoBeds">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="nOneBeds" class="control-label">No of 1 bedroom units:</label>
			<div>
			  <select class="form-control" id="nOneBeds">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		  </tr>
		</table>
	      </fieldset>
	      <fieldset id="buildingCommercialFormat" hidden=true>
		<legend><span>Building Commercial Format</span></legend>
		<table class="table">
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="n500" class="control-label">No of Units above 500 mˆ2:</label>
			<div>
			  <select class="form-control" id="n500">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="n250and500" class="control-label">No of Units between 250 and 500 mˆ2:</label>
			<div>
			  <select class="form-control" id="n250and500">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="n125and250" class="control-label">No of Units between 125 and 250 mˆ2:</label>
			<div>
			  <select class="form-control" id="n125and250">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="n125" class="control-label">No of Units below 125 mˆ2:</label>
			<div>
			  <select class="form-control" id="n125">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		  </tr>
		</table>
	      </fieldset>
	      <fieldset id="buildingIndustrialFormat" hidden=true>
		<legend><span>Building Industrial Format</span></legend>
		<table class="table">
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="n2500" class="control-label">No of Units above 2500 mˆ2:</label>
			<div>
			  <select class="form-control" id="n2500">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="n1000and2500" class="control-label">No of Units between 1000 and 2500 mˆ2:</label>
			<div>
			  <select class="form-control" id="n1000and2500">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="n500and1000" class="control-label">No of Units between 500 and 1000 mˆ2:</label>
			<div>
			  <select class="form-control" id="n500and1000">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="n500" class="control-label">No of Units below 500 mˆ2:</label>
			<div>
			  <select class="form-control" id="n500">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		  </tr>
		</table>
	      </fieldset>
	      <fieldset id="bufferRequirementsInfrastructure" hidden=true>
		<legend><span>Buffer Requirements to Infrastructure</span></legend>
		<table class="table">
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="bufferBuildings" class="control-label">Buffer to Buildings:</label>
			<div>
			  <input type="text" class="form-control" id="bufferBuildings" placeholder="">
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="bufferInfrastructure" class="control-label">Buffer to infrastructure plant:</label>
			<div>
			  <input type="text" class="form-control" id="bufferInfrastructure" placeholder="">
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="bufferInground" class="control-label">Buffer to inground infrastructure:</label>
			<div>
			  <input type="text" class="form-control" id="bufferInground" placeholder="">
			</div>
		      </div>
		    </td>
		  </tr>
		</table>
	      </fieldset>
	      <fieldset id="landSubdivisionSite" hidden=true>
		<legend><span>Land Subdivision Site Summary</span></legend>
		<table class="table">
		    <td>
		      <div class="form-group">
			<label for="tResidentialSites" class="control-label">Total No of Sites:</label>
			<div>
			  <select class="form-control" id="tResidentialSites">
			    <option value='0' selected>0</option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			  </select>
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="tMetresRoad" class="control-label">Total metres of road:</label>
			<div>
			  <input type="text" class="form-control" id="tMetresRoad" placeholder="750">
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="tParklandProposed" class="control-label">Total area of parkland proposed:</label>
			<div>
			  <input type="text" class="form-control" id="tParklandProposed" placeholder="200">
			</div>
		      </div>
		    </td>
		  </tr>
		</table>
	      </fieldset>
	      <fieldset id="developmentFormat" hidden=true>
		<legend><span>Development Format</span></legend>
		<table class="table">
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="lFootpathBike" class="control-label">Length of footpath/ bikeway (METRES):</label>
			<div>
			  <input type="text" class="form-control" id="lFootpathBike" placeholder="1500">
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="mLengthParks" class="control-label">Max. distance to parks (METRES):</label>
			<div>
			  <input type="text" class="form-control" id="mLengthParks" placeholder="2000">
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="mLengthShops" class="control-label">Max. distance to shops (METRES):</label>
			<div>
			  <input type="text" class="form-control" id="mLengthShops" placeholder="1800">
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="mLengthSchool" class="control-label">Max. distance to primary school (METRES):</label>
			<div>
			  <input type="text" class="form-control" id="mLengthSchool" placeholder="300">
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
			<label for="mLengthPublicTransport" class="control-label">Max. distance to public transport (METRES):</label>
			<div>
			  <input type="text" class="form-control" id="mLengthPublicTransport" placeholder="1500">
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="publicTransport" class="control-label">Opportunity for public transport within development:</label>
			<div>
			  <select class="form-control" id="publicTransport">
			    <option value='N/A' selected>N/A</option>
			    <option value='Yes'>Yes</option>
			    <option value='No'>No</option>
			  </select>
			</div>
		      </div>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <div class="form-group">
		        <label for="mLengthFacilities" class="control-label">Max. distance to community faciltiies (METRES):</label>
			<div>
			  <input type="text" class="form-control" id="mLengthFacilities" placeholder="2000">
			</div>
		      </div>
		    </td>
		  </tr>
		</table>
	      </fieldset>
	    </form>
	  </div>
        </div>
      </div>
    </div>
@stop