<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondPojectOverviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('secondProjectOverviews', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->refrences('id')->on('projects');
      $table->string('developerName');
      $table->string('urbanPlannerName');
      $table->string('architectName');
      $table->string('accoutantName');
      $table->string('legalTeam');
      $table->string('civilEngineer');
      $table->string('structuralContructionEngineer');
      $table->string('ecologistName');
      $table->string('landscapeArchitect');
      $table->string('trafficEngineer');
      $table->string('surveyor');
      $table->string('geotechnicalSepcialist');
      $table->string('relationsAdvisor');
      $table->string('acousticEngineer');
      $table->string('hydrologyEngineer');
      $table->string('airQualitySpecialist');
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
