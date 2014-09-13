<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('users', function($table) {
      $table->increments('id');
      $table->string('name');
      $table->string('surname');
      $table->string('email')->unique();
      $table->string('password')->index();
      $table->integer('project_id')->nullable();
      $table->foreign('project_id')->references('id')->on('projects');
      $table->boolean('tech');
      $table->boolean('finance');
      $table->string('remember_token')->nullable();
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
		DB::table('users')->delete();
	}

}
