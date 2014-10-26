@extends('layout')
@section('title')
Project Overview
@stop
@section('projectState')
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
      <label for="ProjDescComment" class="control-label">Project Description:</label><br />
        @if (isset($overview))
        {{ Form::textarea('ProjDescComment', $overview->ProjDescComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @else
        {{ Form::textarea('ProjDescComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @endif
      <div class="table-responsive">
        <table class="table">
          <tr>
            <td colspan="2">
              <div class="form-group">
                <label for="projectName" class="control-label">Project Name:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('projectName', $overview->projectName, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('projectName', '', array('class' => 'form-control', 'placeholder' => '')); }}
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
                  @if (isset($overview))
                  {{ Form::text('startDate', $overview->startDate, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('startDate', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="approvalCost" class="control-label">Approval Cost Code:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('approvalCost', $overview->approvalCost, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('approvalCost', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="projectManager" class="control-label">Initiating Project Manager:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('projectManager', $overview->projectManager, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('projectManager', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="contactNumber" class="control-label">Contact Number:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('contactNumber', $overview->contactNumber, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('contactNumber', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="projectTeam" class="control-label">Project Team:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('projectTeam', $overview->projectTeam, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('projectTeam', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="stateGovernment" class="control-label">State Government:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('stateGovernment', $overview->stateGovernment, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('stateGovernment', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="propertyName" class="control-label">Property Name:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('propertyName', $overview->propertyName, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('propertyName', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="landTenureDrop" class="control-label">Land Tenure:</label>
                <div class="form-inline">
                  @if (isset($overview))
                  {{ Form::select('landTenureDrop', array(
                  'NULL' => 'N/A', 
                  'free_hold' => 'Free Hold',
                  'Lease hold' => 'Lease hold',
                  'Indigenous Hold' => 'Indeigenous Hold',
                  'Mining Lease' => 'Mining Lease',
                  'Petroleum Lease' => 'Petroleum Lease',
                  'Pipeline Lease' => 'Pipeline Lease',
                  'Water Lease' => 'Water lease'), 
                  $overview->landTenureDrop, array('class' => 'form-control')); }}
                  {{ Form::text('landTenureText', $overview->landTenureText, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
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
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="landownerName" class="control-label">Landowner Name:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('landownerName', $overview->landownerName, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('landownerName', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="regulatoryAuthority" class="control-label">Regulatory Authority:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('regulatoryAuthority', $overview->regulatoryAuthority, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('regulatoryAuthority', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="landownerDetails" class="control-label">Landowner Contact Details:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('landownerDetails', $overview->landownerDetails, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('landownerDetails', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="localGovernment" class="control-label">Local Government:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('localGovernment', $overview->localGovernment, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('localGovernment', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="documentsReference" id="docs" class="control-label">Reference to Documents/Maps:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('docsReference', $overview->docsReference, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('docsReference', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="areaLot" class="control-label">Area per Lot (mˆ2):</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('areaLot', $overview->areaLot, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('areaLot', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="gpsCoordinates" class="control-label">GPS Coordinates:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('gpsCoordinates', $overview->gpsCoordinates, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('gpsCoordinates', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
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
                  @if (isset($overview))
                  {{ Form::text('lotPlan1', $overview->lotPlan1, array('class' => 'form-control', 'placeholder' => '')); }}
                  {{ Form::text('lotPlan2', $overview->lotPlan2, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('lotPlan1', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  {{ Form::text('lotPlan2', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
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
                  @if (isset($overview))
                  {{ Form::text('developerName', $overview->developerName, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('developerName', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="urbanPlannerN" class="control-label">Urban Planner:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('urbanPlannerName', $overview->urbanPlannerName, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('urbanPlannerName', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="architectN" class="control-label">Architect:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('architectName', $overview->architectName, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('architectName', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="accountantN" class="control-label">Accountant:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('accountantName', $overview->accountantName, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('accountantName', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="legalTeam" class="control-label">Legal Team:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('legalTeam', $overview->legalTeam, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('legalTeam', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="civilEngineer" class="control-label">Civil Engineer:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('civilEngineer', $overview->civilEngineer, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('civilEngineer', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="structuralConstructionEngineer" class="control-label">Structural/Construction Engineer:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('structuralConstructionEngineer', $overview->structuralConstructionEngineer, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('structuralConstructionEngineer', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="ecologistName" class="control-label">Ecologist:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('ecologistName', $overview->ecologistName, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('ecologistName', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="landscapeArchitect" class="control-label">Landscape Architect:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('landscapeArchitect', $overview->landscapeArchitect, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('landscapeArchitect', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="trafficEngineer" class="control-label">Traffic Engineer:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('trafficEngineer', $overview->trafficEngineer, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('trafficEngineer', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="Surveyor" class="control-label">Surveyor:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('surveyor', $overview->surveyor, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('surveyor', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="geotechnicalSpecialist" class="control-label">Geotechnical Specialist:</label>
                <div> 
                  @if (isset($overview))
                  {{ Form::text('geotechnicalSpecialist', $overview->geotechnicalSpecialist, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('geotechnicalSpecialist', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="relationsAdvisor" class="control-label">Developer Landowner Relations Advisor:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('relationsAdvisor', $overview->relationsAdvisor, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('relationsAdvisor', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="acousticEngineer" class="control-label">Acoustic Engineer:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('acousticEngineer', $overview->acousticEngineer, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('acousticEngineer', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="hydrologyEngineer" class="control-label">Hydrology Engineer:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('hydrologyEngineer', $overview->hydrologyEngineer, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('hydrologyEngineer', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="airQualitySpecialist" class="control-label">Air Quality Specialist:</label>
                <div>
                  @if (isset($overview))
                  {{ Form::text('airQualitySpecialist', $overview->airQualitySpecialist, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('airQualitySpecialist', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
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
      <fieldset id="siteType" class="col-xs-6 col-sm-4">
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
      <fieldset id="developmentType" class="col-xs-6 col-sm-4">
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
      <fieldset id="constructionType">
        <legend><span>Construction Type</span></legend>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="officeType" id="residential" value="Office Type">
            Office
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="retailType" id="commercial" value="Retail Type">
            Retail
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="schoolType" id="industrial" value="School Type">
            School
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Hospital" id="hospital" value="Hospital">
            Hospital
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Community" id="Community" value="Community/ Community Health Centre">
            Community / Community Health Centre
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Parkland" id="Parkland" value="Parkland">
            Parkland
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="otherType" id="infrastructure" value="Other Type">
            Other Type
          </label>
        </div>
      </fieldset>
      <div class="table-responsive">
        <fieldset id="landSubdivisionSite" hidden=true>
          <legend><span>Land Subdivision Site Summary</span></legend>
          <table class="table">
            <td>
              <div class="form-group">
                Total No of Sites:
                <div>
                  @if (isset($overview))
                  {{ Form::select('tResidentialSites', array(
                  '0' => '0',
                  '1' => '2',
                  '3' => '3',
                  '4' => '4',
                  '5' => '5'), 
                  $overview->tResidentialSites, array('class' => 'form-control')); }}
                  @else
                  {{ Form::select('tResidentialSites', array(
                  '0' => '0',
                  '1' => '2',
                  '3' => '3',
                  '4' => '4',
                  '5' => '5'), 
                  NULL, array('class' => 'form-control')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                Total metres of road:
                <div>
                  @if (isset($overview))
                  {{ Form::text('tMetresRoad', $overview->tMetresRoad, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('tMetresRoad', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <tr>
              <td>
                <div class="form-group">
                  Total area of parkland proposed:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('tParklandProposed', $overview->tParklandProposed, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('tParklandProposed', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="singleSiteSummary" hidden=true>
          <legend><span>Single Site Summary</span></legend>
          <table class="table">
            <tr>
              <td>
                <div class="form-group">
                  Total Site Area:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('tSiteArea', $overview->tSiteArea, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('tSiteArea', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  Number of Buildings:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('numberBuildings', $overview->numberBuildings, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('numberBuildings', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Total Building GFA:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('tBuildingGFA', $overview->tBuildingGFA, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('tBuildingGFA', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  Total Building Site Coverage:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('tBuildingSite', $overview->tBuildingSite, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('tBuildingSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Total Building Height:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('tBuildingHeight', $overview->tBuildingHeight, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('tBuildingHeight', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  Total landscape site coverage:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('tLandscapeSite', $overview->tLandscapeSite, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('tLandscapeSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Total hardstand site coverage:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('tHardstandSite', $overview->tHardstandSite, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('tHardstandSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  Total in-ground infrastructure length:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('tIngroundInfrastructure', $overview->tIngroundInfrastructure, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('tIngroundInfrastructure', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Onsite Sewerage Treatment Plan:
                  <div>
                    @if (isset($overview))
                    {{ Form::select('sewerageTreatmentPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $overview->sewerageTreatmentPlan, array('class' => 'form-control')); }}
                    @else
                    {{ Form::select('sewerageTreatmentPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  Onsite Water Treatment Plant:
                  <div>
                    @if (isset($overview))
                    {{ Form::select('waterTreatmentPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $overview->waterTreatmentPlan, array('class' => 'form-control')); }}
                    @else
                    {{ Form::select('waterTreatmentPlan', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Onsite Water Storage Units:
                  <div>
                    @if (isset($overview))
                    {{ Form::select('waterStorageUnit', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    $overview->waterStorageUnit, array('class' => 'form-control')); }}
                    @else
                    {{ Form::select('waterStorageUnit', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'),
                    NULL, array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="buildingResidentialFormat" hidden=true>
          <legend><span>Building Residential Format</span></legend>
          <label for="BuildResFormComment" class="control-label">Description of Development:</label><br />
          @if (isset($overview))
          {{ Form::textarea('BuildResFormComment', $overview->BuildResFormComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
          @else
          {{ Form::textarea('BuildResFormComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
          @endif
          <table class="table">
            <tr>
              <td>
                <div class="form-group">
                  No of 4 bedroom plus units:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nFourBeds', $overview->nFourBeds, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nFourBeds', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of 3 bedroom units:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nThreeBeds', $overview->nThreeBeds, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nThreeBeds', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  No of 2 bedroom units:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nTwoBeds', $overview->nTwoBeds, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nTwoBeds', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of 1 bedroom units:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nOneBeds', $overview->nOneBeds, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nOneBeds', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Total number of units:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('BuildResTotalUnit', $overview->BuildResTotalUnit, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('BuildResTotalUnit', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of carparks:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nResCarPark', $overview->nResCarPark, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nResCarPark', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="buildingCommercialFormat" hidden=true>
          <legend><span>Building Commercial Format</span></legend>
          <label for="BuildComFormComment" class="control-label">Description of Development:</label><br />
          @if (isset($overview))
          {{ Form::textarea('BuildComFormComment', $overview->BuildComFormComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
          @else
          {{ Form::textarea('BuildComFormComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
          @endif
          <table class="table">
            <tr>
              <td>
                <div class="form-group">
                  No of Units above 500 mˆ2:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('n500', $overview->n500, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('n500', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of Units between 250 and 500 mˆ2:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('n250and500', $overview->n250and500, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('n250and500', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  No of Units between 125 and 250 mˆ2:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('n125and250', $overview->n125and250, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('n125and250', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of Units below 125 mˆ2:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nBelow125', $overview->nBelow125, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nBelow125', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Total number of units:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('BuildComTotalUnit', $overview->BuildComTotalUnit, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('BuildComTotalUnit', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of carparks:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nComCarPark', $overview->nComCarPark, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nComCarPark', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="buildingIndustrialFormat" hidden=true>
          <legend><span>Building Industrial Format</span></legend>
          <label for="BuildIndFormComment" class="control-label">Description of Development:</label><br />
          @if (isset($overview))
          {{ Form::textarea('BuildIndFormComment', $overview->BuildIndFormComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
          @else
          {{ Form::textarea('BuildIndFormComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
          @endif
          <table class="table">
            <tr>
              <td>
                <div class="form-group">
                  No of Units above 2500 mˆ2:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('n2500', $overview->n2500, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('n2500', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of Units between 1000 and 2500 mˆ2:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('n1000and2500', $overview->n1000and2500, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('n1000and2500', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  No of Units between 500 and 1000 mˆ2:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('n500and1000', $overview->n500and1000, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('n500and1000', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of Units below 500 mˆ2:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nBelow500', $overview->nBelow500, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nBelow500', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Total number of units:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('BuildIndTotalUnit', $overview->BuildIndTotalUnit, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('BuildIndTotalUnit', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of carparks:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nIndCarPark', $overview->nIndCarPark, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nIndCarPark', '', array('class' => 'form-control')); }}
                    @endif
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
                  Buffer to Buildings:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('bufferedBuildings', $overview->bufferedBuildings, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('bufferedBuildings', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  Buffer to infrastructure plant:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('bufferInfrastructure', $overview->bufferInfrastructure, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('bufferInfrastructure', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Buffer to inground infrastructure:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('bufferInground', $overview->bufferInground, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('bufferInground', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  No of carparks:
                  <div>
                    @if (isset($overview))
                    {{ Form::text('nInfraCarPark', $overview->nInfraCarPark, array('class' => 'form-control')); }}
                    @else
                    {{ Form::text('nInfraCarPark', '', array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="developmentFormat" hidden=true>
          <legend><span>Development Format</span></legend>
          <label for="DevFormComment" class="control-label">Description of Development:</label><br />
          @if (isset($overview))
          {{ Form::textarea('DevFormComment', $overview->DevFormComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
          @else
          {{ Form::textarea('DevFormComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
          @endif
          <table class="table">
            <tr>
              <td>
                <div class="form-group">
                  Length of footpath/ bikeway (METRES):
                  <div>
                    @if (isset($overview))
                    {{ Form::text('lFootpathBike', $overview->lFootpathBike, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('lFootpathBike', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  Max. distance to parks (METRES):
                  <div>
                    @if (isset($overview))
                    {{ Form::text('mLengthParks', $overview->mLengthParks, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('mLengthParks', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Max. distance to shops (METRES):
                  <div>
                    @if (isset($overview))
                    {{ Form::text('mLengthShops', $overview->mLengthShops, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('mLengthShops', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  Max. distance to primary school (METRES):
                  <div>
                    @if (isset($overview))
                    {{ Form::text('mLengthSchool', $overview->mLengthSchool, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('mLengthSchool', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Max. distance to public transport (METRES):
                  <div>
                    @if (isset($overview))
                    {{ Form::text('mLengthPublicTransport', $overview->mLengthPublicTransport, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('mLengthPublicTransport', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  Opportunity for public transport within development:
                  <div>
                    @if (isset($overview))
                    {{ Form::select('publicTransport', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'), 
                    $overview->publicTransport, array('class' => 'form-control')); }}
                    @else
                    {{ Form::select('publicTransport', array(
                    'N/A' => 'N/A',
                    'No' => 'No',
                    'Yes' => 'Yes'), 
                    NULL, array('class' => 'form-control')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  Max. distance to community faciltiies (METRES):
                  <div>
                    @if (isset($overview))
                    {{ Form::text('mLenthFacilities', $overview->mLenthFacilities, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('mLenthFacilities', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="pResidential" class="col-xs-6 col-sm-4">
          <table class="table-condensed">
            <legend><span style="font-size: 18px;">Residential</span></legend>
            <tr>
              <td colspan="2">
                Residential Gross Floor Area
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('residentialGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->residentialGrossUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('residentialGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('residentialOGrossArea', $overview->residentialOGrossArea, array('class' => 'form-control', 'placeholder' => 'Residential Gross Value')); }}
                @else
                {{ Form::text('residentialOGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Residential Gross Value')); }}
                @endif
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Total Site Cover
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('residentialNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->residentialNetUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('residentialNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('residentialSiteCover', $overview->residentialSiteCover, array('class' => 'form-control', 'placeholder' => 'Residential Site Value')); }}
                @else
                {{ Form::text('residentialSiteCover', '', array('class' => 'form-control', 'placeholder' => 'Residential Site Value')); }}
                @endif
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="pOffice" class="col-xs-6 col-sm-4">
          <table class="table-condensed">
            <legend><span style="font-size: 18px;">Office</span></legend>
            <tr>
              <td colspan="2">
                Office Gross Floor Area
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('officeGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->officeGrossUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('officeGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('officeOGrossArea', $overview->officeOGrossArea, array('class' => 'form-control', 'placeholder' => 'Office Gross Value')); }}
                @else
                {{ Form::text('officeOGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Office Gross Value')); }}
                @endif
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Total Site Cover
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('officeNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->officeNetUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('officeNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('officeSiteCover', $overview->officeSiteCover, array('class' => 'form-control', 'placeholder' => 'Office Site Value')); }}
                @else
                {{ Form::text('officeSiteCover', '', array('class' => 'form-control', 'placeholder' => 'Office Site Value')); }}
                @endif
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="pRetail" class="col-xs-6 col-sm-4">
          <table class="table-condensed">
            <legend><span style="font-size: 18px;">Retail</span></legend>
            <tr>
              <td colspan="2">
                Retail Gross Floor Area
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('retailGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->retailGrossUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('retailGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('retailGrossArea', $overview->retailGrossArea, array('class' => 'form-control', 'placeholder' => 'Retail Gross Value')); }}
                @else
                {{ Form::text('retailGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Retail Gross Value')); }}
                @endif
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Total Site Cover
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('retailNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->retailNetUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('retailNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('retailSite', $overview->retailSite, array('class' => 'form-control', 'placeholder' => 'Retail Site Value')); }}
                @else
                {{ Form::text('retailSite', '', array('class' => 'form-control', 'placeholder' => 'Retail Site Value')); }}
                @endif
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="pSchool" class="col-xs-6 col-sm-4">
          <table class="table-condensed">
            <legend><span style="font-size: 18px;">School</span></legend>
            <tr>
              <td colspan="2">
                School Gross Floor Area
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('schoolGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->schoolGrossUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('schoolGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('schoolGrossArea', $overview->schoolGrossArea, array('class' => 'form-control', 'placeholder' => 'School Gross Value')); }}
                @else
                {{ Form::text('schoolGrossArea', '', array('class' => 'form-control', 'placeholder' => 'School Gross Value')); }}
                @endif
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Total Site Cover
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('schoolNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->schoolNetUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('schoolNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('schoolSite', $overview->schoolSite, array('class' => 'form-control', 'placeholder' => 'School Site Value')); }}
                @else
                {{ Form::text('schoolSite', '', array('class' => 'form-control', 'placeholder' => 'School Site Value')); }}
                @endif
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="pHospital" class="col-xs-6 col-sm-4">
          <table class="table-condensed">
            <legend><span style="font-size: 18px;">Hospital</span></legend>
            <tr>
              <td colspan="2">
                Hospital Gross Floor Area
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('hospitalGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->hospitalGrossUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('hospitalGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('hospitalGrossArea', $overview->hospitalGrossArea, array('class' => 'form-control', 'placeholder' => 'Hospital Gross Value')); }}
                @else
                {{ Form::text('hospitalGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Hospital Gross Value')); }}
                @endif
                
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Total Site Cover
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('hospitalNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->hospitalNetUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('hospitalNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('hospitalSite', $overview->hospitalSite, array('class' => 'form-control', 'placeholder' => 'Hospital Site Value')); }}
                @else
                {{ Form::text('hospitalSite', '', array('class' => 'form-control', 'placeholder' => 'Hospital Site Value')); }}
                @endif
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="pCommunity" class="col-xs-6 col-sm-4">
          <table class="table-condensed">
            <legend><span style="font-size: 18px;">Community/ Community Health Centre</span></legend>
            <tr>
              <td colspan="2">
                Community Gross Floor Area
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('communityGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->communityGrossUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('communityGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('communityGrossArea', $overview->communityGrossArea, array('class' => 'form-control', 'placeholder' => 'Community Gross Value')); }}
                @else
                {{ Form::text('communityGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Community Gross Value')); }}
                @endif
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Total Site Cover
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('communityNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->communityNetUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('communityNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('communitySite', $overview->communitySite, array('class' => 'form-control', 'placeholder' => 'Community Site Value')); }}
                @else
                {{ Form::text('communitySite', '', array('class' => 'form-control', 'placeholder' => 'Community Site Value')); }}
                @endif
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset id="pOther" class="col-xs-6 col-sm-4">
          <table class="table-condensed">
            <legend><span style="font-size: 18px;">Other Type </span></legend>
            <tr>
              <td colspan="2">
                Other Gross Floor Area
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('otherGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->otherGrossUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('otherGrossUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('otherGrossArea', $overview->otherGrossArea, array('class' => 'form-control', 'placeholder' => 'Other Gross Value')); }}
                @else
                {{ Form::text('otherGrossArea', '', array('class' => 'form-control', 'placeholder' => 'Other Gross Value')); }}
                @endif
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Total Site Cover
              </td>
            </tr>
            <tr>
              <td>
                @if (isset($overview))
                {{ Form::select('otherNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                $overview->otherNetUnit, 
                ['class' => 'form-control']
                ) }}
                @else
                {{ Form::select('otherNetUnit', [
                'N/A' => 'Unit', 
                'Square Meter' => 'Square Meter', 
                'Square Kilometer' => 'Square Kilometer',
                'Square Mile' => 'Square Mile',
                'Square Foot' => 'Square Foot'],
                null, 
                ['class' => 'form-control']
                ) }}
                @endif
              </td>
              <td>
                @if (isset($overview))
                {{ Form::text('otherSite', $overview->otherSite, array('class' => 'form-control', 'placeholder' => 'Other Site Value')); }}
                @else
                {{ Form::text('otherSite', '', array('class' => 'form-control', 'placeholder' => 'Other Site Value')); }}
                @endif
              </td>
            </tr>
          </table>
        </fieldset>
      </div>
      {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right; margin-top:40px;')) }}
    </div>
  </div>
</div>
@stop