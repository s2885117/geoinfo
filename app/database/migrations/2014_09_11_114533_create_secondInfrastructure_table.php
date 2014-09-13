<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondInfrastructureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('secondInfrastructure', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->refrences('id')->on('projects');
      $table->string('earthworksNo');
      $table->string('earthworksD');
      $table->string('accessRoadsNo');
      $table->string('accessRoadsD');
      $table->string('constructionCampsNo');
      $table->string('constructionCampsD');
      $table->string('layDownAreasNo');
      $table->string('layDownAreasD');
      $table->string('operationalSiteOfficeNo');
      $table->string('operationalSiteOfficeD');
      $table->string('truckTurnaroundsNo');
      $table->string('truckTurnaroundsD');
      $table->string('workshopsNo');
      $table->string('workshopsD');
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
