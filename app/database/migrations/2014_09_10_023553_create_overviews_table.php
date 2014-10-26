<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('overviews', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->references('id')->on('projects');
      $table->string('projectName')->nullable();
      $table->string('startDate')->nullable();
      $table->string('approvalCost')->nullable();
      $table->string('projectManager')->nullable();
      $table->string('contactNumber')->nullable();
      $table->string('projectTeam')->nullable();
      $table->string('stateGovernment')->nullable();
      $table->string('propertyName')->nullable();
      $table->string('landTenureDrop')->nullable();
      $table->string('landTenureText')->nullable();
      $table->string('landownerName')->nullable();
      $table->string('regulatoryAuthority')->nullable();
      $table->string('landownerDetails')->nullable();
      $table->string('localGovernment')->nullable();
      $table->string('docsReference')->nullable();
      $table->string('areaLot')->nullable();
      $table->string('gpsCoordinates')->nullable();
      $table->string('lotPlan1')->nullable();
      $table->string('lotPlan2')->nullable();      
      $table->string('developerName')->nullable();
      $table->string('urbanPlannerName')->nullable();
      $table->string('architectName')->nullable();
      $table->string('accountantName')->nullable();
      $table->string('legalTeam')->nullable();
      $table->string('civilEngineer')->nullable();
      $table->string('structuralConstructionEngineer')->nullable();
      $table->string('ecologistName')->nullable();
      $table->string('landscapeArchitect')->nullable();
      $table->string('trafficEngineer')->nullable();
      $table->string('surveyor')->nullable();
      $table->string('geotechnicalSpecialist')->nullable();
      $table->string('relationsAdvisor')->nullable();
      $table->string('acousticEngineer')->nullable();
      $table->string('hydrologyEngineer')->nullable();
      $table->string('airQualitySpecialist')->nullable();     
      $table->string('infrastructure')->nullable();
      $table->string('tSiteArea')->nullable();
      $table->string('numberBuildings')->nullable();
      $table->string('tBuildingGFA')->nullable();
      $table->string('tBuildingSite')->nullable();
      $table->string('tBuildingHeight')->nullable();
      $table->string('tLandscapeSite')->nullable();
      $table->string('tHardstandSite')->nullable();
      $table->string('tIngroundInfrastructure')->nullable();
      $table->string('sewerageTreatmentPlan')->nullable();
      $table->string('waterTreatmentPlan')->nullable();
      $table->string('waterStorageUnit')->nullable();
      $table->string('buildingResidentialFormat')->nullable();
      $table->string('nFourBeds')->nullable();
      $table->string('nThreeBeds')->nullable();
      $table->string('nTwoBeds')->nullable();
      $table->string('nOneBeds')->nullable();
      $table->string('n500')->nullable();
      $table->string('n250and500')->nullable();
      $table->string('n125and250')->nullable();
      $table->string('nBelow125')->nullable();
      $table->string('n2500')->nullable();
      $table->string('n1000and2500')->nullable();
      $table->string('n500and1000')->nullable();
      $table->string('nBelow500')->nullable();
      $table->string('bufferedBuildings')->nullable();
      $table->string('bufferInfrastructure')->nullable();
      $table->string('bufferInground')->nullable();
      $table->string('tResidentialSites')->nullable();
      $table->string('tMetresRoad')->nullable();
      $table->string('tParklandProposed')->nullable();
      $table->string('lFootpathBike')->nullable();
      $table->string('mLengthParks')->nullable();
      $table->string('mLengthShops')->nullable();
      $table->string('mLengthSchool')->nullable();
      $table->string('mLengthPublicTransport')->nullable();
      $table->string('publicTransport')->nullable();
      $table->string('mLenthFacilities')->nullable();
      $table->string('BuildResFormComment')->nullable();
      $table->string('BuildComFormComment')->nullable();
      $table->string('BuildIndFormComment')->nullable();
      $table->string('DevFormComment')->nullable();    
      $table->string('BuildResTotalUnit')->nullable();
      $table->string('BuildComTotalUnit')->nullable();
      $table->string('BuildIndTotalUnit')->nullable();  
      $table->string('residentialGrossUnit')->nullable();
      $table->string('residentialOGrossArea')->nullable();
      $table->string('residentialNetUnit')->nullable();
      $table->string('residentialSiteCover')->nullable();    
      $table->string('officeGrossUnit')->nullable();
      $table->string('officeOGrossArea')->nullable();
      $table->string('officeNetUnit')->nullable();
      $table->string('officeSiteCover')->nullable();     
      $table->string('retailGrossUnit')->nullable();
      $table->string('retailGrossArea')->nullable();
      $table->string('retailNetUnit')->nullable();
      $table->string('retailSite')->nullable();     
      $table->string('schoolGrossUnit')->nullable();
      $table->string('schoolGrossArea')->nullable();
      $table->string('schoolNetUnit')->nullable();
      $table->string('schoolSite')->nullable();     
      $table->string('hospitalGrossUnit')->nullable();
      $table->string('hospitalGrossArea')->nullable();
      $table->string('hospitalNetUnit')->nullable();
      $table->string('hospitalSite')->nullable();      
      $table->string('communityGrossUnit')->nullable();
      $table->string('communityGrossArea')->nullable();
      $table->string('communityNetUnit')->nullable();
      $table->string('communitySite')->nullable();
      $table->string('otherGrossUnit')->nullable();
      $table->string('otherGrossArea')->nullable();
      $table->string('otherNetUnit')->nullable();
      $table->string('otherSite')->nullable();
      
      $table->string('nResCarPark')->nullable();
      $table->string('nComCarPark')->nullable();
      $table->string('nIndCarPark')->nullable();
      $table->string('nInfraCarPark')->nullable();
      
      $table->timestamps();
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
    Schema::drop('overviews');
	}

}
