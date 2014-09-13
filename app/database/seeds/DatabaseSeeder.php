<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$user = new User;
    $user->name = "admin";
    $password = "password";
    $encrypted = Hash::make($password);
    $user->password = $encrypted;
    $user->remember_token = "default";
    $user->save();
	}

}
