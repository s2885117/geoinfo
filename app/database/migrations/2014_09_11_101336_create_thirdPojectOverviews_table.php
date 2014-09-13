<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThirdPojectOverviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thridProjectOverviews', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->refrences('id')->on('projects');
      $table->boolean('singleSite');
      $table->boolean('subDivisionSite');
      $table->boolean('residential');
      $table->boolean('commercial');
      $table->boolean('industrial');
      $table->string('infrastructure');
      $table->string('tSiteArea');
      $table->string('numberBuildings');
      $table->string('tBuildingGFA');
      $table->string('tBuildingSite');
      $table->string('tBuildingHeight');
      $table->string('tLandscapeSite');
      $table->string('tHardstandSite');
      $table->string('tIngroundInfrastructure');
      $table->string('sewerageTreatmentPlant');
      $table->string('waterTreatmentPlant');
      $table->string('waterStorageUnit');
      $table->string('buildingResidentialFormat');
      $table->string('nFourBeds');
      $table->string('nThreeBeds');
      $table->string('nTwoBeds');
      $table->string('nOneBeds');
      $table->string('n500');
      $table->string('n250and500');
      $table->string('n125and250');
      $table->string('n125');
      $table->string('n2500');
      $table->string('n1000and2500');
      $table->string('n500and1000');
      $table->string('n500');
      $table->string('bufferBuildings');
      $table->string('bufferInfrastructure');
      $table->string('bufferInground');
      $table->string('tResidentialSites');
      $table->string('tMetresRoad');
      $table->string('tParklandProposed');
      $table->string('lFootpathBike');
      $table->string('mLengthParks');
      $table->string('mLengthsShops');
      $table->string('mLengthSchool');
      $table->string('mLengthPublicTransport');
      $table->string('publicTransport');
      $table->string('mLengthFacilities');
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
	}

}
