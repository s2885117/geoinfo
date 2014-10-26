<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->references('id')->on('project');
      
      $table->string('legislationIndicators')->nullable();
      $table->string('nationalLegislation')->nullable();
      $table->string('stateTerritory')->nullable();
      $table->string('planningLegislation')->nullable();
      $table->string('environmentalLegislation')->nullable();
      $table->string('otherLegislation')->nullable();
      
      //Second Section
      $table->string('activitiesIndicator')->nullable();
      $table->string('planningScheme')->nullable();
      $table->string('planningSchemeLand')->nullable();
      $table->string('applicableLand')->nullable();
      $table->string('applicableDevelopment')->nullable();
      $table->string('applicablePolicies')->nullable();
      $table->string('applicableEnvironmental')->nullable();
      $table->string('applicableLaw')->nullable();
      $table->string('applicablePermits')->nullable();
      $table->string('entryNoticePermit')->nullable();
      $table->string('occupationPermit')->nullable();
      
      //Third Section
    $table->string('environmentalIndicators')->nullable();
    $table->string('bushfireOverlays')->nullable();
    $table->string('floodOverlays')->nullable();
    $table->string('landslipOverlays')->nullable();
    $table->string('soilsOverlays')->nullable();
    $table->string('vegetationOverlays')->nullable();
    $table->string('siteContaminated')->nullable();
    $table->string('requireConsideration')->nullable();
    $table->string('ecologicalSurvey')->nullable();
    $table->string('ecologicalEntity')->nullable();
    $table->string('environmentalConstraints')->nullable();
    $table->string('environmentalEntity')->nullable();
    
    //Fourth Section
    $table->string('managementIndicators')->nullable();
    $table->string('environmentalManagementPlan')->nullable();
    $table->string('environmentalManagementPlanEntity')->nullable();
    $table->string('toxicityAssessment')->nullable();
    $table->string('toxicityAssessmentEntity')->nullable();
    $table->string('watersMonitoringPlan')->nullable();
    $table->string('watersMonitoringPlanEntity')->nullable();
    $table->string('fieldMonitoringProgram')->nullable();
    $table->string('fieldMonitoringProgramEntity')->nullable();
    $table->string('farfieldMonitoringProgram')->nullable();
    $table->string('farfieldMonitoringProgramEntity')->nullable();
    
    //Fifth Section
    $table->string('monitoringIndicators')->nullable();
    $table->string('offsetMonitoringProgram')->nullable();
    $table->string('offsetMonitoringProgramEntity')->nullable();
    $table->string('offsetManagementProgram')->nullable();
    $table->string('offsetManagementProgramEntity')->nullable();
    $table->string('rehabilitationManagement')->nullable();
    $table->string('rehabilitationManagementEntity')->nullable();
    $table->string('wasteManagementMonitoring')->nullable();
    $table->string('wasteManagementMonitoringEntity')->nullable();
    $table->string('faunaManagement')->nullable();
    $table->string('faunaManagementEntity')->nullable();
    $table->string('floraManagement')->nullable();
    $table->string('floraManagementEntity')->nullable();
    $table->string('ecologicalCommunities')->nullable();
    $table->string('ecologicalCommunitiesEntity')->nullable();
    $table->string('waterManagement')->nullable();
    $table->string('waterManagementEntity')->nullable();
    
    //Sixth Section
    $table->string('landIndicators')->nullable();
    $table->string('landownerConsent')->nullable();
    $table->string('landownerConsentEntity')->nullable();
    $table->string('governmentLandAdministration')->nullable();
    $table->string('governmentLandAdministrationEntity')->nullable();
    $table->string('localLandTenure')->nullable();
    $table->string('localLandTenureEntity')->nullable();
    $table->string('stateLandAdministration')->nullable();
    $table->string('stateLandAdministrationEntity')->nullable();
    $table->string('stateLandTenure')->nullable();
    $table->string('stateLandTenureEntity')->nullable();
    $table->string('nationalLandAdministration')->nullable();
    $table->string('nationalLandAdministrationEntity')->nullable();
    $table->string('nationalLandTenure')->nullable();
    $table->string('nationalLandTenureEntity')->nullable();
    
    //Seventh Section
    $table->string('heritageIndicators')->nullable();
    $table->string('nativeTitle')->nullable();
    $table->string('nativeTitleEntity')->nullable();
    $table->string('traditionalOwners')->nullable();
    $table->string('traditionalOwnersEntity')->nullable();
    $table->string('heritageScout')->nullable();
    $table->string('heritageScoutEntity')->nullable();
    $table->string('culturalHeritage')->nullable();
    $table->string('culturalHeritageEntity')->nullable();
    $table->string('culturalHeritageScout')->nullable();
    $table->string('culturalHeritageScoutEntity')->nullable();
      
      
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
    Schema::drop('activities');
	}

}
