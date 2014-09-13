<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThirdSiteConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thirdSiteConditions', function($table) {
      $table->increments('id');
      $table->integer('project_id');
      $table->foreign('project_id')->refrences('id')->on('projects');
      $table->string('periodEpoch1');
      $table->string('periodEpoch2');
      $table->string('periodEpoch3');
      $table->string('geologicalSymbol1');
      $table->string('geologicalSymbol2');
      $table->string('geologicalSymbol3');
      $table->string('lithologicalDescription1');
      $table->string('lithologicalDescription2');
      $table->string('lithologicalDescription3');
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
