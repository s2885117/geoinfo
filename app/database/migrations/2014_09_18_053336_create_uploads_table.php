<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration {

  /**
	 * Run the migrations.
	 *
	 * @return void
	 */
  public function up()
  {
    //
    Schema::create('uploads', function($table) {
      $table->increments('id');
      $table->string('file_name');
      $table->string('file_url');
      $table->integer('file_size');
      $table->integer('projects_id')->unsigned()->nullable();
      $table->foreign('projects_id')->references('id')->on('projects');
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
    Schema::drop('uploads');
  }

}
