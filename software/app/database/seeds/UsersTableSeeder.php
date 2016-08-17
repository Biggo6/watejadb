<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();
		$user = new User;
		$user->username = "superadmin";
		$user->password = Hash::make('1234');
		$user->role		= 1;
		$user->status   = 1;
		$user->save();
	}

}