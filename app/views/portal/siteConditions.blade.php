@extends('/../layout')
@section('title')
Site Conditions
@stop
@section('siteState')
class="active"
@stop
@section('body')
<div class="LearnMore">
  <h4>Learn More</h4>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
</div>
<div class="panel panel-default"  style="margin-top: 20px;">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#overview" href="#collapseOne">
        <span class="badge pull-right">16</span>
        Buildings and Infrastructure to be Demolished
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
      <div class="table-responsive">
        {{ Form::open(array('action' => array('SiteController@update', $id), 'class' => 'form')) }}
        <label for="BuildInfraDemComment" class="control-label">Description of Buildings and Infrastructure to be demolished:</label><br />
        @if (isset($siteCondition))
        {{ Form::textarea('BuildInfraDemComment', $siteCondition->BuildInfraDemComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @else
        {{ Form::textarea('BuildInfraDemComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @endif
        <table class="table">
          <tr>
            <td>
              <div class="form-group">
                <label for="communityBuilding" class="control-label">Are there any existing building(s) within the community:</label>
                <div>
                  @if (isset($siteCondition))
                    {{ Form::select('communityBuilding', [
                  'N/A' => 'N/A', 
                  'No' => 'No', 
                  'Yes' => 'Yes'],
                  $siteCondition->communityBuilding, 
                  ['class' => 'form-control']
                  ) }}  
                    @else
                    {{ Form::select('communityBuilding', [
                  'N/A' => 'N/A', 
                  'No' => 'No', 
                  'Yes' => 'Yes'],
                  null, 
                  ['class' => 'form-control']
                  ) }}  
                    @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="communityInfrastructure" class="control-label">Is there any existing public realm Infrastructure within the comunity:</label>
                <div>
                  @if (isset($siteCondition))
                    {{ Form::select('communityInfrastructure', [
                  'N/A' => 'N/A', 
                  'No' => 'No', 
                  'Yes' => 'Yes'],
                  $siteCondition->communityInfrastructure, 
                  ['class' => 'form-control']
                  ) }}
                    @else
                    {{ Form::select('communityInfrastructure', [
                  'N/A' => 'N/A', 
                  'No' => 'No', 
                  'Yes' => 'Yes'],
                  null, 
                  ['class' => 'form-control']
                  ) }}
                    @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <fieldset id="eBuildings">
                <legend><span>Existing Building(s)</span></legend>
                <div class="form-group">
                  <label for="grossFloorArea" class="control-label">Total Gross Floor Area:</label>
                  <div class="form-inline" id="grossFloorArea">
                    @if (isset($siteCondition))
                    {{ Form::select('floorAreaUnit', [
                    'N/A' => 'N/A', 
                    'Square Metre' => 'Square Metre', 
                    'Square Feet' => 'Square Feet'],
                    $siteCondition->floorAreaUnit, 
                    ['class' => 'form-control']
                    ) }}
                    {{ Form::text('floorArea', $siteCondition->floorArea, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::select('floorAreaUnit', [
                    'N/A' => 'N/A', 
                    'Square Metre' => 'Square Metre', 
                    'Square Feet' => 'Square Feet'],
                    null, 
                    ['class' => 'form-control']
                    ) }}
                    {{ Form::text('floorArea', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </fieldset>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <fieldset id="pInfrastructure">
                <legend><span>Existing Public Realm Infrastructure</span></legend>
                <div class="form-group">
                  <label for="totalAreaInfrastructure" class="control-label">Total Area:</label>
                  <div class="form-inline" id="totalAreaInfrastructure">
                    @if (isset($siteCondition))
                    {{ Form::select('infrastructureAreaUnit', [
                    'N/A' => 'N/A', 
                    'Square Metre' => 'Square Metre', 
                    'Square Kilometre' => 'Square Kilometre',
                    'Square Mile' => 'Square Mile',
                    'Square Yard' => 'Square Yard'],
                    $siteCondition->infrastructureAreaUnit, 
                    ['class' => 'form-control']
                    ) }}
                    {{ Form::text('infrastructureArea', $siteCondition->infrastructureArea, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::select('infrastructureAreaUnit', [
                    'N/A' => 'N/A', 
                    'Square Metre' => 'Square Metre', 
                    'Square Kilometre' => 'Square Kilometre',
                    'Square Mile' => 'Square Mile',
                    'Square Yard' => 'Square Yard'],
                    NULL, 
                    ['class' => 'form-control']
                    ) }}
                    {{ Form::text('infrastructureArea', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </fieldset>
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
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        <span class="badge pull-right">18</span>
        Neighbouring Land Uses
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
      <label for="NeighLandUseComment" class="control-label">Describe the neighbouring land uses to the development site (include the radius from the development site used in describing the surrounding uses):</label><br />
        @if (isset($siteCondition))
        {{ Form::textarea('NeighLandUseComment', $siteCondition->NeighLandUseComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @else
        {{ Form::textarea('NeighLandUseComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @endif
      <div class="table-responsive">
        <table class="table">
          <tr>
            <td>
              <div class="form-group">
                <label for="northSite" class="control-label">North of Site:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('northSite', $siteCondition->northSite, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('northSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="southSite" class="control-label">South of Site:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('southSite', $siteCondition->southSite, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('southSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="eastSite" class="control-label">East of Site:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('eastSite', $siteCondition->eastSite, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('eastSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="westSite" class="control-label">West of Site:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('westSite', $siteCondition->westSite, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('westSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="nearestResident" class="control-label">Nearest Resident:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('nearestResident', $siteCondition->nearestResident, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('nearestResident', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="nearestCommercial" class="control-label">Nearest Commercial:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('nearestCommercial', $siteCondition->nearestCommercial, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('nearestCommercial', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          
          
          <tr>
            <td>
              <div class="form-group">
                <label for="nearestResident" class="control-label">Nearest School:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('nearestSchool', $siteCondition->nearestSchool, array('class' => 'form-control')); }}
                  @else
                  {{ Form::text('nearestSchool', '', array('class' => 'form-control')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="nearestCommercial" class="control-label">Nearest Hospital:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('nearestHospital', $siteCondition->nearestHospital, array('class' => 'form-control')); }}
                  @else
                  {{ Form::text('nearestHospital', '', array('class' => 'form-control')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          
           <tr>
            <td>
              <div class="form-group">
                <label for="nearestResident" class="control-label">Nearest Community/ Community Health Centre:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('nearestCommunity', $siteCondition->nearestCommunity, array('class' => 'form-control')); }}
                  @else
                  {{ Form::text('nearestCommunity', '', array('class' => 'form-control')); }}
                  @endif
                </div>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="nearestCommercial" class="control-label">Nearest Parkland:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('nearestParkland', $siteCondition->nearestParkland, array('class' => 'form-control')); }}
                  @else
                  {{ Form::text('nearestParkland', '', array('class' => 'form-control')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
          
          
          
          <tr>
            <td>
              <div class="form-group">
                <label for="nearestIndustrial" class="control-label">Nearest Industrial:</label>
                <div>
                  @if (isset($siteCondition))
                  {{ Form::text('nearestIndustrial', $siteCondition->nearestIndustrial, array('class' => 'form-control', 'placeholder' => '')); }}
                  @else
                  {{ Form::text('nearestIndustrial', '', array('class' => 'form-control', 'placeholder' => '')); }}
                  @endif
                </div>
              </div>
            </td>
          </tr>
        </table>
        <table class="table">
          <fieldset id="eBuildings">
            <legend><span>Natural Environment Features</span></legend>
            <tr>
              <td>
                <div class="form-group">
                  <label for="waterways" class="control-label">Waterways:</label>
                  <div>
                    @if (isset($siteCondition))
                    {{ Form::text('waterways', $siteCondition->waterways, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('waterways', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="drainage" class="control-label">Drainage:</label>
                  <div>
                    @if (isset($siteCondition))
                    {{ Form::text('drainage', $siteCondition->drainage, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('drainage', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="vegetation" class="control-label">Vegetation:</label>
                  <div>
                    @if (isset($siteCondition))
                    {{ Form::text('vegetation', $siteCondition->vegetation, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('vegetation', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="fauna" class="control-label">Fauna:</label>
                  <div>
                    @if (isset($siteCondition))
                    {{ Form::text('fauna', $siteCondition->fauna, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('fauna', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="acidSulfateSoils" class="control-label">Acid Sulfate Soils:</label>
                  <div>
                    @if (isset($siteCondition))
                    {{ Form::text('acidSulfateSoils', $siteCondition->acidSulfateSoils, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('acidSulfateSoils', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="qualityAgricultureLand" class="control-label">Good Quality Agriculatural Lands:</label>
                  <div>
                    @if (isset($siteCondition))
                    {{ Form::text('qualityAgricultureLand', $siteCondition->qualityAgricultureLand, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('qualityAgricultureLand', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="lands" class="control-label">Lands:</label>
                  <div>
                    @if (isset($siteCondition))
                    {{ Form::text('lands', $siteCondition->lands, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('lands', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="contaminatedLands" class="control-label">Contaminated Lands:</label>
                  <div>
                    @if (isset($siteCondition))
                    {{ Form::text('contaminatedLands', $siteCondition->contaminatedLands, array('class' => 'form-control', 'placeholder' => '')); }}
                    @else
                    {{ Form::text('contaminatedLands', '', array('class' => 'form-control', 'placeholder' => '')); }}
                    @endif
                  </div>
                </div>
              </td>
            </tr>
          </fieldset>
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
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
        <span class="badge pull-right">32</span>
        Geological Characteristic
      </a>
    </h4>
  </div>
  <div id="collapseThree" class="panel-collapse collapse">
    <div class="panel-body">
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
          35%
        </div>
      </div>
      <label for="GeoCharComment" class="control-label">Describe the geological characteristics of the development site and surrounding lands:</label><br />
        @if (isset($siteCondition))
        {{ Form::textarea('GeoCharComment', $siteCondition->GeoCharComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @else
        {{ Form::textarea('GeoCharComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @endif
      <div class="table-responsive">
        <table class="table" id="geologicalTable">
          <thead>
            <tr>
              <th>Period/Epoch</th>
              <th>Geological Symbol</th>
              <th>Lithological Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>@if (isset($siteCondition))
                {{ Form::text('periodEpoch1', $siteCondition->periodEpoch1, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('periodEpoch1', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>

              <td>@if (isset($siteCondition))
                {{ Form::text('geologicalSymbol1', $siteCondition->geologicalSymbol1, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('geologicalSymbol1', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('lithologicalDescription1', $siteCondition->lithologicalDescription1, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('lithologicalDescription1', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
            </tr>
            <tr>
              <td>@if (isset($siteCondition))
                {{ Form::text('periodEpoch2', $siteCondition->periodEpoch2, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('periodEpoch2', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('geologicalSymbol2', $siteCondition->geologicalSymbol2, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('geologicalSymbol2', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('lithologicalDescription2', $siteCondition->lithologicalDescription2, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('lithologicalDescription2', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
            </tr>
            <tr>
              <td>@if (isset($siteCondition))
                {{ Form::text('periodEpoch3', $siteCondition->periodEpoch3, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('periodEpoch3', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('geologicalSymbol3', $siteCondition->geologicalSymbol3, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('geologicalSymbol3', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('lithologicalDescription3', $siteCondition->lithologicalDescription3, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('lithologicalDescription3', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
            </tr>
            <tr>
              <td>
              <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
              </td>
            </tr>
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
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
        <span class="badge pull-right">42</span>
        Soil Characteristic
      </a>
    </h4>
  </div>
  <div id="collapseFour" class="panel-collapse collapse">
    <div class="panel-body">
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
          90%
        </div>
      </div>
      <label for="SoilCharComment" class="control-label">Describe the soil characteristics of the development site and surrounding lands:</label><br />
        @if (isset($siteCondition))
        {{ Form::textarea('SoilCharComment', $siteCondition->SoilCharComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @else
        {{ Form::textarea('SoilCharComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @endif
      <div class="table-responsive">
        <table class="table" id="soilTable">
          <thead>
            <tr>
              <th>Soil Sample Depth</th>
              <th>Soil Classification</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>@if (isset($siteCondition))
                {{ Form::text('soilSampleDepth1', $siteCondition->soilSampleDepth1, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('soilSampleDepth1', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('soilClassification1', $siteCondition->soilClassification1, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('soilClassification1', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('description1', $siteCondition->description1, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('description1', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
            </tr>
            <tr>
              <td>@if (isset($siteCondition))
                {{ Form::text('soilSampleDepth2', $siteCondition->soilSampleDepth2, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('soilSampleDepth2', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('soilClassification2', $siteCondition->soilClassification2, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('soilClassification2', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('description2', $siteCondition->description2, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('description2', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
            </tr>
            <tr>
              <td>@if (isset($siteCondition))
                {{ Form::text('soilSampleDepth3', $siteCondition->soilSampleDepth3, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('soilSampleDepth3', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('soilClassification3', $siteCondition->soilClassification3, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('soilClassification3', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
              <td>@if (isset($siteCondition))
                {{ Form::text('description3', $siteCondition->description3, array('class' => 'form-control', 'placeholder' => '')); }}
                @else
                {{ Form::text('description3', '', array('class' => 'form-control', 'placeholder' => '')); }}
                @endif</td>
            </tr>
            <tr>
              <td>
              <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='' data-toggle="tooltip"  data-placement="right" title="Add more"></button>
              </td>
            </tr>
          </tbody>
        </table>
        {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right')) }}
      </div>
    </div>
  </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------->

<div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">
	      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
		<span class="badge pull-right">2</span>
		Natural Environment Characteristics
	      </a>
	    </h4>
	  </div>
	  <div id="collapseFive" class="panel-collapse collapse">
	    <div class="panel-body">
	      <div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
		  10%
		</div>
	      </div>
        <label for="NatEnvCharComment" class="control-label">Describe the natural environment within which the development is occurring:</label><br />
        @if (isset($siteCondition))
        {{ Form::textarea('NatEnvCharComment', $siteCondition->NatEnvCharComment, array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @else
        {{ Form::textarea('NatEnvCharComment', '', array('class' => 'form-control', 'style' => 'width:100%', 'maxlength' => '2000')); }}
        @endif
	      <div class="table-responsive">
		  <table class="table">
		      <tr>
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

@stop