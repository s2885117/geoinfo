@extends('layout')
@section('title')
Infrastruction
@stop
@section('infraState')
class="active"
@stop
@section('body')
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#overview" href="#collapseOne">
		  <span class="badge pull-right">53</span>
		    Infrastructure for Operation
		</a>
	      </h4>
	    </div>
	  <div id="collapseOne" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
		  40%
		</div>
	      </div>
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table" id="infrastructureTable">
		    <thead>
		      <tr>
			<th>Infrastructure for operation</th>
			<th style="text-align: center">No.</th>
			<th style="text-align: center">Comments / Description / Indicative Area Size / Length etc.</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
			<td>Access Roads</td>
			<td>{{ Form::text('accessRoadsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('accessRoadsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Infrastructure Corridors</td>
			<td>{{ Form::text('infrastructureCorridorsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('infrastructureCorridorsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Fixed Infrastructure (e.g. substation)</td>
			<td>{{ Form::text('fixedInfrastructureNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('fixedInfrastructureD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Water Tanks</td>
			<td>{{ Form::text('waterTanksNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('waterTanksD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Site office</td>
			<td>{{ Form::text('siteOfficeNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('siteOfficeD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Communications Tower</td>
			<td>{{ Form::text('communicationsTowerNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('communicationsTowerD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Waste Disposal Pit (e.g. oils)</td>
			<td>{{ Form::text('wasteDisposalNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('wasteDisposaD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>On-site water treatment plant</td>
			<td>{{ Form::text('waterTreatmentNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('waterTreatmentD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>On-site sewerage treatment plant</td>
			<td>{{ Form::text('sewerageTreatmentNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td> {{ Form::text('sewerageTreatmentD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>On-site renewable energy plant</td>
			<td>{{ Form::text('renewableEnergyNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('renewableEnergyD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>On-site water feature</td>
			<td>{{ Form::text('waterFeatureNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('waterFeatureD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Exhaust stack</td>
			<td>{{ Form::text('exhaustStackNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('exhaustStackD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>On-site community cooling faciltiies</td>
			<td>{{ Form::text('communityCoolingNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td> {{ Form::text('communityCoolingD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Heavy Vehicle Turnarounds</td>
			<td>{{ Form::text('vehicleTurnaroundsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('vehicleTurnaroundsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Above-ground carparking</td>
			<td>{{ Form::text('aboveCarParkingNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('aboveCarParkingD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Under-ground carparking</td>
			<td>{{ Form::text('underCarParkingNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('underCarParkingD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		       <tr>
			<td>On-site flood mitigation infrastructure (e.g.pumps)</td>
			<td>{{ Form::text('floodMitigationNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td> {{ Form::text('floodMitigationD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		       <tr>
			<td>Irrigation Areas</td>
			<td>{{ Form::text('irrigationAreasNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td> {{ Form::text('irrigationAreasD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Irrigation Facilities (pumps, tanks, etc.)</td>
			<td>{{ Form::text('irrigationFacilitiesNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('irrigationFacilitiesD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Irrigation Water Pipes</td>
			<td>{{ Form::text('waterPipesNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td> {{ Form::text('waterPipesD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
            
		      </tr>
		      <tr>
			<td>Stormwater Retention Systems</td>
			<td>{{ Form::text('retentionSystemsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('retentionSystemsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Stormwater Detention Systems</td>
			<td>{{ Form::text('detentionSystemsNo', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
			<td>{{ Form::text('detentionSystemsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Retaining Walls</td>
			<td> {{ Form::text('retainingWallsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('retainingWallsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		    </tbody>
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
		<span class="badge pull-right">25</span>
		Operational Works
	      </a>
	    </h4>
	  </div>
	  <div id="collapseTwo" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
		  80%
		</div>
	      </div>
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table" id="operationalTable">
		    <thead>
		      <tr>
			<th>Infrastructure for operation</th>
			<th style="text-align: center">No.</th>
			<th style="text-align: center">Comments / Description / Indicative Area Size / Length etc.</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
			<td>Earthworks and Retaining Walls</td>
			<td> {{ Form::text('earthworksNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td> {{ Form::text('earthworksD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Access Roads</td>
			<td> {{ Form::text('accessRoadsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td> {{ Form::text('accessRoadsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Construction Camps</td>
			<td> {{ Form::text('constructionCampsNo', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
			<td> {{ Form::text('constructionCampsD', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
		      </tr>
		      <tr>
			<td>Lay Down Areas</td>
			<td>{{ Form::text('layDownAreasNo', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
			<td>{{ Form::text('layDownAreasD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Site Offices</td>
			<td>{{ Form::text('operationalSiteOfficeNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('operationalSiteOfficeD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Truck Turnarounds</td>
			<td>{{ Form::text('truckTurnaroundsNo', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
			<td>{{ Form::text('truckTurnaroundsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>Workshops</td>
			<td>{{ Form::text('workshopsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('workshopsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		    </tbody>
		  </table>
		</form>
	      </div>
	    </div>
	  </div>
	</div>
@stop