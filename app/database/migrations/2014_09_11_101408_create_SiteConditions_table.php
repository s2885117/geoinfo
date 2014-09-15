<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('SiteConditions', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->references('id')->on('projects');
      $table->string('communityBuilding')->nullable();
      $table->string('communityInfrastructure')->nullable();
      $table->string('floorArea')->nullable();
      $table->string('foorAreaUnit')->nullable();
      $table->string('infrastructureArea')->nullable();
      $table->string('infrastructureAreaUnit')->nullable();
      
      $table->string('northSite')->nullable();
      $table->string('southSite')->nullable();
      $table->string('eastSite')->nullable();
      $table->string('westSite')->nullable();
      $table->string('nearestResident')->nullable();
      $table->string('nearestCommercial')->nullable();
      $table->string('nearestIndustrial')->nullable();
      $table->string('waterways')->nullable();
      $table->string('vegitation')->nullable();
      $table->string('fauna')->nullable();
      $table->string('acidSulfateSoils')->nullable();
      $table->string('qualityAgricultureLand')->nullable();
      $table->string('lands')->nullable();
      $table->string('contaminatedLands')->nullable();
      
      $table->string('periodEpoch1')->nullable();
      $table->string('periodEpoch2')->nullable();
      $table->string('periodEpoch3')->nullable();
      $table->string('geologicalSymbol1')->nullable();
      $table->string('geologicalSymbol2')->nullable();
      $table->string('geologicalSymbol3')->nullable();
      $table->string('lithologicalDescription1')->nullable();
      $table->string('lithologicalDescription2')->nullable();
      $table->string('lithologicalDescription3')->nullable();
      
      $table->string('soilSampleDepth1')->nullable();
      $table->string('soilSampleDepth2')->nullable();
      $table->string('soilSampleDepth3')->nullable();
      $table->string('soilClassification1')->nullable();
      $table->string('soilClassification2')->nullable();
      $table->string('soilClassification3')->nullable();
      $table->string('description1')->nullable();
      $table->string('description2')->nullable();
      $table->string('description3')->nullable();
      
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
