<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		
		/*
		* User Types
		*
		*/
		$Users = array_fill(0, 20, []);

		/*
		* Add Users
		*
		*/
		$model = new User();

		foreach ($Users as $key => $User) {
			$model::updateOrCreate([
				'name'       => 'name' . ($key + 1),
				'email'      => 'name' . ($key + 1) . '@gmail.com',
				'birthday'   => (1990 + $key) . '.1.1',
				'password'   => Hash::make('123456')
			]);
		}
	}
}
