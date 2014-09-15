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
      {{ Form::open(array('action' => array('OverviewController@update', $id), 'class' => 'form')) }}
      <div class="table-responsive">
        <table class="table">
          <tr>
            <td colspan="2">
              <div class="form-group">
                <label for="projectName" class="control-label">Project Name:</label>
                <div>
                  @if (isset($overview->projectName))
                  {{ Form::text('projectName', $overview->projectName, array('class' => 'form-control', 'placeholder' => 'Gold Coast University Hospital')); }}
                  @else
                  {{ Form::text('projectName', '', array('class' => 'form-control', 'placeholder' => 'Gold Coast University Hospital')); }}
                  @endif
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
                  {{ Form::text('stateGovernment', '', array('class' => 'form-control', 'placeholder' => 'Queensland')); }}
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
                  {{ Form::select('landTenureDrop', array(
                  'NULL' => 'N/A', 
                  'free_hold' => 'Free Hold',
                  'Lease hold' => 'Lease hold',
                  'Indigenous Hold' => 'Indeigenous Hold',
                  'Mining Lease' => 'Mining Lease',
                  'Petroleum Lease' => 'Petroleum Lease',
                  'Pipeline Lease' => 'Pipeline Lease',
                  'Water Lease' => 'Water lease'), 
                  '', array('class' => 'form-control')); }}
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
                  <br/>
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
                  {{ Form::text('landscapeArchitect', '', array('class' => 'form-control', 'placeholder' => 'Victor Hanz')); }}
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="trafficEngineer" class="control-label">Traffic Engineer:</label>
                <div>
                   {{ Form::text('trafficEngineer', '', array('class' => 'form-control', 'placeholder' => 'Thomas Robert')); }}
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="Surveyor" class="control-label">Surveyor:</label>
                <div>
                  {{ Form::text('surveyor', '', array('class' => 'form-control', 'placeholder' => 'Michael Collins')); }}   
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="geotechnicalSpecialist" class="control-label">Geotechnical Specialist:</label>
                <div>
                  {{ Form::text('geotechnicalSpecialist', '', array('class' => 'form-control', 'placeholder' => 'Harry Jackson')); }}   
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="relationsAdvisor" class="control-label">Developer Landowner Relations Advisor:</label>
                <div>
                  {{ Form::text('relationsAdvisor', '', array('class' => 'form-control', 'placeholder' => 'Phil Potter')); }}
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="acousticEngineer" class="control-label">Acoustic Engineer:</label>
                <div>
                  {{ Form::text('acousticEngineer', '', array('class' => 'form-control', 'placeholder' => 'Laura Hills')); }}
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="hydrologyEngineer" class="control-label">Hydrology Engineer:</label>
                <div>
                  {{ Form::text('hydrologyEngineer', '', array('class' => 'form-control', 'placeholder' => 'Tim Allan')); }}
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="airQualitySpecialist" class="control-label">Air Quality Specialist:</label>
                <div>
                  {{ Form::text('airQualitySpecialist', '', array('class' => 'form-control', 'placeholder' => 'Francisco Tall')); }}
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
            <input type="checkbox" name="siteType" id="" onclick='checkSiteFields()' value="Single Site Development">
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
        <fieldset id="singleSiteSummary" hidden=true>
          <legend><span>Single Site Summary</span></legend>
          <table class="table">
            <tr>
              <td>
                <div class="form-group">
                  <label for="tSiteArea" class="control-label">Total Site Area:</label>
                  <div>
                    {{ Form::text('tSiteArea', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="numberBuildings" class="control-label">Number of Buildings:</label>
                  <div>
                    {{ Form::text('numberBuildings', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="tBuildingGFA" class="control-label">Total Building GFA:</label>
                  <div>
                    {{ Form::text('tBuildingGFA', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="tBuildingSite" class="control-label">Total Building Site Coverage:</label>
                  <div>
                    {{ Form::text('tBuildingSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="tBuildingHeight" class="control-label">Total Building Height:</label>
                  <div>
                    {{ Form::text('tBuildingHeight', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="tLandscapeSite" class="control-label">Total landscape site coverage:</label>
                  <div>
                    {{ Form::text('tLandscapeSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="tHardstandSite" class="control-label">Total hardstand site coverage:</label>
                  <div>
                    {{ Form::text('tHardstandSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="tIngroundInfrastructure" class="control-label">Total in-ground infrastructure length :</label>
                  <div>
                    {{ Form::text('tIngroundInfrastructure', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="sewerageTreatmentPlan" class="control-label">Onsite Sewerage Treatment Plan:</label>
                  <div>
                    {{ Form::select('sewerageTreatmentPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="waterTreatmentPlant" class="control-label">Onsite Water Treatment Plant:</label>
                  <div>
                    {{ Form::select('waterTreatmentPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="waterStorageUnit" class="control-label">Onsite Water Sotrage Units:</label>
                  <div>
                    {{ Form::select('waterStorageUnit', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
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
                    {{ Form::select('nFourBeds', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'),
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="nThreeBeds" class="control-label">No of 3 bedroom units:</label>
                  <div>
                    {{ Form::select('nThreeBeds', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="nTwoBeds" class="control-label">No of 2 bedroom units:</label>
                  <div>
                    {{ Form::select('nTwoBeds', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="nOneBeds" class="control-label">No of 1 bedroom units:</label>
                  <div>
                    {{ Form::select('nOneBeds', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
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
                    {{ Form::select('n500', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="n250and500" class="control-label">No of Units between 250 and 500 mˆ2:</label>
                  <div>
                    {{ Form::select('n250and500', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="n125and250" class="control-label">No of Units between 125 and 250 mˆ2:</label>
                  <div>
                    {{ Form::select('n125and250', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'),  
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="n125" class="control-label">No of Units below 125 mˆ2:</label>
                  <div>
                    {{ Form::select('nBelow125', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
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
                    {{ Form::select('n2500', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="n1000and2500" class="control-label">No of Units between 1000 and 2500 mˆ2:</label>
                  <div>
                    {{ Form::select('n1000and2500', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="n500and1000" class="control-label">No of Units between 500 and 1000 mˆ2:</label>
                  <div>
                    {{ Form::select('n500and1000', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="n500" class="control-label">No of Units below 500 mˆ2:</label>
                  <div>
                    {{ Form::select('nBelow500', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
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
                    {{ Form::text('bufferedBuildings', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="bufferInfrastructure" class="control-label">Buffer to infrastructure plant:</label>
                  <div>
                    {{ Form::text('bufferInfrastructure', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="bufferInground" class="control-label">Buffer to inground infrastructure:</label>
                  <div>
                    {{ Form::text('bufferInground', '', array('class' => 'form-control', 'placeholder' => '')); }}
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
                  {{ Form::select('tResidentialSites', array(
                    '0' => '0',
                    '1' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5'), 
                    NULL, array('class' => 'form-control')); }}
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="tMetresRoad" class="control-label">Total metres of road:</label>
                <div>
                  {{ Form::text('tMetresRoad', '', array('class' => 'form-control', 'placeholder' => '')); }}
                </div>
              </div>
            </td>
            <tr>
              <td>
                <div class="form-group">
                  <label for="tParklandProposed" class="control-label">Total area of parkland proposed:</label>
                  <div>
                    {{ Form::text('tParklandProposed', '', array('class' => 'form-control', 'placeholder' => '')); }}
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
                    {{ Form::text('lFootpathBike', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="mLengthParks" class="control-label">Max. distance to parks (METRES):</label>
                  <div>
                    {{ Form::text('mLengthParks', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="mLengthShops" class="control-label">Max. distance to shops (METRES):</label>
                  <div>
                    {{ Form::text('mLengthShops', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="mLengthSchool" class="control-label">Max. distance to primary school (METRES):</label>
                  <div>
                    {{ Form::text('mLengthSchool', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="mLengthPublicTransport" class="control-label">Max. distance to public transport (METRES):</label>
                  <div>
                    {{ Form::text('mLengthPublicTransport', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="publicTransport" class="control-label">Opportunity for public transport within development:</label>
                  <div>
                    {{ Form::select('publicTransport', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'), 
                    NULL, array('class' => 'form-control')); }}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="mLengthFacilities" class="control-label">Max. distance to community faciltiies (METRES):</label>
                  <div>
                    {{ Form::text('mLenthFacilities', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </fieldset>
        {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
      </div>
    </div>
  </div>
</div>
@stop