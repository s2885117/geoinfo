@extends('/../layout')
@section('title')
Site Conditions
@stop
@section('siteState')
class="active"
@stop
@section('body')
	  <div class="panel panel-default">
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
		<form class="form" role="form">
		  <table class="table">
		    <tr>
		    <td>
		      <div class="form-group">
			<label for="communityBuilding" class="control-label">Are there any existing building(s) within the community:</label>
			<div>
			  {{ Form::select('communityBuilding', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}        
			</div>
		      </div>
		    </td>
		    <td>
		      <div class="form-group">
			<label for="communityInfrastructure" class="control-label">Is there any existing public realm Infrastructure within the comunity:</label>
			<div>
        {{ Form::select('communityInfrastructure', [
					'N/A' => 'N/A', 
					'No' => 'No', 
					'Yes' => 'Yes'],
					null, 
					['class' => 'form-control']
				) }}
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
        {{ Form::select('buildingUnit', [// duplicate id
						'N/A' => 'N/A', 
						'Square Metre' => 'Square Metre', 
						'Square Kilometre' => 'Square Kilometre',
						'Square Mile' => 'Square Mile',
						'Square Yard' => 'Square Yard'], //??
						null, 
						['class' => 'form-control']
					) }}
			    <input type="text" class="form-control" id="floorArea" placeholder="value">
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
        {{ Form::select('buildingUnit', [// duplicate id
						'N/A' => 'N/A', 
						'Square Metre' => 'Square Metre', 
						'Square Kilometre' => 'Square Kilometre',
						'Square Mile' => 'Square Mile',
						'Square Yard' => 'Square Yard'], //??
						null, 
						['class' => 'form-control']
					) }}
			    <input type="text" class="form-control" id="infrastructureArea" placeholder="value">
        {{ Form::text('infrastructureArea', '', array('class' => 'form-control', 'placeholder' => 'value')); }}
			</div>
		      </div>
		      </fieldset>
		    </td>
		  </tr>
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
	      <div class="table-responsive">
		<form class="form" role="form">
		  <table class="table">
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="northSite" class="control-label">North of Site:</label>
			  <div>
          {{ Form::text('northSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="southSite" class="control-label">South of Site:</label>
			  <div>
          {{ Form::text('southSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		  <tr>
		      <td>
			<div class="form-group">
			  <label for="eastSite" class="control-label">East of Site:</label>
			  <div>
          {{ Form::text('eastSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="westSite" class="control-label">West of Site:</label>
			  <div>
          {{ Form::text('westSite', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="nearestResident" class="control-label">Nearest Resident:</label>
			  <div>
          {{ Form::text('nearestResident', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		      <td>
			<div class="form-group">
			  <label for="nearestCommercial" class="control-label">Nearest Commercial:</label>
			  <div>
			    <input type="text" class="form-control" id="nearestCommercial" placeholder="">
          {{ Form::text('nearestCommercial', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		    <tr>
		      <td>
			<div class="form-group">
			  <label for="nearestIndustrial" class="control-label">Nearest Industrial:</label>
			  <div>
          {{ Form::text('nearestIndustrial', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		    </tr>
		  </table>
		</form>
		<form class="form" role="form">
		  <table class="table">
		    <fieldset id="eBuildings">
		      <legend><span>Natural Environment Features</span></legend>
		      <tr>
		        <td>
			  <div class="form-group">
			    <label for="waterways" class="control-label">Waterways:</label>
			    <div>
            {{ Form::text('waterways', '', array('class' => 'form-control', 'placeholder' => '')); }}
			    </div>
			  </div>
			</td>
			<td>
			<div class="form-group">
			  <label for="drainage" class="control-label">Drainage:</label>
			  <div>
          {{ Form::text('drainage', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		      </tr>
		      <tr>
		        <td>
			  <div class="form-group">
			    <label for="vegetation" class="control-label">Vegetation:</label>
			    <div>
            {{ Form::text('vegetation', '', array('class' => 'form-control', 'placeholder' => '')); }}
			    </div>
			  </div>
			</td>
			<td>
			<div class="form-group">
			  <label for="fauna" class="control-label">Fauna:</label>
			  <div>
          {{ Form::text('fauna', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		      </tr>
		      <tr>
		        <td>
			  <div class="form-group">
			    <label for="acidSulfateSoils" class="control-label">Acid Sulfate Soils:</label>
			    <div>
            {{ Form::text('acidSulfateSoils', '', array('class' => 'form-control', 'placeholder' => '')); }}
			    </div>
			  </div>
			</td>
			<td>
			<div class="form-group">
			  <label for="qualityAgricultureLand" class="control-label">Good Quality Agriculatural Lands:</label>
			  <div>
          {{ Form::text('qualityAgricultureLand', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
			</div>
		      </td>
		      </tr>
		      <tr>
		        <td>
			  <div class="form-group">
			    <label for="lands" class="control-label">Lands:</label>
			    <div>
            {{ Form::text('lands', '', array('class' => 'form-control', 'placeholder' => '')); }}
			    </div>
			  </div>
			</td>
			<td>
			<div class="form-group">
			  <label for="contaminatedLands" class="control-label">Contaminated Lands:</label>
			  <div>
          {{ Form::text('contaminatedLands', '', array('class' => 'form-control', 'placeholder' => '')); }}
			  </div>
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
	      <div class="table-responsive">
		<form class="form" role="form">
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
			      <td>{{ Form::text('periodEpoch1', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
            
			<td>{{ Form::text('geologicalSymbol1', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('lithologicalDescription1', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>{{ Form::text('periodEpoch2', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('geologicalSymbol2', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('lithologicalDescription2', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>{{ Form::text('periodEpoch3', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('geologicalSymbol3', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('lithologicalDescription3', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
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
	    <div class="table-responsive">
	      <form class="form" role="form">
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
			<td>{{ Form::text('soilSampleDepth1', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('soilClassification1', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('description1', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>{{ Form::text('soilSampleDepth2', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('soilSampleDepth2', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('Description2', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		      <tr>
			<td>{{ Form::text('soilSampleDepth3', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('soilClassification3', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
			<td>{{ Form::text('Description3', '', array('class' => 'form-control', 'placeholder' => '')); }}</td>
		      </tr>
		    </tbody>
		  </table>
		</form>
	    </div>
	  </div>
	</div>
      </div>
@stop