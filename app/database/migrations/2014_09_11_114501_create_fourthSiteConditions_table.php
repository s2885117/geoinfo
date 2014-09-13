<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFourthSiteConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fourthSiteConditions', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->refrences('id')->on('projects');
      $table->string('soilSampleDepth1');
      $table->string('soilSampleDepth2');
      $table->string('soilSampleDepth3');
      $table->string('soilClassification1');
      $table->string('soilClassification2');
      $table->string('soilClassification3');
      $table->string('description1');
      $table->string('description2');
      $table->string('description3');
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
