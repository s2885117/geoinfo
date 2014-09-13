<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstInfrastructureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('firstIntrastructure', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->refrences('id')->on('projects');
      $table->string('accessRoadNo');
      $table->string('accessRoadD');
      $table->string('infrastructureCorridorsNo');
      $table->string('infrastructureCorridorsD');
      $table->string('fixedIntrastuctureNo');
      $table->string('fixedIntrastuctureD');
      $table->string('waterTanksNo');
      $table->string('waterTanksD');
      $table->string('siteOfficeNo');
      $table->string('siteOfficeD');
      $table->string('cummunicationsTowerNo');
      $table->string('cummunicationsTowerD');
      $table->string('wasteDisposalNo');
      $table->string('wasteDisposalD');
      $table->string('waterTreatmentNo');
      $table->string('waterTreatmentD');
      $table->string('sewerageTreatmentNo');
      $table->string('sewerageTreatmentD');
      $table->string('renewableEnergyNo');
      $table->string('renewableEnergyD');
      $table->string('waterFeatureNo');
      $table->string('waterFeatureD');
      $table->string('exhaustStackNo');
      $table->string('exhaustStackD');
      $table->string('cummunityCoolingNo');
      $table->string('cummunityCoolingD');
      $table->string('vehicleTurnaroundsNo');
      $table->string('vehicleTurnaroundsD');
      $table->string('aboveCarParkingNo');
      $table->string('aboveCarParkingD');
      $table->string('underCarParkingNo');
      $table->string('underCarParkingD');
      $table->string('floodMitigationNo');
      $table->string('floodMitigationD');
      $table->string('irrigationAreasNo');
      $table->string('irrigationAreasD');
      $table->string('irrigationsFacilitiesNo');
      $table->string('irrigationsFacilitiesD');
      $table->string('waterPipesNo');
      $table->string('waterPipesD');
      $table->string('retentionSystemsNo');
      $table->string('retentionSystemsD');
      $table->string('detentionSystemsNo');
      $table->string('detentionSystemsD');
      $table->string('retainingWallNo');
      $table->string('retainingWallD');
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
