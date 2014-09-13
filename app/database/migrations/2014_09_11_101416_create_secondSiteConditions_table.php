<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondSiteConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('secondSiteConditions', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->refrences('id')->on('projects');
      $table->string('northSite');
      $table->string('southSite');
      $table->string('eastSite');
      $table->string('westSite');
      $table->string('nearestResident');
      $table->string('nearestCommercial');
      $table->string('nearestIndustrial');
      $table->string('waterways');
      $table->string('vegitation');
      $table->string('fauna');
      $table->string('acidSulfateSoils');
      $table->string('qualityAgricultureLand');
      $table->string('lands');
      $table->string('contaminatedLands');
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
