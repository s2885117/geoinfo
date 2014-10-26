@extends('homeLayout')
@section('title')
Values
@stop
@section('body')

<!------------------------------------------ Generic ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#overview" href="#collapse_1">Generic</a>
    </h4>
  </div>
  <div id="collapse_1" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->  
          
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="projectName" class="control-label"><span class="center">Temperature</span></label>
	    <ul>
	      <li>
		      Celsius
	      </li>
	      <li>
		      Fahrenheit
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented">/button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="projectName" class="control-label">Currency</label>
	    <ul>
	      <li>
		      &#x00024; AUD
	      </li>
	      <li>
		      &#x00024; USD
	      </li>
	      <li>
		      &#x00024; NZD
	      </li>
        <li>
		      &#x00024; CAD
	      </li>
	      <li>
		      &pound; Pounds
	      </li>
	      <li>
		      &euro; Euro
	      </li>
	      <li>
		      DEM  Deutschmark
	      </li>
        <li>
		      &#165;  Renminbi
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented">/button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
    <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="projectName" class="control-label">Rainfall</label>
	    <ul>
	      <li>
		      millimetres
	      </li>
	      <li>
		      inches	
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div><!-- End of values_box class -->

    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="projectName" class="control-label">Year</label>
	    <ul>
	      <li>
		      2014 to 2065
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div><!-- End of values_box class -->
	
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="projectName" class="control-label">Month</label>
	    <ul>
	      <li>
		      January to December
	      </li>
	    </ul>
	    <!-- No additions needed -->
	  </div><!-- End of values_box class -->
	
	  <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="projectName" class="control-label">User questions</label>
	    <ul>
	      <li>
		      Yes
	      </li>
	      <li>
		      No	
	      </li>
	      <li>
		      Not Applicable	
	      </li>
	    </ul>
	    <!-- No additions needed -->
	  </div><!-- End of values_box class -->
	
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="projectName" class="control-label">Gross Weight</label>
	    <ul>
	      <li>
		      kg
	      </li>
	      <li>
		      pounds 	
	      </li>
	      <li>
		      cubic metres 	
	      </li>
	      <li>
		      cubic feet 	
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
      <!-- End of values_box class -->
      
      <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="projectName" class="control-label">Weight</label>
	    <ul>
	      <li>
		      Microns
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
      <!-- End of values_box class -->

    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="projectName" class="control-label">volume</label>
	    <ul>
	      <li>
          litres
	      </li>
	      <li>
          gallons 	
	      </li>
	      <li>
          cubic metres 	
	      </li>
	      <li>
          cubic feet 	
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	
	  <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="projectName" class="control-label">length/ height</label>
	    <ul>
	      <li>
          metres
	      </li>
	      <li>
          feet 	
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->

    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="projectName" class="control-label">area</label>
	    <ul>
	      <li>
          hectare
	      </li>
	      <li>
          acre 	
	      </li>
	      <li>
          square metres	
	      </li>
	      <li>
          square feet 	
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
      
    <!--------------------------------------------------------------------------------------------->	  
	</div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>

<!------------------------------------------ Operational Waste ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_2">
	      Operational Waste
      </a>
    </h4>
  </div>
  <div id="collapse_2" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
        <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->   
          
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="projectName" class="control-label">Paper / Cardboard</label>
      <ul>
        <li>
          kg
        </li>
        <li>
          pounds 	
        </li>
        <li>
          cubic metres	
        </li>
        <li>
          cubic feet 	
        </li>
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->

    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="projectName" class="control-label">metal</label>
      <ul>
        <li>
          kg
        </li>
        <li>
          pounds 	
        </li>
        <li>
          cubic metres	
        </li>
        <li>
          cubic feet 	
        </li>	     
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->

    <div class="values_box">
      <label for="projectName" class="control-label">Glass</label>
      <ul>
        <li>
          kg
        </li>
        <li>
          pounds 	
        </li>
        <li>
          cubic metres	
        </li>
        <li>
          cubic feet 	
        </li>  
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->  

    <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">plastic	</label>
      <ul>
        <li>
          kg
        </li>
        <li>
          pounds 	
        </li>
        <li>
          cubic metres	
        </li>
        <li>
          cubic feet 	
        </li>	     
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->

    <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Organic</label>
      <ul>
        <li>
          kg
        </li>
        <li>
          pounds 	
        </li>
        <li>
          cubic metres	
        </li>
        <li>
          cubic feet 	
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Hazardous Waste</label>
      <ul>
        <li>
          kg
        </li>
        <li>
          pounds 	
        </li>
        <li>
          cubic metres	
        </li>
        <li>
          cubic feet 	
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->

    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="projectName" class="control-label">Other Non-Hazardous Waste</label>
      <ul>
        <li>
          kg
        </li>
        <li>
          pounds 	
        </li>
        <li>
          cubic metres	
        </li>
        <li>
          cubic feet 	
        </li> 
      </ul>
      <div><!-- Add item button -->
              <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
          
    <!--------------------------------------------------------------------------------------------->
        </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>

<!------------------------------------------ Construction Waste ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading"><!-- Start Menu panel-heading -->
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_3">
	      Construction Waste
      </a>
    </h4>
  </div><!-- End Menu panel heading -->
  
  <div id="collapse_3" class="panel-collapse collapse"><!-- Start Menu panel-collapse -->
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive"><!-- Start Menu table-responsive -->
	<!---------------------------------------------------------------------------------------------> 
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_1">
            Concrete
          </a>
	      </h4>
	    </div><!-- End Sub-Menu panel-heading -->
	    
	    <div id="collapse_3_1" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">
          <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
		    
    <!-- Start of values_box class -->
		<div class="values_box">
		  <label class="control-label">Volume generated</label>
		    <ul>
          <li>
            kg
          </li>
          <li>
            pounds
          </li>
          <li>
            cubic metres
          </li>
          <li>
            cubic feet
          </li>
		     </ul>
      <div><!-- Add item button -->
			  <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		  </div>
		</div>
		<!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/kg
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End of Sub-Menu table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_2">
		  Metal
		</a>
	      </h4>
	    </div><!-- End Sub-Menu panel-heading -->
	    
	    <div id="collapse_3_2" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">

		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  kg
			</li>
			<li>
			  pounds
			</li>
			<li>
			  cubic metres
			</li>
			<li>
			  cubic feet
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/kg
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End of Sub-Menu table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_3">
		  Glass
		</a>
	      </h4>
	    </div><!-- End Sub-Menu panel-heading -->
	    
	    <div id="collapse_3_3" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">

		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  kg
			</li>
			<li>
			  pounds
			</li>
			<li>
			  cubic metres
			</li>
			<li>
			  cubic feet
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/kg
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End of Sub-Menu table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_4">
		  Timber
		</a>
	      </h4>
	    </div><!-- End Sub-Menu panel-heading -->
	    
	    <div id="collapse_3_4" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">

		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  kg
			</li>
			<li>
			  pounds
			</li>
			<li>
			  cubic metres
			</li>
			<li>
			  cubic feet
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/kg
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End of Sub-Menu table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_5">
		  Organic
		</a>
	      </h4>
	    </div><!-- End outer panel-heading -->
	    
	    <div id="collapse_3_5" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">

		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  kg
			</li>
			<li>
			  pounds
			</li>
			<li>
			  cubic metres
			</li>
			<li>
			  cubic feet
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/kg
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End ofSub-Menu  table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_6">
		  Hazardous Waste
		</a>
	      </h4>
	    </div><!-- End Sub-Menu panel-heading -->
	    
	    <div id="collapse_3_6" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">

		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  kg
			</li>
			<li>
			  pounds
			</li>
			<li>
			  cubic metres
			</li>
			<li>
			  cubic feet
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/kg
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End of Sub-Menu table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start outer panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_7">
		  Other Non-Hazardous Waste
		</a>
	      </h4>
	    </div><!-- End outer panel-heading -->
	    
	    <div id="collapse_3_7" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">

		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  kg
			</li>
			<li>
			  pounds
			</li>
			<li>
			  cubic metres
			</li>
			<li>
			  cubic feet
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/kg
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End of Sub-Menu table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_8">
		  Conduit
		</a>
	      </h4>
	    </div><!-- End Sub-Menu panel-heading -->
	    
	    <div id="collapse_3_8" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">

		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  kg
			</li>
			<li>
			  pounds
			</li>
			<li>
			  cubic metres
			</li>
			<li>
			  cubic feet
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/kg
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End ofSub-Menu  table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_9">
		  Copper
		</a>
	      </h4>
	    </div><!-- End Sub-Menu panel-heading -->
	    
	    <div id="collapse_3_9" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">

		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  kg
			</li>
			<li>
			  pounds
			</li>
			<li>
			  cubic metres
			</li>
			<li>
			  cubic feet
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/kg
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End of Sub-Menu table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_10">
		  Water
		</a>
	      </h4>
	    </div><!-- End Sub-Menu panel-heading -->
	    
	    <div id="collapse_3_10" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">
		<form class="form" role="form">
		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  Litres
			</li>
			<li>
			  Gallons
			</li>
			<li>
			  Cubic Metres
			</li>
			<li>
			  Cubic Feet
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Cost of Volume generated</label>
		      <ul>
			<li>
			  $/Litre
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->

		    <!-- values_box -->
		  </div><!-- End of Sub-Menu table-responsive -->

	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
	      <h4 class="panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapse_3_11">
		  Green House Gas Emmissions
		</a>
	      </h4>
	    </div><!-- End Sub-Menu panel-heading -->
	    
	    <div id="collapse_3_11" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	      <div class="panel-body">
		  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
		    <!-- values_box -->
		    
		    <!-- Start of values_box class -->
		    <div class="values_box">
		      <label class="control-label">Volume generated</label>
		      <ul>
			<li>
			  CO2e/m3
			</li>
		      </ul>
		      <div><!-- Add item button -->
			<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
		      </div>
		    </div>
		    <!-- End of values_box class -->
		    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Cost of Volume generated</label>
      <ul>
        <li>
          $/CO2e/m3
        </li>
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->

    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>
		      </div><!-- End of Sub-Menu table-responsive -->
	      </div>
	    </div><!-- End Sub-Menu panel-collapse -->
	  </div>
	  
	  
	  <!---------------------------------------------------------------------------------------------> 
	      </div><!-- End of Menu table-responsive class -->
      </form>
    </div>
  </div><!-- End outer collapse panel -->
</div>

<!------------------------------------------ Renewable Energy ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_4">
	      Renewable Energy
      </a>
    </h4>
  </div>
  <div id="collapse_4" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->  
          
  
  <div class="panel panel-default">
    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_4_1">
          Solar Photovoltaic System
        </a>
      </h4>
    </div><!-- End ouSub-Menuter panel-heading -->
    <div id="collapse_4_1" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
      <div class="panel-body">
	      <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
	    
	  <div class="values_box">
      <label for="developerName" class="control-label">Electricity generated</label>
      <ul>
        <li>
    kWh/yr
        </li>
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of generated electricity saving</label>
    <ul>
      <li>
	$/kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Equivalent Carbon Saving</label>
    <ul>
      <li>
	CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of Carbon Saving</label>
    <ul>
      <li>
	$/CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Rate of Growth of Value of Carbon Saving</label>
    <ul>
      <li>
	% of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Social Value of Carbon where no carbon price is provided</label>
    <ul>
      <li>
	Value of Carbon Saving plus Rate of Growth of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
	    
	    <!-- values_box -->
	  </div><!-- End of Sub-Menu table-responsive -->

      </div>
    </div><!-- End Sub-Menu panel-collapse -->
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
      <h4 class="panel-title">
	<a data-toggle="collapse" data-parent="#accordion" href="#collapse_4_2">
	  Battery Storage System
	</a>
      </h4>
    </div><!-- End Sub-Menu panel-heading -->
    
    <div id="collapse_4_2" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
      <div class="panel-body">

	  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
	    <!-- values_box -->
	    
	    <div class="values_box">
    <label for="developerName" class="control-label">Electricity generated</label>
    <ul>
      <li>
	kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of generated electricity saving</label>
    <ul>
      <li>
	$/kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Equivalent Carbon Saving</label>
    <ul>
      <li>
	CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of Carbon Saving</label>
    <ul>
      <li>
	$/CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div>
  <!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Rate of Growth of Value of Carbon Saving</label>
    <ul>
      <li>
	% of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Social Value of Carbon where no carbon price is provided</label>
    <ul>
      <li>
	Value of Carbon Saving plus Rate of Growth of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
	    
	    <!-- values_box -->
	  </div><!-- End of Sub-Menu table-responsive -->

      </div>
    </div><!-- End Sub-Menu panel-collapse -->
  </div>
   
    <div class="panel panel-default">
    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
      <h4 class="panel-title">
	<a data-toggle="collapse" data-parent="#accordion" href="#collapse_4_3">
	  Co-Generation Plant
	</a>
      </h4>
    </div><!-- End Sub-Menu panel-heading -->
    
    <div id="collapse_4_3" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
      <div class="panel-body">

	  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
	    <!-- values_box -->
	    
	    <div class="values_box">
    <label for="developerName" class="control-label">Electricity generated</label>
    <ul>
      <li>
	kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of generated electricity saving</label>
    <ul>
      <li>
	$/kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Equivalent Carbon Saving</label>
    <ul>
      <li>
	CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of Carbon Saving</label>
    <ul>
      <li>
	$/CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Rate of Growth of Value of Carbon Saving</label>
    <ul>
      <li>
	% of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Social Value of Carbon where no carbon price is provided</label>
    <ul>
      <li>
	Value of Carbon Saving plus Rate of Growth of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
	    
	    <!-- values_box -->
	  </div><!-- End of Sub-Menu table-responsive -->

      </div>
    </div><!-- End Sub-Menu panel-collapse -->
  </div>
    
     <div class="panel panel-default">
    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
      <h4 class="panel-title">
	<a data-toggle="collapse" data-parent="#accordion" href="#collapse_4_4">
	  Ground Source Heat Pump
	</a>
      </h4>
    </div><!-- End Sub-Menu panel-heading -->
    
    <div id="collapse_4_4" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
      <div class="panel-body">

	  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
	    <!-- values_box -->
	    
	    <div class="values_box">
    <label for="developerName" class="control-label">Electricity generated</label>
    <ul>
      <li>
	kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of generated electricity saving</label>
    <ul>
      <li>
	$/kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Equivalent Carbon Saving</label>
    <ul>
      <li>
	CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of Carbon Saving</label>
    <ul>
      <li>
	$/CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Rate of Growth of Value of Carbon Saving</label>
    <ul>
      <li>
	% of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Social Value of Carbon where no carbon price is provided</label>
    <ul>
      <li>
	Value of Carbon Saving plus Rate of Growth of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
	    
	    <!-- values_box -->
	  </div><!-- End of Sub-Menu table-responsive -->

      </div>
    </div><!-- End Sub-Menu panel-collapse -->
  </div>
     
  <div class="panel panel-default">
    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_4_5">
          Wind 
        </a>
      </h4>
    </div><!-- End Sub-Menu panel-heading -->
    
    <div id="collapse_4_5" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
      <div class="panel-body">
	      <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
	    <!-- values_box -->
	    
  <div class="values_box">
    <label for="developerName" class="control-label">Electricity generated</label>
      <ul>
        <li>
          kWh/yr
        </li>
      </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of generated electricity saving</label>
    <ul>
      <li>
	$/kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div>
  <!-- End of values_box class -->
  
	<div class="values_box">
    <label for="developerName" class="control-label">Equivalent Carbon Saving</label>
    <ul>
      <li>
	      CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of Carbon Saving</label>
    <ul>
      <li>
	$/CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Rate of Growth of Value of Carbon Saving</label>
    <ul>
      <li>
	% of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Social Value of Carbon where no carbon price is provided</label>
    <ul>
      <li>
	Value of Carbon Saving plus Rate of Growth of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
	    
	    <!-- values_box -->
	  </div><!-- End of Sub-Menu table-responsive -->

      </div>
    </div><!-- End inner panel-collapse -->
  </div>
      
  <div class="panel panel-default">
    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
      <h4 class="panel-title">
	<a data-toggle="collapse" data-parent="#accordion" href="#collapse_4_6">
	  Waste Generator
	</a>
      </h4>
    </div><!-- End Sub-Menu panel-heading -->
    
    <div id="collapse_4_6" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
      <div class="panel-body">

	  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
	    <!-- values_box -->
	    
	    <div class="values_box">
    <label for="developerName" class="control-label">Electricity generated</label>
    <ul>
      <li>
	kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of generated electricity saving</label>
    <ul>
      <li>
	$/kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Equivalent Carbon Saving</label>
    <ul>
      <li>
	CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of Carbon Saving</label>
    <ul>
      <li>
	$/CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Rate of Growth of Value of Carbon Saving</label>
    <ul>
      <li>
	% of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Social Value of Carbon where no carbon price is provided</label>
    <ul>
      <li>
	Value of Carbon Saving plus Rate of Growth of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
	    
	    <!-- values_box -->
	  </div><!-- End of Sub-Menu table-responsive -->

      </div>
    </div><!-- End Sub-Menu panel-collapse -->
  </div>
       
	<div class="panel panel-default">
    <div class="panel-heading"><!-- Start Sub-Menu panel-heading -->
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_4_7">
          Other
        </a>
      </h4>
    </div><!-- End Sub-Menu panel-heading -->
    
    <div id="collapse_4_7" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
      <div class="panel-body">

	  <div class="table-responsive"><!-- Start Sub-Menu table-responsive -->
	    <!-- values_box -->
	    
	    <div class="values_box">
    <label for="developerName" class="control-label">Electricity generated</label>
    <ul>
      <li>
	kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of generated electricity saving</label>
    <ul>
      <li>
	$/kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Equivalent Carbon Saving</label>
    <ul>
      <li>
	CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Value of Carbon Saving</label>
    <ul>
      <li>
	$/CO2e/m3
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Rate of Growth of Value of Carbon Saving</label>
    <ul>
      <li>
	% of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
  
	  <div class="values_box">
  <label for="developerName" class="control-label">Social Value of Carbon where no carbon price is provided</label>
    <ul>
      <li>
	Value of Carbon Saving plus Rate of Growth of Value of Carbon Saving
      </li>
    </ul>
    <div><!-- Add item button -->
      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div><!-- End of values_box class -->
	    
	    <!-- values_box -->
	  </div><!-- End of Sub-Menu table-responsive -->

      </div>
    </div><!-- End Sub-Menu panel-collapse -->
  </div>
          
    <!--------------------------------------------------------------------------------------------->          
	      </div><!-- End of Menu table-responsive class -->
      </form>
    </div>
  </div>
</div>

<!------------------------------------------ Energy Usage - Construction ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_5">
	Energy Usage - Construction
      </a>
    </h4>
  </div>
  <div id="collapse_5" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->
          
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Electricity used</label>
	    <ul>
	      <li>
		kWh/yr
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="developerName" class="control-label">Cost of electricity used</label>
	    <ul>
	      <li>
		$/kWh/yr
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div><!-- End of values_box class -->
          
<!--------------------------------------------------------------------------------------------->	  
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>

<!------------------------------------------ Energy Usage - Operations ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6">
	      Energy Usage - Operations
      </a>
    </h4>
  </div>
  <div id="collapse_6" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
          
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_1">
            Residential
          </a>
        </h4>
      </div>
      <div id="collapse_6_1" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
        <div class="panel-body">
          <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Electricity used</label>
      <ul>
        <li>
          kWh/yr
        </li>
      </ul>
      <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Cost of gas used</label>
      <ul>
        <li>
          $/kWh/yr
        </li>
      </ul>
      <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
  <div class="panel panel-default"><!-- Start Sub-Menu -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_2">
          Commercial
        </a>
      </h4>
    </div>
    <div id="collapse_6_2" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_3">
	    Retail
	  </a>
	</h4>
      </div>
      <div id="collapse_6_3" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_4">
	    Industrial
	  </a>
	</h4>
      </div>
      <div id="collapse_6_4" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_5">
	    School
	  </a>
	</h4>
      </div>
      <div id="collapse_6_5" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_6">
	    Hospital
	  </a>
	</h4>
      </div>
      <div id="collapse_6_6" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_7">
	    Landscape
	  </a>
	</h4>
      </div>
      <div id="collapse_6_7" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_8">
	    Pumping Plants
	  </a>
	</h4>
      </div>
      <div id="collapse_6_8" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_9">
	    Recycle/Treatment Plants
	  </a>
	</h4>
      </div>
      <div id="collapse_6_9" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_10">
	    Air-Conditioning/Cooling Systems
	  </a>
	</h4>
      </div>
      <div id="collapse_6_10" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_11">
	    Pool/Fountains
	  </a>
	</h4>
      </div>
      <div id="collapse_6_11" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Gas Used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of gas used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6_12">
	    Other Building Types
	  </a>
	</h4>
      </div>
      <div id="collapse_6_12" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Electricity used</label>
      <ul>
	<li>
	  kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of electricity used</label>
      <ul>
	<li>
	  $/kWh/yr
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
  <!-- Start of values_box class -->
  <div class="values_box">
    <label for="developerName" class="control-label">Gas Used</label>
    <ul>
      <li>
        kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
	    <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div>
  <!-- End of values_box class -->
    
  <!-- Start of values_box class -->
  <div class="values_box">
    <label for="developerName" class="control-label">Cost of gas used</label>
    <ul>
      <li>
        $/kWh/yr
      </li>
    </ul>
    <div><!-- Add item button -->
	    <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
    </div>
  </div>
  <!-- End of values_box class -->
    
<!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	      </div><!-- End Sub-Menu table-responsive -->
	    </div>
    </div><!-- End Sub-Menu panel-collapse -->
  </div>
  <!--------------------------------------- END SUB-MENU --------------------------------------->          
  <!--------------------------------------------------------------------------------------------->	  
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>

<!------------------------------------------ Water Usage - operational ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7">
        Water Usage - operational
      </a>
    </h4>
  </div>
  <div id="collapse_7" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
<!--------------------------------------------------------------------------------------------->          
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_1">
	    Residential
	  </a>
	</h4>
      </div>
      <div id="collapse_7_1" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_2">
	    Commercial
	  </a>
	</h4>
      </div>
      <div id="collapse_7_2" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_3">
	    Retail
	  </a>
	</h4>
      </div>
      <div id="collapse_7_3" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_4">
	    Industrial
	  </a>
	</h4>
      </div>
      <div id="collapse_7_4" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_5">
          School
        </a>
      </h4>
      </div>
      <div id="collapse_7_5" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Volume used</label>
      <ul>
	<li>
	  litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_6">
	    Hospital
	  </a>
	</h4>
      </div>
      <div id="collapse_7_6" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_7">
	    Landscape
	  </a>
	</h4>
      </div>
      <div id="collapse_7_7" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
        
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_8">
	    Pumping Plants
	  </a>
	</h4>
      </div>
      <div id="collapse_7_8" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_9">
	    Recycle/Treatment Plants
	  </a>
	</h4>
      </div>
      <div id="collapse_7_9" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_10">
	    Air-Conditioning/Cooling Systems
	  </a>
	</h4>
      </div>
      <div id="collapse_7_10" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_11">
	    Pool/Fountains
	  </a>
	</h4>
      </div>
      <div id="collapse_7_11" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/kWh/yr/megalitre
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7_12">
	    Other Building Types
	  </a>
	</h4>
      </div>
      <div id="collapse_7_12" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Volume used</label>
      <ul>
	<li>
	  litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Cost of volume used</label>
      <ul>
	<li>
	  $/litre/year
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
<!--------------------------------------------------------------------------------------------->	  
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>

<!------------------------------------------ Land Values ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_8">
        Land Values
      </a>
    </h4>
  </div>
  <div id="collapse_8" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->   
          
<!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Residential</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
         <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Commercial</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
         <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Retail</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
         <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Industrial</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
             <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">School</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
             <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Hospital</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Other Land Use Types</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
             <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Landscape</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Recycle/ treatment plants</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
             <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Infrastructure (other)</label>
      <ul>
        <li>
          Currency/Hectare
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">Park</label>
      <ul>
        <li>
          Currency/Hectare/Household/Year
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
          
    <!--------------------------------------------------------------------------------------------->    
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>

<!------------------------------------------ Unit value ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_9">
        Unit value
      </a>
    </h4>
  </div>
  <div id="collapse_9" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->  
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse_9_1">
            Residential
          </a>
        </h4>
      </div>
      <div id="collapse_9_1" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
        <div class="panel-body">
          <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">I bedroom unit</label>
      <ul>
        <li>
          currency
        </li>
      </ul>
      <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">2 bedroom unit</label>
      <ul>
        <li>
          currency
        </li>
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <div class="values_box">
      <label for="developerName" class="control-label">3 bedroom unit</label>
      <ul>
        <li>
          currency
        </li>
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div><!-- End of values_box class -->
    
    <div class="values_box">
      <label for="developerName" class="control-label">4 plus bedroom unit</label>
      <ul>
        <li>
          currency
        </li>
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 0 to 125 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 126 to 250 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 251 to 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units above 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	      <h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_9_2">
	    Commercial
	  </a>
	</h4>
      </div>
      <div id="collapse_9_2" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 0 to 125 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 126 to 250 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 251 to 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units above 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_9_3">
	    Retail
	  </a>
	</h4>
      </div>
      <div id="collapse_9_3" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 0 to 125 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 126 to 250 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 251 to 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units above 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_9_4">
	    Industrial
	  </a>
	</h4>
      </div>
      <div id="collapse_9_4" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 0 to 125 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 126 to 250 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 251 to 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units above 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_9_5">
	    School
	  </a>
	</h4>
      </div>
      <div id="collapse_9_5" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 0 to 125 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 126 to 250 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 251 to 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units above 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_9_6">
	    Hospital
	  </a>
	</h4>
      </div>
      <div id="collapse_9_6" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 0 to 125 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 126 to 250 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 251 to 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units above 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
 
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_9_7">
	    Other Building Types
	  </a>
	</h4>
      </div>
      <div id="collapse_9_7" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 0 to 125 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 126 to 250 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units 251 to 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">units above 500 square metres</label>
      <ul>
	<li>
	  currency
	</li>
      </ul>
      <div><!-- Add item button -->
	<button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
          
    <!--------------------------------------------------------------------------------------------->	  
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>
<!------------------------------------------ Water Quality ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_10">
	      Water Quality
      </a>
    </h4>
  </div>
  <div id="collapse_10" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->    
          
    <!-- Start of values_box class -->      
	  <div class="values_box">
	    <label for="developerName" class="control-label">5-day BiChemical Oxygen Demand</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
    <div class="values_box">
      <label for="developerName" class="control-label">Suspended Solids (<span>Long Term</span>)</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Suspended Solids (<span>Short Term</span>)</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="developerName" class="control-label">pH</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Dissolved Oxygen</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Ammonia</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->	  
	  <div class="values_box">
	    <label for="developerName" class="control-label">Total Nitrogen (<span>Long Term</span>)</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="developerName" class="control-label">Total Nitrogen (<span>Short Term</span>)</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Total Nitrogen (<span>Maximum</span>)</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="projectName" class="control-label">Total Phospherous (Long Term)</label>
      <ul>
        <li>
          mg/Litre
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="projectName" class="control-label">Total Phospherous (Short Term)</label>
      <ul>
        <li>
          mg/Litre
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="projectName" class="control-label">Total Phospherous (Maximum)</label>
      <ul>
        <li>
          mg/Litre
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="projectName" class="control-label">Total Chlorine</label>
      <ul>
        <li>
          mg/Litre
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
    <div class="values_box">
      <label for="projectName" class="control-label">Enterococci</label>
      <ul>
        <li>
          organisms / litre
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
     <!-- Start of values_box class -->
    <div class="values_box">
    <label for="projectName" class="control-label">E-Coli</label>
      <ul>
        <li>
          cfu/100ml
        </li>	   
      </ul>
      <div><!-- Add item button -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class -->
	  
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Arsenic (<span>As III</span>)</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
    
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Arsenic (<span>As IV</span>)</label>
	    <ul>
	      <li>
          &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->    
	  <div class="values_box">
	    <label for="developerName" class="control-label">Boron</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Cadmium</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->    
	  <div class="values_box">
	    <label for="developerName" class="control-label">Chromium (<span>Cr III</span>)</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div><!-- End of values_box class -->
    
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Chromium (<span>Cr IV</span>)</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Cobalt</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->

    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Copper</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
    
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label class="control-label">Lead</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div><!-- End of values_box class -->
          
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label class="control-label">Manganese</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label class="control-label">Mercury (inorganic)</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label class="control-label">Nickel</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label class="control-label">Selenium (Total)</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label class="control-label">Silver</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
          
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label class="control-label">Zinc</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
          
    <!--------------------------------------------------------------------------------------------->	  
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>
    
<!------------------------------------------ Air Quality ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_11">
        Air Quality
      </a>
    </h4>
  </div>
  <div id="collapse_11" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->     
          
    <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="developerName" class="control-label">Dust</label>
	    <ul>
	      <li>
          &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
	   <!-- Start of values_box class -->
     <div class="values_box">
	    <label for="developerName" class="control-label">Nitrogen Dioxide</label>
	    <ul>
	      <li>
          &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
	   <!-- Start of values_box class -->
     <div class="values_box">
	    <label for="developerName" class="control-label">Carbon Monoxide</label>
	    <ul>
	      <li>
		      &mu;g/m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div><!-- End of values_box class -->
          
    <!--------------------------------------------------------------------------------------------->	  
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>
    
<!------------------------------------------ Noise ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_12">
	      Noise
      </a>
    </h4>
  </div>
  <div id="collapse_12" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_12_1">
	    Start time
	  </a>
	</h4>
      </div>
      <div id="collapse_12_1" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label"></label>
      <ul>
        <li>
	  am / pm
        </li>
      </ul>
      <div><!-- Add item button  -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
        <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_12_2">
	    Finish Time
	  </a>
	</h4>
      </div>
      <div id="collapse_12_2" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label"></label>
      <ul>
        <li>
	  am / pm
        </li>
      </ul>
      <div><!-- Add item button  -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_12_3">
	    LAeq,adj
	  </a>
	</h4>
      </div>
      <div id="collapse_12_3" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label"></label>
      <ul>
        <li>
	  dBA
        </li>
      </ul>
      <div><!-- Add item button  -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_12_4">
	    length of time for the measurement
	  </a>
	</h4>
      </div>
      <div id="collapse_12_4" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label"></label>
      <ul>
        <li>
	  minutes
        </li>
      </ul>
      <div><!-- Add item button  -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_12_5">
	    Short term noise event
	  </a>
	</h4>
      </div>
      <div id="collapse_12_5" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label"></label>
      <ul>
        <li>
	  dBA
        </li>
      </ul>
      <div><!-- Add item button  -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_12_6">
	    Medium Term Noise Event
	  </a>
	</h4>
      </div>
      <div id="collapse_12_6" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label"></label>
      <ul>
        <li>
	  dBA
        </li>
      </ul>
      <div><!-- Add item button  -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    
    <!--------------------------------------- NEW SUB-MENU --------------------------------------->
    <div class="panel panel-default"><!-- Start Sub-Menu panel-heading -->
      <div class="panel-heading">
	<h4 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse_12_7">
	    Long Term Noise Event
	  </a>
	</h4>
      </div>
      <div id="collapse_12_7" class="panel-collapse collapse"><!-- Start Sub-Menu panel-collapse -->
	<div class="panel-body">
	  <div class="table-responsive"><!-- Start Menu table-responsive -->
    <!----------------------------------- START SUB-MENU INPUTS ----------------------------------->
 
    <!-- Start of values_box class -->
    <div class="values_box">
      <label class="control-label"></label>
      <ul>
        <li>
	  dBA
        </li>
      </ul>
      <div><!-- Add item button  -->
        <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
      </div>
    </div>
    <!-- End of values_box class --> 
    
    <!------------------------------------ END SUB-MENU INPUTS ------------------------------------>	  
	  </div><!-- End Sub-Menu table-responsive -->
	</div>
      </div><!-- End Sub-Menu panel-collapse -->
    </div>
    <!--------------------------------------- END SUB-MENU --------------------------------------->
    <!--------------------------------------------------------------------------------------------->	  
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>
<!---------------------------------------------------------------- Ground Water Quality ----------------------------------------->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_13">
	      Ground Water Quality
      </a>
    </h4>
  </div>
  <div id="collapse_13" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->
          
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Groundwater Pressure in Geological Strata</label>
	    <ul>
	      <li>
		      kPa
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Electrical Conductivity</label>
	    <ul>
	      <li>
		      [mS/m]
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Temperature</label>
	    <ul>
	      <li>
          celcius/ farenheit
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Alkalinity (<span>bicarbonate, carbonate, hydroxide and total as CaCO3</span>)</label>
	    <ul>
	      <li>
          mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Anions (<span>bicarbonate, carbonate, hydroxide, chloride, sulphate</span>)</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Cations (<span>aluminium, calcium, magnesium, potassium, sodium</span>)</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Silica</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
          
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Total Petroleum Hydrocarbons</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->          
	  
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">BTEX (<span>as benzene, toluene, ethylbenzene, ortho-xylene, para-xylene, meta-xylene and total xylene</span>)</label>
	    <ul>
	      <li>
		      mg/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Polycyclic aromatic hydrocarbons (<span>including but not necessarily being limited to: naphthalene, phenanthrene, benzo[a]pyrene</span>)</label>
	    <ul>
	      <li>
		      &mu;g/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
	   
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Gross alpha + gross beta or radionuclides by gamma spectroscopy</label>
	    <ul>
	      <li>
		      Bq/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
	  
	  <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Chlorophyll a</label>
	    <ul>
	      <li>
		      &mu;g/Litre
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
	  <!-- End of values_box class -->
          
    <!--------------------------------------------------------------------------------------------->	  
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>

<!------------------------------------------ Concrete Greenhouse Gas ----------------------------------------->	
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_14">
	      Concrete Greenhouse Gas
      </a>
    </h4>
  </div>
  <div id="collapse_14" class="panel-collapse collapse">
    <div class="panel-body">
      <form class="form" role="form">
	      <div class="table-responsive">
    <!--------------------------------------------------------------------------------------------->	 
          
    <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="developerName" class="control-label">28 Day Strength, N/mm2</label>
	    <ul>
	      <li>
		      m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	
	   <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="developerName" class="control-label">Cement Content, kg/m3</label>
	    <ul>
	      <li>
		      m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	
	   <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="developerName" class="control-label">Slag Content, kg/m3</label>
	    <ul>
	      <li>
		      m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
	   <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="developerName" class="control-label">Fly Ash Content, kg/m3</label>
	     <ul>
	      <li>
		      m3
	      </li>
	    </ul>
	     <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div><!-- End of values_box class -->
	  
	   <!-- Start of values_box class -->
    <div class="values_box">
	    <label for="developerName" class="control-label">Silica Fume Content, kg/m3</label>
	    <ul>
	      <li>
		      m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
     <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Natural Pozzolan Content, kg/m3</label>
	    <ul>
	      <li>
		      m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
    <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Limestone Content, kg/m3</label>
	    <ul>
	      <li>
		      m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
	  
     <!-- Start of values_box class -->
	  <div class="values_box">
	    <label for="developerName" class="control-label">Embodied GHG, CO2e/m3</label>
	    <ul>
	      <li>
		      m3
	      </li>
	    </ul>
	    <div><!-- Add item button -->
	      <button type="button" class="btn glyphicon glyphicon-plus btn-default" onclick='addValues()' data-toggle="tooltip"  data-placement="right" title="Yet to be implemented"></button>
	    </div>
	  </div>
    <!-- End of values_box class -->
          
    <!--------------------------------------------------------------------------------------------->	
	      </div><!-- End of table-responsive class -->
      </form>
    </div>
  </div>
</div>
@stop