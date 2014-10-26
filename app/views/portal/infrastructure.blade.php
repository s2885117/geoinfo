@extends('layout')
@section('title')
Infrastructure
@stop
@section('infraState')
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
        {{ Form::open(array('action' => array('InfrastructureController@update', $id), 'class' => 'form')) }}
        <label for="InfraforOpComment" class="control-label">Describe the operations of the proposed development (e.g. proposed hours of operation, number of personnel, vehicle movement, proposed site visitor numbers, proposed residential population, proposed employee population)</label><br />
            @if (isset($infrastructure))
                {{ Form::textarea('InfraforOpComment', $infrastructure->InfraforOpComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
            @else
                {{ Form::textarea('InfraforOpComment', '', array('class' => 'form-control', 'style' => 'width:100%',  'maxlength' => '2000')); }}
            @endif
        <table class="table" id="infrastructureTable">
          <thead>
            <tr>
              <th>Infrastructure for operation</th>
              <th style="text-align: center">No.</th>
              <th style="text-align: center">Comments / Description / Indicative Area Size / Length etc.</th>
            </tr>
          </thead>
          <tbody>
            @if (isset($infrastructure))
            <tr>
              <td>Access Roads</td>
              <td>
                {{ Form::text('accessRoadNo', $infrastructure->accessRoadNo, array('class' => 'form-control', 'placeholder' => '')); }}
                </td>
              <td>{{ Form::text('accessRoadD', $infrastructure->accessRoadD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Infrastructure Corridors</td>
              <td>{{ Form::text('infrastructureCorridorsNo', $infrastructure->infrastructureCorridorsNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('infrastructureCorridorsD', $infrastructure->infrastructureCorridorsD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Fixed Infrastructure (e.g. substation)</td>
              <td>{{ Form::text('fixedInfrastructureNo', $infrastructure->fixedInfrastructureNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('fixedInfrastructureD', $infrastructure->fixedInfrastructureD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Water Tanks</td>
              <td>{{ Form::text('waterTanksNo', $infrastructure->waterTanksNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('waterTanksD', $infrastructure->waterTanksD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Site office</td>
              <td>{{ Form::text('siteOfficeNo', $infrastructure->siteOfficeNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('siteOfficeD', $infrastructure->siteOfficeD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Communications Tower</td>
              <td>{{ Form::text('communicationsTowerNo', $infrastructure->communicationsTowerNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('communicationsTowerD', $infrastructure->communicationsTowerD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Waste Disposal Pit (e.g. oils)</td>
              <td>{{ Form::text('wasteDisposalNo', $infrastructure->wasteDisposalNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('wasteDisposalD', $infrastructure->wasteDisposalD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site water treatment plant</td>
              <td>{{ Form::text('waterTreatmentNo', $infrastructure->waterTreatmentNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('waterTreatmentD', $infrastructure->waterTreatmentD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site sewerage treatment plant</td>
              <td>{{ Form::text('sewerageTreatmentNo', $infrastructure->sewerageTreatmentNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('sewerageTreatmentD', $infrastructure->sewerageTreatmentD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site renewable energy plant</td>
              <td>{{ Form::text('renewableEnergyNo', $infrastructure->renewableEnergyNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('renewableEnergyD', $infrastructure->renewableEnergyD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site water feature</td>
              <td>{{ Form::text('waterFeatureNo', $infrastructure->waterFeatureNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('waterFeatureD', $infrastructure->waterFeatureD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Exhaust stack</td>
              <td>{{ Form::text('exhaustStackNo', $infrastructure->exhaustStackNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('exhaustStackD', $infrastructure->exhaustStackD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site community cooling faciltiies</td>
              <td>{{ Form::text('communityCoolingNo', $infrastructure->communityCoolingNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('communityCoolingD', $infrastructure->communityCoolingD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Heavy Vehicle Turnarounds</td>
              <td>{{ Form::text('vehicleTurnaroundsNo', $infrastructure->vehicleTurnaroundsNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('vehicleTurnaroundsD', $infrastructure->vehicleTurnaroundsD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Above-ground carparking</td>
              <td>{{ Form::text('aboveCarParkingNo', $infrastructure->aboveCarParkingNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('aboveCarParkingD', $infrastructure->aboveCarParkingD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Under-ground carparking</td>
              <td>{{ Form::text('underCarParkingNo', $infrastructure->underCarParkingNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('underCarParkingD', $infrastructure->underCarParkingD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site flood mitigation infrastructure (e.g.pumps)</td>
              <td>{{ Form::text('floodMitigationNo', $infrastructure->floodMitigationNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('floodMitigationD', $infrastructure->floodMitigationD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Irrigation Areas</td>
              <td>{{ Form::text('irrigationAreasNo', $infrastructure->irrigationAreasNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('irrigationAreasD', $infrastructure->irrigationAreasD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Irrigation Facilities (pumps, tanks, etc.)</td>
              <td>{{ Form::text('irrigationFacilitiesNo', $infrastructure->irrigationFacilitiesNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('irrigationFacilitiesD', $infrastructure->irrigationFacilitiesD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Irrigation Water Pipes</td>
              <td>{{ Form::text('waterPipesNo', $infrastructure->waterPipesNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('waterPipesD', $infrastructure->waterPipesD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Stormwater Retention Systems</td>
              <td>{{ Form::text('retentionSystemsNo', $infrastructure->retentionSystemsNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('retentionSystemsD', $infrastructure->retentionSystemsD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Stormwater Detention Systems</td>
              <td>{{ Form::text('detentionSystemsNo', $infrastructure->detentionSystemsNo, array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td>{{ Form::text('detentionSystemsD', $infrastructure->detentionSystemsD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Retaining Walls</td>
              <td> {{ Form::text('retainingWallsNo', $infrastructure->retainingWallsNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('retainingWallsD', $infrastructure->retainingWallsD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            @else
            <tr>
              <td>Access Roads</td>
              <td>{{ Form::text('accessRoadsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('accessRoadsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Infrastructure Corridors</td>
              <td>{{ Form::text('infrastructureCorridorsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('infrastructureCorridorsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Fixed Infrastructure (e.g. substation)</td>
              <td>{{ Form::text('fixedInfrastructureNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('fixedInfrastructureD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Water Tanks</td>
              <td>{{ Form::text('waterTanksNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('waterTanksD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Site office</td>
              <td>{{ Form::text('siteOfficeNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('siteOfficeD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Communications Tower</td>
              <td>{{ Form::text('communicationsTowerNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('communicationsTowerD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Waste Disposal Pit (e.g. oils)</td>
              <td>{{ Form::text('wasteDisposalNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('wasteDisposalD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site water treatment plant</td>
              <td>{{ Form::text('waterTreatmentNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('waterTreatmentD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site sewerage treatment plant</td>
              <td>{{ Form::text('sewerageTreatmentNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('sewerageTreatmentD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site renewable energy plant</td>
              <td>{{ Form::text('renewableEnergyNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('renewableEnergyD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site water feature</td>
              <td>{{ Form::text('waterFeatureNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('waterFeatureD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Exhaust stack</td>
              <td>{{ Form::text('exhaustStackNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('exhaustStackD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site community cooling faciltiies</td>
              <td>{{ Form::text('communityCoolingNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('communityCoolingD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Heavy Vehicle Turnarounds</td>
              <td>{{ Form::text('vehicleTurnaroundsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('vehicleTurnaroundsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Above-ground carparking</td>
              <td>{{ Form::text('aboveCarParkingNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('aboveCarParkingD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Under-ground carparking</td>
              <td>{{ Form::text('underCarParkingNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('underCarParkingD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>On-site flood mitigation infrastructure (e.g.pumps)</td>
              <td>{{ Form::text('floodMitigationNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('floodMitigationD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Irrigation Areas</td>
              <td>{{ Form::text('irrigationAreasNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('irrigationAreasD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Irrigation Facilities (pumps, tanks, etc.)</td>
              <td>{{ Form::text('irrigationFacilitiesNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('irrigationFacilitiesD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Irrigation Water Pipes</td>
              <td>{{ Form::text('waterPipesNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('waterPipesD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>

            </tr>
            <tr>
              <td>Stormwater Retention Systems</td>
              <td>{{ Form::text('retentionSystemsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('retentionSystemsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Stormwater Detention Systems</td>
              <td>{{ Form::text('detentionSystemsNo', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td>{{ Form::text('detentionSystemsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Retaining Walls</td>
              <td> {{ Form::text('retainingWallsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('retainingWallsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            @endif
          </tbody>
        </table>
        {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
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
        <label for="OpWorksComment" class="control-label">Describe the operations of the proposed development (e.g. proposed hours of operation, number of personnel, vehicle movement, proposed site visitor numbers, proposed employee population)</label><br />
            @if (isset($infrastructure))
                {{ Form::textarea('OpWorksComment', $infrastructure->OpWorksComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
            @else
                {{ Form::textarea('OpWorksComment', '', array('class' => 'form-control', 'style' => 'width:100%',  'maxlength' => '2000')); }}
            @endif
        <table class="table" id="operationalTable">
          <thead>
            <tr>
              <th>Infrastructure for operation</th>
              <th style="text-align: center">No.</th>
              <th style="text-align: center">Comments / Description / Indicative Area Size / Length etc.</th>
            </tr>
          </thead>
          <tbody>
            @if (isset($infrastructure))
            <tr>
              <td>Earthworks and Retaining Walls</td>
              <td> {{ Form::text('earthworksNo', $infrastructure->earthworksNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('earthworksD', $infrastructure->earthworksD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Access Roads</td>
              <td> {{ Form::text('accessRoadsNo', $infrastructure->accessRoadsNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('accessRoadsD', $infrastructure->accessRoadsD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Construction Camps</td>
              <td> {{ Form::text('constructionCampsNo', $infrastructure->constructionCampsNo, array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td> {{ Form::text('constructionCampsD', $infrastructure->constructionCampsD, array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Lay Down Areas</td>
              <td>{{ Form::text('layDownAreasNo', $infrastructure->layDownAreasNo, array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td>{{ Form::text('layDownAreasD', $infrastructure->layDownAreasD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Site Offices</td>
              <td>{{ Form::text('operationalSiteOfficeNo', $infrastructure->operationalSiteOfficeNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('operationalSiteOfficeD', $infrastructure->operationalSiteOfficeD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Truck Turnarounds</td>
              <td>{{ Form::text('truckTurnaroundsNo', $infrastructure->truckTurnaroundsNo, array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td>{{ Form::text('truckTurnaroundsD', $infrastructure->truckTurnaroundsD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Workshops</td>
              <td>{{ Form::text('workshopsNo', $infrastructure->workshopsNo, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('workshopsD', $infrastructure->workshopsD, array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            @else
            <tr>
              <td>Earthworks and Retaining Walls</td>
              <td> {{ Form::text('earthworksNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('earthworksD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Access Roads</td>
              <td> {{ Form::text('accessRoadsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td> {{ Form::text('accessRoadsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Construction Camps</td>
              <td> {{ Form::text('constructionCampsNo', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td> {{ Form::text('constructionCampsD', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Lay Down Areas</td>
              <td>{{ Form::text('layDownAreasNo', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td>{{ Form::text('layDownAreasD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Site Offices</td>
              <td>{{ Form::text('operationalSiteOfficeNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('operationalSiteOfficeD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Truck Turnarounds</td>
              <td>{{ Form::text('truckTurnaroundsNo', '', array('class' => 'form-control', 'placeholder' => '')); }} </td>
              <td>{{ Form::text('truckTurnaroundsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            <tr>
              <td>Workshops</td>
              <td>{{ Form::text('workshopsNo', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>{{ Form::text('workshopsD', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
              <td>
            <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
          </td>
            </tr>
            @endif
          </tbody>
        </table>
        {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
      </div>
    </div>
  </div>
</div>

<!--------------------------------------------------------------------------------------------------------------------------------------->
<div class="panel panel-default"><!-- insert into Nitrous.IO -->
	    <div class="panel-heading">
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#overview" href="#collapseThree">
		  <span class="badge pull-right">2</span>
		    Gravel/Fill
		</a>
	      </h4>
	    </div>
	  <div id="collapseThree" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
		  5%
		</div>
	      </div>
	      <div class="table-responsive">
		  <table class="table">
        <tr>
          <td>
           Is a Gravel Permit required?
          </td>
          <td>
            @if (isset($infrastructure))
            {{ Form::select('GravelFillPermitReq', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $infrastructure->GravelFillPermitReq, array('class' => 'form-control')); }}
            @else
            {{ Form::select('GravelFillPermitReq', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
          </td>
          <td>
            @if (isset($infrastructure))
            {{ Form::text('GravelFillPermitReqEntity', $infrastructure->GravelFillPermitReqEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
            {{ Form::text('GravelFillPermitReqEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a gravel transport permit required?
          </td>
          <td>
            @if (isset($infrastructure))
            {{ Form::select('GravelFillTransPermitReq', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $infrastructure->GravelFillTransPermitReq, array('class' => 'form-control')); }}
            @else
            {{ Form::select('GravelFillTransPermitReq', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
          </td>
          <td>
            @if (isset($infrastructure))
            {{ Form::text('GravelFillTransPermitReqEntity', $infrastructure->GravelFillTransPermitReqEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
            {{ Form::text('GravelFillTransPermitReqEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
		  </table>
          {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
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
		Top Soil
	      </a>
	    </h4>
	  </div>
	  <div id="collapseFour" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
		  10%
		</div>
	      </div>
	      <div class="table-responsive">
		  <table class="table">
        <tr>
          <td>
           Is a top soil permit required?
          </td>
          <td>
            @if (isset($infrastructure))
            {{ Form::select('TopSoilPermitReq', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $infrastructure->TopSoilPermitReq, array('class' => 'form-control')); }}
            @else
            {{ Form::select('TopSoilPermitReq', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
          </td>
          <td>
            @if (isset($infrastructure))
            {{ Form::text('TopSoilPermitReqEntity', $infrastructure->TopSoilPermitReqEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
            {{ Form::text('TopSoilPermitReqEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
        <tr>
          <td>
           Is a Top Soil transport permit required?
          </td>
          <td>
            @if (isset($infrastructure))
            {{ Form::select('TopSoilTransPermitReq', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $infrastructure->TopSoilTransPermitReq, array('class' => 'form-control')); }}
            @else
            {{ Form::select('TopSoilTransPermitReq', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
            @endif
          </td>
          <td>
            @if (isset($infrastructure))
            {{ Form::text('TopSoilTransPermitReqEntity', $infrastructure->TopSoilTransPermitReqEntity, array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @else
            {{ Form::text('TopSoilTransPermitReqEntity', '', array('class' => 'form-control', 'placeholder' => 'If Yes, Position and Entity')); }}
            @endif
          </td>
          <td>
            <button type="button" class="btn glyphicon glyphicon glyphicon-export btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Upload Document"></button>
          </td>
        </tr>
		  </table>
          {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
	      </div>
	    </div>
	  </div>
	</div><!-- insert into Nitrous.IO -->
@stop