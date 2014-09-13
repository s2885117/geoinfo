<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstProjectOverviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('firstProjectOverviews', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->refrences('id')->on('projects');
      $table->string('projectName');
      $table->string('startDate');
      $table->string('approvalCost');
      $table->string('projectManager');
      $table->string('contactNumber');
      $table->string('projectTeam');
      $table->string('stateGovernment');
      $table->string('propertyName');
      $table->string('landTenureDrop');
      $table->string('landTenureText');
      $table->string('landownerName');
      $table->string('regulatoryAuthority');
      $table->string('landownerDetails');
      $table->string('localGovernment');
      $table->string('docsReference');
      $table->string('areaLot');
      $table->string('gpsCoordinates');
      $table->string('lotPlan1');
      $table->string('lotPlan2');
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
