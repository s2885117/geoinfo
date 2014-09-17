<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfrastructuresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('infrastructures', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->references('id')->on('project');
      $table->string('accessRoadNo')->nullable();
      $table->string('accessRoadD')->nullable();
      $table->string('infrastructureCorridorsNo')->nullable();
      $table->string('infrastructureCorridorsD')->nullable();
      $table->string('fixedInfrastuctureNo')->nullable();
      $table->string('fixedInfrastuctureD')->nullable();
      $table->string('waterTanksNo')->nullable();
      $table->string('waterTanksD')->nullable();
      $table->string('siteOfficeNo')->nullable();
      $table->string('siteOfficeD')->nullable();
      $table->string('communicationsTowerNo')->nullable();
      $table->string('communicationsTowerD')->nullable();
      $table->string('wasteDisposalNo')->nullable();
      $table->string('wasteDisposalD')->nullable();
      $table->string('waterTreatmentNo')->nullable();
      $table->string('waterTreatmentD')->nullable();
      $table->string('sewerageTreatmentNo')->nullable();
      $table->string('sewerageTreatmentD')->nullable();
      $table->string('renewableEnergyNo')->nullable();
      $table->string('renewableEnergyD')->nullable();
      $table->string('waterFeatureNo')->nullable();
      $table->string('waterFeatureD')->nullable();
      $table->string('exhaustStackNo')->nullable();
      $table->string('exhaustStackD')->nullable();
      $table->string('communityCoolingNo')->nullable();
      $table->string('communityCoolingD')->nullable();
      $table->string('vehicleTurnaroundsNo')->nullable();
      $table->string('vehicleTurnaroundsD')->nullable();
      $table->string('aboveCarParkingNo')->nullable();
      $table->string('aboveCarParkingD')->nullable();
      $table->string('underCarParkingNo')->nullable();
      $table->string('underCarParkingD')->nullable();
      $table->string('floodMitigationNo')->nullable();
      $table->string('floodMitigationD')->nullable();
      $table->string('irrigationAreasNo')->nullable();
      $table->string('irrigationAreasD')->nullable();
      $table->string('irrigationsFacilitiesNo')->nullable();
      $table->string('irrigationsFacilitiesD')->nullable();
      $table->string('waterPipesNo')->nullable();
      $table->string('waterPipesD')->nullable();
      $table->string('retentionSystemsNo')->nullable();
      $table->string('retentionSystemsD')->nullable();
      $table->string('detentionSystemsNo')->nullable();
      $table->string('detentionSystemsD')->nullable();
      $table->string('retainingWallNo')->nullable();
      $table->string('retainingWallD')->nullable();
      
      $table->string('earthworksNo')->nullable();
      $table->string('earthworksD')->nullable();
      $table->string('accessRoadsNo')->nullable();
      $table->string('accessRoadsD')->nullable();
      $table->string('constructionCampsNo')->nullable();
      $table->string('constructionCampsD')->nullable();
      $table->string('layDownAreasNo')->nullable();
      $table->string('layDownAreasD')->nullable();
      $table->string('operationalSiteOfficeNo')->nullable();
      $table->string('operationalSiteOfficeD')->nullable();
      $table->string('truckTurnaroundsNo')->nullable();
      $table->string('truckTurnaroundsD')->nullable();
      $table->string('workshopsNo')->nullable();
      $table->string('workshopsD')->nullable();
      
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
	}

}
