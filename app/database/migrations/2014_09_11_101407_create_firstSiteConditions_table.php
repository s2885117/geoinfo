<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstSiteConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('firstSiteConditions', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->refrences('id')->on('projects');
      $table->string('communityBuilding');
      $table->string('communityInfrastructure');
      $table->string('floorArea');
      $table->string('foorAreaUnit');
      $table->string('infrastructureArea');
      $table->string('infrastructureAreaUnit');
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
