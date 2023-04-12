<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\ProductsTableSeeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call(UsersTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		$this->call(ProductsTableSeeder::class);

		Model::reguard();
	}
}
